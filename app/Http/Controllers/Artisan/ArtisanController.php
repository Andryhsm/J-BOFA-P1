<?php

namespace App\Http\Controllers\Artisan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TemoigneRepository;
use App\Repositories\UserRepository;
use App\Repositories\CityRepository;
use App\Repositories\ViewProjectRepository;
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
        $temoins = $this->temoin_repo->getTemoins();
        $locations = $this->citie_repo->getAddress($cities);
        $category = auth()->user()->category_id;
        $project_availables = $this->view_repo->projectDispo($category);
        $diff = $this->getDate();
        //dd($locations);
        return view('artisan.page.index', compact('temoins','locations','diff','project_availables'));
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
        $project_availables = $this->view_repo->projectDispo($category);
        return view('artisan.page.project_available',compact('diff','project_availables'));
    }

    public function showProjectDetails($id) {
        $diff = $this->getDate();
        $project = $this->view_repo->getProject($id);
        $category = auth()->user()->category_id;
        $project_availables = $this->view_repo->projectDispo($category);
        //dd($project_availables);
    	return view('artisan.page.project_details',compact('diff','project','project_availables'));
    }

    public function showProjectAccepted()
    {
        $diff = $this->getDate();
        //dd($locations);
        return view('artisan.page.project_accepted', compact('diff'));
    }

// Change Profil Menu
    public function showProfil($id) {
        $diff = $this->getDate();
        $profil = $this->user_repo->findUser($id);
        return view('artisan.page.profil',compact('profil','diff'));
    }
    public function coordonate($id) {
        $profil = $this->user_repo->findUser($id);
        $cities = $this->citie_repo->getAll();
        $diff = $this->getDate();
        return view('artisan.page.coordonate',compact('profil','cities','diff'));
    }
     public function ChangeMdp() {
        return view('artisan.page.change_mdp');
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
        $diff = $this->getDate();
        return view('artisan.page.service',compact('diff'));
    }


    public function stripe()
    {
        $diff = $this->getDate();
        return view('artisan.page.payment',compact('diff'));
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
            "amount" => 360 * 100,
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
            return $minutes;
        }else{
            $hours=0;
            return $hours;
        }
        
    }

}
