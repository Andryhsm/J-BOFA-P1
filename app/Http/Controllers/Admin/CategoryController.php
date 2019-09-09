<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Service\UploadService;

class CategoryController extends Controller
{
    protected $category_repository;
    protected $upload_service;
    public function __construct(CategoryRepository $category_repository, UploadService $upload){
        $this->category_repository = $category_repository;
        $this->upload_service = $upload;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = false;
        return view('admin.category.form',compact('category'));
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
        $rules = array(    
            'name' => 'required'
        );        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            try{
                //$input = $request->all();
                $input = $this->uploadImage($request); 
                $categories = $this->category_repository->createCategory($input);
            }catch(\Exception $e){
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            }
            toastr()->success('Ajout catégorie réussie!');
            return redirect()->route('category.index');
        }
        // $category = $this->category_repository->createCategory($request->all());
        // return view('admin.category.index');
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
        $category = $this->category_repository->findCategory($id);
        return view('admin.category.form',compact('category'));
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
        $rules = array(    
            'name' => 'required',
        );        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            try{
                //$input = $request->all();
                $input = $this->uploadImage($request); 

                $categories = $this->category_repository->updateCategory($id, $input);
            }catch(\Exception $e){
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            }
            toastr()->success('Modification réussie!');
            return redirect()->route('category.index');
        }
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
        $this->category_repository->deleteCategory($id);
        toastr()->success('Suppression réussie!');
        return view('admin.category.index');
    }

    public function getAll(){
        $categories = $this->category_repository->getAll();
        if(isset($categories)){
            $data_tables = DataTables::collection($categories);
        }else{
            $data_tables = collect([]);
        }
        $data_tables->EditColumn('cat_name', function ($category) {
            if(isset($category->name))
            {
                return $category->name;
            }
                
        })->EditColumn('user', function ($category) {
            if(isset($category->created_by)){    
                return $category->admin->first_name.' '.$category->admin->last_name;
            }
        })->EditColumn('created', function ($category) {
            if(isset($category->created_at)) 
                return $category->created_at;
        })->EditColumn('status', function ($category) {
            switch ($category->status) {
                 case 0:
                    return '<div class="switch-container position-relative form-group">
                                <label class="switch" data-id="'.$category->id.'">
                                  <input type="checkbox" class="form-check-input" >
                                  <span class="slider round"></span>
                                </label>
                            </div>';
                    break; 
                case 1:
                    return '<div class="switch-container position-relative form-group">
                                <label class="switch" data-id="'.$category->id.'">
                                  <input type="checkbox" class="form-check-input" checked>
                                  <span class="slider round"></span>
                                </label>
                            </div>';
                    break; 
               
                
             }
        })->EditColumn('action', function ($category) {
            return view("admin.category.action", ['category' => $category]);
        });
        return $data_tables->rawColumns(['status','action'])->make(true);
    }
    public function updateStatus(Request $request){
        $id = $request->all()['category_id'];
        $status = $this->category_repository->changeStatus($id);
        return $status;
    }

    public function uploadImage($request)
    {
        $image_name = null;
        if ($request->hasFile('inputPhoto')) {
            $file = $request->file('inputPhoto');
            try {
                $image_name = $this->upload_service->upload($file, 'image/Category');
            } catch (\Exception $e) {
                flash()->error($e->getMessage());
                return Redirect::back();
            }
        }
        $input = $request->all();
        $input['inputPhoto'] = $image_name;
        return $input;
    }
}
