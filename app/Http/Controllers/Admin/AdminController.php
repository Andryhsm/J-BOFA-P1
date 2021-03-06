<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
use App\Service\UploadService;
use App\Repositories\AdminRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $user_repository;
    protected $admin_repository;
    protected $upload_service;
    public function __construct(UserRepository $user_repository ,UploadService $upload, AdminRepository $admin){
        $this->user_repository = $user_repository;
        $this->admin_repository = $admin;
        $this->upload_service = $upload;
        $this->middleware('auth:admin');
    }

    public function index()
    {
        //
        return view('admin.user.list');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = false;
        return view('admin.form',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(    
            'inputName' => 'required',        
            'first_name' => 'required',        
            'inputPhone' => 'required',
            'inputEmail' => 'required',
            'inputPassword' => 'required'
        );
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            try{
                $input = $this->uploadImage($request); 
                $users = $this->admin_repository->createAdmin($input);
            }catch(\Exception $e){
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            }
            toastr()->success('Ajout utilisateur réussie!');
            return redirect()->route('Admin');
        }
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
        $user = $this->admin_repository->findAdmin($id);
        return view('admin.form',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        //
        $rules = array(    
            'inputName' => 'required',        
            'first_name' => 'required',        
            'inputPhone' => 'required',
            'inputEmail' => 'required'
        );        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            try{
                //$input= $request->all();
                $input = $this->uploadImage($request); 
                $users = $this->admin_repository->updateAdmin($id, $input);
            }catch(\Exception $e){
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            }
            toastr()->success('Modification réussie!');
            return redirect()->route('Admin');
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
        $this->admin_repository->deleteAdmin($id);
        toastr()->success('Suppression réussie!');
        return view('admin.list');
    }

    public function deleteArtisan(Request $request){
        $this->user_repository->deleteUser($request->all());
        toastr()->success('Suppression réussie!');
        $users = $this->user_repository->getAllUser();
        return view('admin.user.list',compact('users'));
    }

    public function uploadImage($request)
    {
        $image_name = null;
        if ($request->hasFile('inputPhoto')) {
            $file = $request->file('inputPhoto');
            try {
                $image_name = $this->upload_service->upload($file, 'image/Admin/Profil');
            } catch (\Exception $e) {
                flash()->error($e->getMessage());
                return Redirect::back();
            }
        }
        $input = $request->all();
        $input['inputPhoto'] = $image_name;
        return $input;
    }

    public function updateStatus(Request $request){
        $user_id = $request->all()['user_id'];
        $status = $this->user_repository->changeStatus($user_id);
        return $status;
    }

    public function adminStatus(Request $request){
        $admin_id = $request->all()['admin_id'];
        $status = $this->admin_repository->changeStatus($admin_id);
        return $status;
    }

    public function getAll(){
        $users = $this->user_repository->getAllUser();
        //$data_tables = collect([]);
        //return view('admin.user.list',compact('users'));
        \Log::debug($users);
        $data_tables = DataTables::collection($users);
        $data_tables->EditColumn('name', function ($user) {
            if(isset($user->name))
            {
                // if(isset($user->photo)){
                //     return '<img class=" img-circle img-profil-list" src="'.url("image/Admin/Profil/".$user->photo."").'" alt="User profile picture">&nbsp;&nbsp;'.$user->name;
                // }else{
                    return $user->first_name.' '.$user->name;
                //}
            }
                
        })->EditColumn('email', function ($user) {
            if(isset($user->email))    
                return $user->email;
        })->EditColumn('phone', function ($user) {
            if(isset($user->phone)) 
                return $user->phone;
        })->EditColumn('enterprise', function ($user) {
            if(isset($user->enterprise)) 
                return $user->enterprise;
        })->EditColumn('category', function ($user) {
            if(isset($user->category_id)) {
                return $user->category->name;
            }
        })->EditColumn('ville', function ($user) {
            if(isset($user->city_id)) 
                return $user->city->ville_nom;
        })->EditColumn('status', function ($user) {
            switch ($user->status) {
                 case 0:
                    return '<div class="switch-container position-relative form-group">
                                <label class="switch" data-id="'.$user->id.'">
                                  <input type="checkbox" class="form-check-input" >
                                  <span class="slider round"></span>
                                </label>
                            </div>';
                    break; 
                case 1:
                    return '<div class="switch-container position-relative form-group">
                                <label class="switch" data-id="'.$user->id.'">
                                  <input type="checkbox" class="form-check-input" checked>
                                  <span class="slider round"></span>
                                </label>
                            </div>';
                    break; 
               
                
             }
        })->EditColumn('action', function ($user) {
            return view("admin.user.action", ['user' => $user]);
        });
        return $data_tables->rawColumns(['name','status','action'])->make(true);
    }

    public function getFilterList()
    {
        $brand_array = Session::get('brand_array');
        if(!empty($brand_array)){
            $brand_array = array_unique($brand_array);
            asort($brand_array);
        }
        return response()->json(['brand_array' => $brand_array]);
    }

    public function listAdmin(){
      return view('admin.list');
    }

    public function getAdmin(){
      $admins = $this->admin_repository->getAll();
        $data_tables = DataTables::collection($admins);
        $data_tables->EditColumn('last_name', function ($admin) {
            if(isset($admin->photo)){
                return '<img class=" img-circle img-profil-list" src="'.url("image/Admin/Profil/".$admin->photo."").'" alt="User profile picture">&nbsp;&nbsp;'.$admin->first_name.' '.$admin->last_name;
            }else{
                return '<img class=" img-circle img-profil-list" src="'.url("image/Admin/Profil/avatar.png").'" alt="User profile picture">&nbsp;&nbsp;'.$admin->first_name.' '.$admin->last_name;
            }
                
        })->EditColumn('email', function ($admin) {
            if(isset($admin->email))    
                return $admin->email;
        })->EditColumn('phone', function ($admin) {
            if(isset($admin->phone)) 
                return $admin->phone;
        })->EditColumn('status', function ($admin) {
            if($admin->email==Auth::guard('admin')->user()->email){
                return '<i class="fa fa-circle text-success"> En ligne</i>';
            }else{
                switch ($admin->status) {
                     case 0:
                        return '<div class="switch-container position-relative form-group">
                                    <label class="switch" data-id="'.$admin->id.'">
                                      <input type="checkbox" class="form-check-input" >
                                      <span class="slider round"></span>
                                    </label>
                                </div>';
                        break; 
                    case 1:
                        return '<div class="switch-container position-relative form-group">
                                    <label class="switch" data-id="'.$admin->id.'">
                                      <input type="checkbox" class="form-check-input" checked>
                                      <span class="slider round"></span>
                                    </label>
                                </div>';
                        break; 
                 }
             }
        })->EditColumn('action', function ($admin) {
            if($admin->email == Auth::guard('admin')->user()->email){
                return 'Admin connecté';
            }else{
                return view("admin.action", ['admin' => $admin]);
            }
        });
        return $data_tables->rawColumns(['last_name','status','action'])->make(true);
    }
    /* subscribetion*/
    public function listSubscribe(){
        $subscribes = $this->user_repository->get_subscribe();
        //dd($subscribes);
        return view('admin.abonnement.list',compact('subscribes'));
    }
    public function getSubscribe(){
        $subscribes = $this->user_repository->get_subscribe();
        \Log::debug($subscribes);
        $data_tables = DataTables::collection($subscribes);
        $data_tables->EditColumn('name', function ($subscribe) {
            if(isset($subscribe->id))
            {
                return $subscribe->id;
                // return $subscribe->subscribe->first_name.' '.$subscribe->subscribe->name;
            }
        })->EditColumn('sold', function ($subscribe) {
            if(isset($subscribe->amount))    
                return $subscribe->amount.' €';
        })->EditColumn('created', function ($subscribe) {
            if(isset($subscribe->created_at)) 
                return $subscribe->created_at;
        })->EditColumn('status', function ($subscribe) {
            switch ($subscribe->status) {
                 case 0:
                    return '<div class="switch-container position-relative form-group">
                                <label class="switch" data-id="'.$subscribe->id.'">
                                  <input type="checkbox" class="form-check-input" >
                                  <span class="slider round"></span>
                                </label>
                            </div>';
                    break; 
                case 1:
                    return '<div class="switch-container position-relative form-group">
                                <label class="switch" data-id="'.$subscribe->id.'">
                                  <input type="checkbox" class="form-check-input" checked>
                                  <span class="slider round"></span>
                                </label>
                            </div>';
                    break; 
               
                
             }
        });
        return $data_tables->rawColumns(['status'])->make(true);
    }

    
}
