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

}
