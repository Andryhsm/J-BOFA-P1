<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ViewProjectRepository;
use Illuminate\Support\Facades\Redirect;

class DevisController extends Controller
{
    //
    protected $devis_repository;
    public function __construct(ViewProjectRepository $devis){
    	$this->devis_repository = $devis;
    }

    public function createDevis(Request $request){
    	//dd($request);
    	$this->devis_repository->createDevis($request->all());
    	return redirect('/');
    }

    public function newDevis(){
        return view('front.page.view_project');
    }
}
