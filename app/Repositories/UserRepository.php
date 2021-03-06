<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
Use App\User;
Use App\Models\LastSubscription;
Use App\Models\Abonnement;
Use App\Models\UserProfile;
Use App\Models\Contact;
Use App\Models\Site;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    protected $model;
    protected $user_profil;
    protected $user_abonnement;
    protected $subscribe;
    protected $contact;
    protected $site;


	public function __construct(User $user,UserProfile $user_profil,LastSubscription $user_abonnement,Abonnement $subscribe,Contact $contact,Site $site)
    {
        $this->model = $user;
        $this->user_profil = $user_profil;
        $this->user_abonnement = $user_abonnement;
        $this->subscribe = $subscribe;
        $this->contact = $contact;
        $this->site = $site;
    }

    public function findUser($user_id)
    {
        return $this->model->with('profile','category','city','user_abonnement')->find($user_id);
    }

    public function createUser($data)
    {
        $this->model->name = $data['name'];
        $this->model->first_name = $data['first_name'];
        $this->model->enterprise = $data['enterprise'];
        $this->model->city_id = $data['ville'];
        $this->model->category_id = $data['category'];
        $this->model->email = $data['email'];
        $this->model->phone = $data['phone'];
        if (isset($data['photo'])) 
            $this->model->photo = $data['photo'];
        $this->model->password = Hash::make($data['password']);
        $this->model->status = 1;
        $this->model->save();
        return $this->model;
    }

    public function updateUser($user_id, $data)
    {
        $this->model = $this->model->with('category','city','user_abonnement')->find($user_id);
        $this->model->name = $data['name'];
        $this->model->first_name = $data['first_name'];
        $this->model->enterprise = $data['enterprise'];
        $this->model->city_id = $data['ville'];
        $this->model->email = $data['email'];
        $this->model->phone = $data['phone'];
        if (isset($data['photo'])) 
            $this->model->photo = $data['photo'];        
        $this->model->password = (!empty($data['inputPassword']))? Hash::make($data['inputPassword']) : $this->model->password;
        $this->model->save();

        $this->user_profil = $this->user_profil->updateOrCreate(['user_id'   => $user_id],
            ['siret'=> $data['siret'],'creation'=> $data['creation'],'portable'=> $data['portable'],'fax'=> $data['fax'],'address'=> $data['address'],'metier'=> $data['metier'],'rge'=> $data['rge'],'gender'=> $data['gender'],'site'=> $data['site'],'description'=> $data['description']]);

    }

    public function getAllUser(){
        return $this->model->with('profile','category','city','user_abonnement')->orderBy('id','desc')->get();
    }

    public function deleteUser($data){
        $this->user_abonnement->where('user_id',$data['user_id'])->delete();
        return $this->model->where('id', $data['user_id'])->delete();
    }

    public function changeStatus($user_id){
        $this->model = $this->model->with('category')->with('city')->find($user_id);
        if ($this->model->status == 1){
            $this->model->status = 0;
        }
        else{
            $this->model->status = 1;
        }
        $this->model->save();
        $user = $this->findUser($user_id);
        return $user;
    }

    public function getMail($email){
        return $this->model->select('email')->where('email',$email)->get();
    }

    public function getTenArtisan(){
        return $this->model->with('profile')->with('category')->with('city')->orderBy('created_at','desc')->limit(10)->get();
    }
    public function confirmMail($user_id){
        $this->model = $this->findUser($user_id);
        $this->model->email_verified_at = \Carbon\Carbon::now();
        $this->model->save();
    }

    public function addAbonnement($data){
        $this->user_abonnement = LastSubscription::firstOrNew(array('user_id' => auth()->user()->id));
        //$this->user_abonnement->amount = $data['amount']/100;
        $this->user_abonnement->created_at = \Carbon\Carbon::now();
        $this->user_abonnement->user_id = auth()->user()->id;
        $this->user_abonnement->save();
        $this->subscribe->amount = $data['amount']/100;
        $this->subscribe->completed_at = \Carbon\Carbon::now();
        $this->subscribe->user_id = auth()->user()->id;
        $this->subscribe->save();
    }

    public function get_subscribe(){
        // $subs = $this->subscribe->get();
        // $ids=[];
        // $dates = [];
        // if(isset($subs)){
        //     foreach ($subs as $sub) {
        //         array_push($ids, $sub->user_id);
        //     }
        // }

        // $users = $this->model->whereIn('id',$ids)->get();
        $values=$this->subscribe->with('user_subscribe')->get();
        return $values;
    }

    public function updateMdp($id,$data){
        $this->model = $this->model->with('category')->find($id);
        $this->model->password = (!empty($data['new_mdp']))? Hash::make($data['new_mdp']) : $this->model->password;
        $this->model->save();
    }

    public function reseteMdp($data){
        $this->model = $this->model->where('id',$data['id'])->get();
        //dd($this->model);
        $this->model[0]->password = (!empty($data['password']))? Hash::make($data['password']) : $this->model[0]->password;
        $this->model[0]->save();
    }

    public function getOne($mail){
        return $this->model->with('profile','city','category')->where('email',$mail)->get();
    }

    public function getContact(){
       return $this->contact->find(1);
    }
    public function updateContact($data){
        $this->contact = $this->contact->find($data['id']);
        $this->contact->phone = $data['phone'];
        $this->contact->save();
    }

    public function createSite($data){
        $this->site->name = $data['name'];
        $this->site->email = $data['email'];
        $this->site->budget = $data['budget'];
        $this->site->enterprise = $data['enterprise'];
        $this->site->phone = $data['phone'];
        $this->site->message = $data['message'];
        $this->site->subject = $data['subject'];
        $this->site->user_id = auth()->user()->id;

        $this->site->save();
    }
}