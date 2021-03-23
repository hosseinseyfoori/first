<?php


namespace hosseinseyfoori\first\Http\Controllers;


use App\Http\Controllers\Controller;




class AdminController extends Controller
{
    public function index()
    {

        $username = config('cms.username');
        $password= config('cms.password');
        return view('cms::index',compact('username','password'));
    }

    public function show()
    {
        $username = config('cms.username');
        $password= config('cms.password');

        return view('cms::index',compact('username','password'));
    }
}
