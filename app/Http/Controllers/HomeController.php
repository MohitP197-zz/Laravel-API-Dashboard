<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\office;
use App\Tasks;
use App\User;
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
    public function index()
    {
        $tasks = Tasks::all()->count();
        $office = office::all()->count();
        $feedback = Feedback::all()->count();
        $technician = User::all()->where('role','technician')->count();
        // return view('home');
        return view('admin.index',compact('tasks','office','feedback','technician'));
        
    }

    public function admin()
    {
        // return view('home');
        return view('admin.index');
        
    }
}
