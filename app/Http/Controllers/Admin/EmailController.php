<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Repositories\UserRepository;
use App\Repositories\ViewProjectRepository;

class EmailController extends Controller
{
    //
    protected $user_repo;
    protected $view_repo;

    public function __construct(UserRepository $user_repo, ViewProjectRepository $view_repo){
        $this->user_repo = $user_repo;
        $this->view_repo = $view_repo;
    }
    public function index()
    {
    	return view('admin.emailing.index');
    }

    public function sendEmial(){
    	//dd('ok');
    	$data = request()->all();
        $users = $this->user_repo->getOne($data['mail']);
        if(count($users)>0 && $users[0]->status == 0){
            $user = $users[0];
        	$devis = $this->view_repo->getAllProject();
            if(count($devis)>0){
                foreach ($devis as $devi) {
                    $valueArray = [
                        'name' => $user->first_name.' '.$user->name,
                        'name_devi' => $devi->first_name.' '.$devi->last_name,
                        'email'=>$devi->email,
                        'project'=>$devi->name,
                        'enterprise'=>$user->enterprise,
                        'phone'=>$devi->phone,
                        'address'=>$devi->ville_nom,
                        'postal'=>$devi->ville_code_postal,
                        'date'=>$devi->create_at,
                    ];
                    Mail::to($data['mail'])->send(new ContactMail($valueArray));
                }
            }
        	//Mail::to($data['mail'])->send(new ContactMail());
            toastr()->success("Mail envoyé !");
        }
    	return redirect()->route('emailing');
    }

    public function sendByDep(){
        $users = $this->user_repo->getAllUser();
        foreach ($users as $user) {
            $cate = $user->category_id;
            $postal = $user->city->ville_code_postal[0].''.$user->city->ville_code_postal[1];
            $devis = $this->view_repo->projectDispo($cate,$postal);
            //dd($devis);
            if($user->status == 0){
                if(count($devis)>0){
                    foreach ($devis as $devi) {
                        $valueArray = [
                            'name' => $user->first_name.' '.$user->name,
                            'name_devi' => $devi->first_name.' '.$devi->last_name,
                            'email'=>$devi->email,
                            'project'=>$devi->name,
                            'enterprise'=>$user->enterprise,
                            'phone'=>$devi->phone,
                            'address'=>$devi->ville_nom,
                            'postal'=>$devi->ville_code_postal,
                            'date'=>$devi->create_at,           
                        ];
                        Mail::to($user->email)->send(new ContactMail($valueArray));
                    }
            }   }
            
        }
        toastr()->success("Mail envoyé !");
        return redirect()->route('emailing');
    }


}
