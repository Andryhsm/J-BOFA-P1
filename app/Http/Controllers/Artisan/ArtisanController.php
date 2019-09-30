<?php

namespace App\Http\Controllers\Artisan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TemoigneRepository;
use App\Repositories\UserRepository;

class ArtisanController extends Controller
{
    protected $temoin_repo;
    protected $user_repo;
    public function __construct(TemoigneRepository $temoin_repo, UserRepository $user_repo){
        $this->temoin_repo = $temoin_repo;
        $this->user_repo = $user_repo;
    }

    public function index()
    {
        $temoins = $this->temoin_repo->getTemoins();
        return view('artisan.page.index', compact('temoins'));
    }

    public function showAvailablePage()
    {
        return view('artisan.page.project_available');
    }

    public function showProjectDetails() {
    	return view('artisan.page.project_details');
    }

    public function showProfil($id) {
        $profil = $this->user_repo->findUser($id);
        return view('artisan.page.profil',compact('profil'));
    }
    public function coordonate($id) {
        $profil = $this->user_repo->findUser($id);
        return view('artisan.page.coordonate',compact('profil'));
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

}
