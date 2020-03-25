<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TemoigneRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;

class TemoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $temoin_repo;
    protected $category_repo;

    public function __construct(TemoigneRepository $temoin_repo, CategoryRepository $category){
        $this->temoin_repo = $temoin_repo;
        $this->category_repo = $category;
    }

    public function index()
    {
        //
        return view('admin.temoignage.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = $this->category_repo->getCategory();
        $temoin = false;
        return view('admin.temoignage.form',compact('temoin','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->temoin_repo->createTemoin($request->all());
        return redirect('admin/temoignage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = $this->category_repo->getCategory();
         $temoin = $this->temoin_repo->findTemoin($id);
        return view('admin.temoignage.form',compact('temoin','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->temoin_repo->updateTemoin($id,$request->all());
        toastr()->success('Modification réussie!');
        return redirect('admin/temoignage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAll(){
        $temoins = $this->temoin_repo->getAll();
        $data_tables = DataTables::collection($temoins);
        $data_tables->EditColumn('category', function ($temoin) {
            if(isset($temoin->category_id))
            {
                return $temoin->categorie->name;
            }
                
        })->EditColumn('titre', function ($temoin) {
            if(isset($temoin->titre))    
                return $temoin->titre;
        })->EditColumn('description', function ($temoin) {
            if(isset($temoin->description)) 
                return $temoin->description;
        })->EditColumn('name', function ($temoin) {
            if(isset($temoin->name)) 
                return $temoin->name;
        })->EditColumn('status', function ($temoin) {
            switch ($temoin->status) {
                 case 0:
                    return '<div class="switch-container position-relative form-group">
                                <label class="switch" data-id="'.$temoin->id.'">
                                  <input type="checkbox" class="form-check-input" >
                                  <span class="slider round"></span>
                                </label>
                            </div>';
                    break; 
                case 1:
                    return '<div class="switch-container position-relative form-group">
                                <label class="switch" data-id="'.$temoin->id.'">
                                  <input type="checkbox" class="form-check-input" checked>
                                  <span class="slider round"></span>
                                </label>
                            </div>';
                    break; 
               
                
             }
        })->EditColumn('action', function ($temoin) {
            return view("admin.temoignage.action", ['temoin' => $temoin]);
        });
        return $data_tables->rawColumns(['status','action'])->make(true);
    }

    public function updateStatus(Request $request){
        $id = $request->all()['temoin_id'];
        $status = $this->temoin_repo->changeStatus($id);
        return $status;
    }
}
