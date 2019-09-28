<?php

namespace App\Http\Controllers\Artisan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TemoigneRepository;

class ArtisanController extends Controller
{
    protected $temoin_repo;
    public function __construct(TemoigneRepository $temoin_repo){
        $this->temoin_repo = $temoin_repo;
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

    public function showProfil() {
        return view('artisan.page.profil');
    }
    public function coordonate() {
        return view('artisan.page.coordonate');
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
