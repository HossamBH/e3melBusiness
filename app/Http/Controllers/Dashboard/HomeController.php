<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $no_categories = Category::count();
        $no_courses = Course::count();
        return view('dashboard.home', compact('no_categories', 'no_courses'));
    }
}
