<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;

class JobController extends Controller
{
  public function index(Job $job)
  {
    return view('job.job', [
      'job' => $job,
    ]);
  }
}
