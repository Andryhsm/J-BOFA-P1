<?php

namespace App\Http\Controllers\Artisan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TemoigneRepository;
use App\Repositories\UserRepository;
use App\Repositories\CityRepository;
use App\Repositories\ViewProjectRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailProject;
use Stripe;
use Session;
class ArtisanController extends Controller
{
    // protected $temoin_repo;
    // protected $user_repo;
    // protected $citie_repo;
    // public function __construct(TemoigneRepository $temoin_repo, UserRepository $user_repo,CityRepository $citie_repo){
    //     $this->temoin_repo = $temoin_repo;
    //     $this->user_repo = $user_repo;
    //     $this->citie_repo = $citie_repo;
    // }
    protected $temoin_repo;
    protected $user_repo;
    protected $citie_repo;
    protected $view_repo;
    public function __construct(TemoigneRepository $temoin_repo, UserRepository $user_repo,CityRepository $citie_repo,ViewProjectRepository $view_repo){
        $this->temoin_repo = $temoin_repo;
        $this->user_repo = $user_repo;
        $this->citie_repo = $citie_repo;
        $this->view_repo = $view_repo;
    }   
    

    public function index()
    {
        //dd(auth()->user()->id);
        $cities = auth()->user()->city_id;
        $user = $this->user_repo->findUser(auth()->user()->id);
        $postal = $user->city->ville_code_postal ;
        $code = $postal[0].$postal[1];
        $temoins = $this->temoin_repo->getTemoins();
        $locations = $this->citie_repo->getAddress($cities);
        $category = auth()->user()->category_id;
        $project_availables = $this->view_repo->projectDispo($category,$code);
        $notif_available = $this->view_repo->getNotif(auth()->user()->id,$category,$postal);
        $notif = count($notif_available);
        //dd(count($notif_available));
        $diff = $this->getDate();
        //dd($locations);
        return view('artisan.page.index', compact('temoins','locations','diff','notif','project_availables','user'));
    }

    // public function index()
    // {
    //     $temoins = $this->temoin_repo->getTemoins();
    //     return view('artisan.page.index', compact('temoins'));
    // }

    public function showAvailablePage()
    {
        $diff = $this->getDate();
        $category = auth()->user()->category_id;
        $user = $this->user_repo->findUser(auth()->user()->id);
        $postal = $user->city->ville_code_postal ;
        $code = $postal[0].$postal[1];
        $project_notif = $this->view_repo->getNotif(auth()->user()->id,$category,$postal);
        $project_availables = $this->view_repo->projectDispo($category);
        $notif = count($project_notif);
        return view('artisan.page.project_available',compact('diff','project_availables','notif'));
    }

    public function showProjectDetails($id) {
        $diff = $this->getDate();
        $user = $this->user_repo->findUser(auth()->user()->id);
        $project_accepteds = $this->view_repo->getOn(auth()->user()->id,$id);
        $postal = $user->city->ville_code_postal ;
        $code = $postal[0].$postal[1];
        $project_details = $this->view_repo->getProject($id);
        $category = auth()->user()->category_id;
        $project_availables = $this->view_repo->getNotif(auth()->user()->id,$category,$postal);
        $notif = count($project_availables);
        //dd($project_details);
    	return view('artisan.page.project_details',compact('diff','project_details','project_accepteds','project_availables','notif'));
    }

    public function showProjectAccepted()
    {
        $diff = $this->getDate();
        $user_id = auth()->user()->id;
        $project_accepteds = $this->view_repo->projectAccepted($user_id);
        $val = [];
        foreach ($project_accepteds as $value) {
            # code...
            array_push($val, $value->project_id);
        }
        $project_availables = $this->view_repo->projectAvAcc($val);
        //dd($project_accepteds);
        $user = $this->user_repo->findUser(auth()->user()->id);
        $postal = $user->city->ville_code_postal ;
        $code = $postal[0].$postal[1];
        $category = auth()->user()->category_id;
        $project_notif = $this->view_repo->getNotif(auth()->user()->id,$category,$postal);
        $notif = count($project_notif);
        return view('artisan.page.project_accepted', compact('diff','project_accepteds','project_availables','notif'));
    }

// Change Profil Menu
    public function showProfil($id) {
        $diff = $this->getDate();
        $cities = auth()->user()->city_id;
        $project_availables = $this->citie_repo->getAddress($cities);
        $locations = $project_availables;
        $profil = $this->user_repo->findUser($id);

        $user = $this->user_repo->findUser(auth()->user()->id);
        $postal = $user->city->ville_code_postal ;
        $code = $postal[0].$postal[1];
        $category = auth()->user()->category_id;
        $project_notif = $this->view_repo->getNotif(auth()->user()->id,$category,$postal);
        $notif = count($project_notif);
        return view('artisan.page.profil',compact('profil','diff','project_availables','locations','notif'));
    }
    public function coordonate($id) {

        $cities = auth()->user()->city_id;
        $project_availables = $this->citie_repo->getAddress($cities);
        $profil = $this->user_repo->findUser($id);
        $cities = $this->citie_repo->getAll();
        $diff = $this->getDate();

        $user = $this->user_repo->findUser(auth()->user()->id);
        $postal = $user->city->ville_code_postal ;
        $code = $postal[0].$postal[1];
        $category = auth()->user()->category_id;
        $project_notif = $this->view_repo->getNotif(auth()->user()->id,$category,$postal);
        $notif = count($project_notif);
        return view('artisan.page.coordonate',compact('profil','cities','diff','project_availables','notif'));
    }
     public function ChangeMdp() {
        $cities = auth()->user()->city_id;
        $project_availables = $this->citie_repo->getAddress($cities);
        $locations = $project_availables;
        $diff = $this->getDate();
        $user = $this->user_repo->findUser(auth()->user()->id);
        $postal = $user->city->ville_code_postal ;
        $code = $postal[0].$postal[1];
        $category = auth()->user()->category_id;
        $project_notif = $this->view_repo->getNotif(auth()->user()->id,$category,$postal);
        $notif = count($project_notif);
        return view('artisan.page.change_mdp',compact('diff','notif','project_availables'));
    }
    public function DocumentOfficial() {
        $diff = $this->getDate();
        return view('artisan.page.document_official',compact('diff'));
    }
    public function LabelQuality() {
        $diff = $this->getDate();
        return view('artisan.page.label_quality',compact('diff'));
    }
    public function Realisation() {
        $diff = $this->getDate();
        return view('artisan.page.realisation',compact('diff'));
    }

    public function updateProfil(Request $request){
        //dd($request['user_id']);
        $id = $request['user_id'];
        $this->user_repo->updateUser($id,$request->all());
        return redirect('/artisan/accueil');
    }
    public function confirmMail($id){
        $diff = $this->getDate();
        $this->user_repo->confirmMail($id);
        return redirect('/artisan/accueil');
    }
// Show Service Menu
    public function showService() {
        $diff =$this->getDate();
        $cities = auth()->user()->city_id;
        $user = $this->user_repo->findUser(auth()->user()->id);
        $postal = $user->city->ville_code_postal ;
        $code = $postal[0].$postal[1];
        $temoins = $this->temoin_repo->getTemoins();
        $locations = $this->citie_repo->getAddress($cities);
        $category = auth()->user()->category_id;
        $project_availables = $this->view_repo->projectDispo($category,$code);
        $notif_available = $this->view_repo->getNotif(auth()->user()->id,$category,$postal);
        $notif = count($project_availables);
        return view('artisan.page.service',compact('diff','project_availables','notif'));
    }

    //project accepted
    public function accepted(Request $request){
        $diff =$this->getDate();
        $this->view_repo->createAccept($request->all());
        // dd($values);
        // if ($values) {
            //dd(auth()->guard('admin')->user());
            $valueArray = [
                'name' => $request->first_name.' '.$request->last_name,
                'email'=>$request->email,
                'message'=>'Vous recevez cet email car l\'entreprise '.auth()->user()->enterprise.' peut faire votre projet',
                'url_confirm'=>url("artisan/confirm_email/".auth()->user()->id)
            ];
            Mail::to($request->email)->send(new EmailProject($valueArray));
            return redirect('/artisan/accueil');
        //}
    }

    public function showAccepted(){
        $diff =$this->getDate();
        $user_id = auth()->user()->id;
        $project_availables = $this->view_repo->projectAccepted($user_id);
        $user = $this->user_repo->findUser($user_id);
        $postal = $user->city->ville_code_postal ;
        $code = $postal[0].$postal[1];
        $category = auth()->user()->category_id;
        $project_notif = $this->view_repo->getNotif($user_id,$category,$postal);
        $notif = count($project_notif);
        return view('artisan.page.project_accepted.index',compact('diff','notif','project_availables'));
    }
    //end project accepted
    // change mdp
    public function updateMdp(Request $request){
        $mdp = $this->user_repo->findUser(auth()->user()->id);
        //dd($mdp->password);
        $rules = array(
            'actuel' => 'required' ,
            'new_mdp' => 'required' ,
            'new_confirm' => 'required' ,
        );
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            toastr()->error('Veuillez completer les champs !');
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            $value =  password_verify($request->actuel,$mdp->password);
            if($value){
                if($request->new_mdp == $request->new_confirm){
                    $this->user_repo->updateMdp(auth()->user()->id,$request->all());
                    toastr()->success('Votre mot de passe est à jour !' );
                    return redirect('/artisan/accueil');
                }else{
                    toastr()->warning('Les nouveaux mot de passe ne sont pas identique !' );
                    return Redirect::back()->withInput()->withErrors($validator);
                }
            }else{
               toastr()->warning('Le mot de passe actuel n\'est pas correct !' );
               return Redirect::back()->withInput()->withErrors($validator);
            }
        }
    }
    // end change mdp

    public function stripe()
    {
        $project_availables = "";
        $diff = $this->getDate();
        $user_id = auth()->user()->id;
        $project_availables = $this->view_repo->projectAccepted($user_id);
        $user = $this->user_repo->findUser($user_id);
        $postal = $user->city->ville_code_postal ;
        $code = $postal[0].$postal[1];
        $category = auth()->user()->category_id;
        $project_notif = $this->view_repo->getNotif($user_id,$category,$postal);
        $notif = count($project_notif);
        return view('artisan.page.payment',compact('diff','notif','project_availables'));

    }
 
 
/**
 * Redirect the user to the Payment Gateway.
 *
 * @return Response
 */
    public function payStripe(Request $request)
    {
        $diff = $this->getDate();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe= Stripe\Charge::create ([
            "amount" => 6 * 100,
            "currency" => "eur",
            "source" => $request->stripeToken,
            "description" => "Test payment " 
        ]);
        $this->user_repo->addAbonnement($stripe);
        Session::flash('success', 'Payment successful!');
        // dd($stripe);
        return back();

    //     $this->validate($request, [
    //         'card_no' => 'required',
    //         'expiry_month' => 'required',
    //         'expiry_year' => 'required',
    //         'cvv' => 'required',
    //     ]);
    
    // $stripe = Stripe::make('sk_test_pOmOcaYxfBK9EEcVzw6bh9XG');
    // try {
    //     $token = $stripe->tokens()->create([
    //         'card' => [
    //             'number'    => $request->get('card_no'),
    //             'exp_month' => $request->get('expiry_month'),
    //             'exp_year'  => $request->get('expiry_year'),
    //             'cvc'       => $request->get('cvv'),
    //         ],
    //     ]);
    //     if (!isset($token['id'])) {
    //         return Redirect::to('strips')->with('Token is not generate correct');
    //     }
    //     $charge = $stripe->charges()->create([
    //         'card' => $token['id'],
    //         'currency' => 'USD',
    //         'amount'   => 20,
    //         'description' => 'Register Event',
    //     ]);
    //     $charge = Charge::create(array(
    //         'amount' => 20,
    //         "source" => $token,
    //         'currency' => 'usd'
    //     ));
    
    //      return 'Payment Success';
    //     } catch (\Exception $ex) {
    //         return $ex->getMessage();
    //     }
            
    } 



    public function getDate(){
        $user_date = $this->user_repo->findUser(auth()->user()->id);
        if(isset($user_date->user_abonnement->created_at)){
            $start_date= strtotime($user_date->user_abonnement->created_at);
            $since_start = strtotime(\Carbon\Carbon::now());
            $diff = abs($since_start - $start_date);
            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
            $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
            $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
            //dd($minutes + 1);
            return $hours + 1;
        }else{
            $hours=0;
            return $hours;
        }
        
    }

}
