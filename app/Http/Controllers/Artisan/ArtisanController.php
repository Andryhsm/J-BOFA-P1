<?php

namespace App\Http\Controllers\Artisan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TemoigneRepository;
use App\Repositories\UserRepository;
use App\Repositories\CityRepository;

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
    public function __construct(TemoigneRepository $temoin_repo, UserRepository $user_repo,CityRepository $citie_repo){
        $this->temoin_repo = $temoin_repo;
        $this->user_repo = $user_repo;
        $this->citie_repo = $citie_repo;
    }   
    

    public function index()
    {
        $cities = auth()->user()->city_id;
        $temoins = $this->temoin_repo->getTemoins();
        $locations = $this->citie_repo->getAddress($cities);
        //dd($locations);
        return view('artisan.page.index', compact('temoins','locations'));
    }

    // public function index()
    // {
    //     $temoins = $this->temoin_repo->getTemoins();
    //     return view('artisan.page.index', compact('temoins'));
    // }

    public function showAvailablePage()
    {
        return view('artisan.page.project_available');
    }

    public function showProjectDetails() {
    	return view('artisan.page.project_details');
    }

// Change Profil Menu
    public function showProfil($id) {
        $profil = $this->user_repo->findUser($id);
        return view('artisan.page.profil',compact('profil'));
    }
    public function coordonate($id) {
        $profil = $this->user_repo->findUser($id);
        $cities = $this->citie_repo->getAll();
        return view('artisan.page.coordonate',compact('profil','cities'));
    }
     public function ChangeMdp() {
        return view('artisan.page.change_mdp');
    }
    public function DocumentOfficial() {
        return view('artisan.page.document_official');
    }
    public function LabelQuality() {
        return view('artisan.page.label_quality');
    }
    public function Realisation() {
        return view('artisan.page.realisation');
    }

    public function updateProfil(Request $request){
        //dd($request['user_id']);
        $id = $request['user_id'];
        $this->user_repo->updateUser($id,$request->all());
        return redirect('/artisan/accueil');
    }

// Show Service Menu
    public function showService() {
        return view('artisan.page.service');
    }

}
