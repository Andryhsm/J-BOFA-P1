<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Repositories\AdminRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $user_repo;
    protected $admin_repo;
    public function __construct(UserRepository $user_repo,AdminRepository $admin_repo)
    {
        $this->user_repo = $user_repo;
        $this->admin_repo = $admin_repo;
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //dd('ici');
        $users = $this->user_repo->getAllUser();
        $admins = $this->admin_repo->getAll();
        $derniers = $this->user_repo->getTenArtisan();
        return view('admin.dashboard.index',compact('users','admins','derniers'));
    }
}
