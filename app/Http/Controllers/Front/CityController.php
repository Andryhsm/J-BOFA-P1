<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CityRepository;

class CityController extends Controller
{
    //
    protected $city_repo;
    public function __construct(CityRepository $city_repo){
    	$this->city_repo = $city_repo;
    }

    public function getCity(Request $request){
    	return $this->city_repo->getCity($request->get('code_postal'));
    }
}
