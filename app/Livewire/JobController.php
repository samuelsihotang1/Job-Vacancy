<?php

namespace App\Livewire;

use App\Models\Apply;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class JobController extends Component
{
  use WithFileUploads;

  public $job;
  public $apply;

  public $document;
  public $motivation;

  public $showApply;

  public function mount(Job $job)
  {
    $this->job = $job;
    $this->apply = Apply::where('user_id', '=', auth()->user()->id)->where('job_id', '=', $this->job->id)->first();
    if ($this->apply) {
      $this->motivation = $this->apply->motivation;
    }
    $this->showApply = false;
  }

  public function showApplyButton()
  {
    $this->showApply = !$this->showApply;
  }

  public function render()
  {
    return view('job')->title($this->job->name . " - PPW");
  }

  public function updateApply()
  {
    $this->validate([
      'motivation' => 'required|string|max:512',
    ]);

    if ($this->document != null) {
      $this->validate([
        'document' => 'file|mimes:pdf|max:5120',
      ]);
    }

    $this->apply = Apply::where('user_id', '=', auth()->user()->id)->where('job_id', '=', $this->job->id)->first();

    $this->apply->update([
      'motivation' => $this->motivation,
    ]);

    if ($this->document != null) {
      $this->deleteDocument($this->apply->document);
      $this->apply->update([
        'document' => $this->storeDocument($this),
      ]);
    }

    $this->showApply = false;
  }

  public function applyJob()
  {
    $this->validate([
      'motivation' => 'required|string|max:512',
    ]);

    if ($this->document != null) {
      $this->validate([
        'document' => 'file|mimes:pdf|max:5120',
      ]);
    }

    $this->apply =
      Apply::create([
        'user_id' => auth()->id(),
        'job_id' => $this->job->id,
        'motivation' => $this->motivation,
        'created_at' => now(),
        'updated_at' => now(),
      ]);

    if ($this->document != null) {
      $this->apply->update([
        'document' => $this->storeDocument(),
      ]);
    }

    $this->showApply = false;
  }

  public function storeDocument()
  {
    // $documentName = $this->job->name_slug . '.' . $this->file->getClientOriginalExtension();
    $documentName = $this->job->name_slug . '.pdf';
    $documentPath = 'public/documents/' . auth()->user()->name_slug;
    $this->document->storeAs($documentPath, $documentName);
    return $documentName;

    // $documentDirectory = public_path("/documents/" . auth()->user()->name_slug);
    // if (!file_exists($documentDirectory)) {
    //   mkdir($documentDirectory, 0755, true);
    // }

    // $document = $this->document;
    // $documentName = time() . '.' . $document->getClientOriginalExtension(); // Dapatkan ekstensi berkas yang diunggah (pdf)
    // $document->move($documentDirectory, $documentName); // Simpan berkas PDF ke direktori 'documents'
    // return $documentName;
  }

  public function deleteDocument($documentName)
  {
    $documentPath = 'public/documents/' . auth()->user()->name_slug . '/';
    Storage::delete("$documentPath . {$documentName}");


    // $existingDocument = public_path("/documents/" . auth()->user()->name_slug . "/" . $documentName);
    // if (file_exists($existingDocument)) {
    //   unlink($existingDocument);
    // }
  }
}
