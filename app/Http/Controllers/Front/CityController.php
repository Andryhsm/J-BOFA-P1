<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CityRepository;
use App\Repositories\TemoigneRepository;
use App\Repositories\FaqRepository;

class CityController extends Controller
{
    //
    protected $city_repo;
    protected $faq_repo;
    protected $temoin_repo;
    public function __construct(CityRepository $city_repo, FaqRepository $faq_repo , TemoigneRepository $temoin_repo){
    	$this->city_repo = $city_repo;
    	$this->faq_repo = $faq_repo;
        $this->temoin_repo = $temoin_repo;
    }

    public function getCity(Request $request){
    	return $this->city_repo->getCity($request->get('code_postal'));
    }

    public function getFaq(){
    	$faqs = $this->faq_repo->getFaq();
        $temoins = $this->temoin_repo->getAllTemoins();
    	return view('front.page.faq',compact('faqs','temoins'));
    }
}
