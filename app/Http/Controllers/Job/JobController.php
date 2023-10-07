<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
  public function index(Job $job)
  {
    $apply =
      Apply::where('user_id', '=', auth()->user()->id)->where('job_id', '=', $job->id)->first();

    return view('job.job', [
      'job' => $job,
      'apply' => $apply,
    ]);
  }

  public function updateApply(Job $job, Request $request)
  {
    $request->validate([
      'motivation' => 'required|string|max:512',
    ]);

    if ($request->document != null) {
      $request->validate([
        'document' => 'file|mimes:pdf|max:5120',
      ]);
    }

    $apply = Apply::where('user_id', '=', auth()->user()->id)->where('job_id', '=', $job->id)->first();

    $apply->update([
      'motivation' => $request->motivation,
    ]);

    if ($request->document != null) {
      $this->deleteDocument($apply->document);
      $apply->update([
        'document' => $this->storeDocument($request),
      ]);
    }

    return back();
  }

  public function applyJob(Job $job, Request $request)
  {
    $request->validate([
      'motivation' => 'required|string|max:512',
    ]);

    if ($request->document != null) {
      $request->validate([
        'document' => 'file|mimes:pdf|max:5120',
      ]);
    }

    $apply =
      Apply::create([
        'user_id' => auth()->id(),
        'job_id' => $job->id,
        'motivation' => $request->motivation,
        'created_at' => now(),
        'updated_at' => now(),
      ]);

    if ($request->document != null) {
      $apply->update([
        'document' => $this->storeDocument($request),
      ]);
    }

    return back();
  }

  public function storeDocument($request)
  {
    $documentDirectory = public_path("/documents/" . auth()->user()->name_slug);
    if (!file_exists($documentDirectory)) {
      mkdir($documentDirectory, 0755, true);
    }

    $document = $request->file('document');
    $documentName = time() . '.' . $document->getClientOriginalExtension(); // Dapatkan ekstensi berkas yang diunggah (pdf)
    $document->move($documentDirectory, $documentName); // Simpan berkas PDF ke direktori 'documents'
    return $documentName;
  }

  public function deleteDocument($documentName)
  {
    $existingDocument = public_path("/documents/" . auth()->user()->name_slug . "/" . $documentName);
    if (file_exists($existingDocument)) {
      unlink($existingDocument);
    }
  }
}
