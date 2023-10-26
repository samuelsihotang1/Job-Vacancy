<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Job;
use Livewire\Component;

class Homepage extends Component
{
  public $search;
  public $category_id;
  public $category_name;

  public function render()
  {
    $categories = Category::get();
    if ($this->category_id == NULL) {
      $jobs = Job::where('name', 'like', '%' . $this->search . '%')->get();
    } else {
      $jobs = Job::where('name', 'like', '%' . $this->search . '%')->where('category_id', '=', $this->category_id)->get();
    }
    return view('homepage', [
      'categories' => $categories,
      'jobs' => $jobs,
    ])->title('Homepage - PPW');
  }

  public function category($category_id)
  {
    if ($this->category_id == $category_id) {
      $this->category_id = NULL;
      $this->category_name = NULL;
    } else {
      $this->category_id = $category_id;
      $this->category_name = Category::where('id', '=', $category_id)->first()->name;
    }
  }
}
