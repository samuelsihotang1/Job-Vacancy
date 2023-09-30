<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
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
    $categories = Category::get();
    $jobs = Job::get();
    return view('home', [
      'categories' => $categories,
      'oncategory' => Null,
      'jobs' => $jobs,
    ]);
  }

  public function category(Category $category)
  {
    $categories = Category::get();
    $jobs = Job::where('category_id', '=', $category->id)->get();
    return view('home', [
      'categories' => $categories,
      'oncategory' => $category,
      'jobs' => $jobs,
    ]);
  }
}
