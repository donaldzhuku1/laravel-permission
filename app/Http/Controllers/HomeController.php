<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $permission = Permission::create(['name'=>'delete articles']);
        // $user_id = User::select('id')->where('name', 'isi')->first();
        // $user_id->givePermissionTo('delete articles');



        return view('admin.home.home');
    }
}
