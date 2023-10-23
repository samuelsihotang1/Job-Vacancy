<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Job;
use Livewire\Component;

class Homepage extends Component
{
  public $search;

  public function render()
  {
    $categories = Category::get();
    $jobs = Job::Where('name', 'like', '%' . $this->search . '%')->get();
    return view('homepage', [
      'categories' => $categories,
      'oncategory' => Null,
      'jobs' => $jobs,
    ])->title('Homepage - PPW');
  }
}
