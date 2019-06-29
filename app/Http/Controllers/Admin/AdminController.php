<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Facades\Datatables;
use App\Service\UploadService;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $user_repository;
    protected $upload_service;
    public function __construct(UserRepository $user_repository ,UploadService $upload){
        $this->user_repository = $user_repository;
        $this->upload_service = $upload;
    }

    public function index()
    {
        //
        $users = $this->user_repository->getAllUser();
        return view('admin.user.user_list',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = false;
        return view('admin.user.update_profile',compact('user'));
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
                $users = $this->user_repository->createUser($input);
            }catch(\Exception $e){
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            }
            toastr()->success('Ajout utilisateur réussie!');
            return redirect()->route('user.index');
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
        $user = $this->user_repository->findUser($id);
        return view('admin.user.update_profile',compact('user'));
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
            'inputPhone' => 'required',
            'inputEmail' => 'required'
        );        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            try{
                $input = $this->uploadImage($request); 
                $users = $this->user_repository->updateUser($id, $input);
            }catch(\Exception $e){
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            }
            toastr()->success('Modification réussie!');
            return redirect()->route('user.index');
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
        $this->user_repository->deleteUser($id);
        toastr()->success('Suppression réussie!');
        $users = $this->user_repository->getAllUser();
        return view('admin.user.user_list',compact('users'));
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
}
