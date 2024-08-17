<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function root()
    {
        return view('index');
    }

    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return view('errors.404');
    }

    public function fileManager(Request $request)
    {
        // dd('apps-file-manager.blade');
        return view('apps-file-manager');
    }

    public function emailIndex(Request $request)
    {
        // dd('apps-file-manager.blade');
        return view('email-inbox');
    }

    public function emailRead(Request $request)
    {
        // dd('apps-file-manager.blade');
        return view('email-read');
    }
}
