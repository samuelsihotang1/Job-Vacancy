<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Resources\JobResource;
use App\Models\Job;

class JobController extends Controller
{
  public function index()
  {
    $products = Job::all();
    return JobResource::collection($products);
  }
  public function show($id)
  {
    $product = Job::find($id);
    if (!$product) {
      return response()->json(['error' => 'Product not found'], 404);
    }
    return new JobResource($product);
  }
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:255',
      'description' => 'required|string',
      'price' => 'required|numeric',
      'stock' => 'required|integer',
    ]);
    if ($validator->fails()) {
      return response()->json(['error' => $validator->errors()], 422);
    }
    $product = Job::create($request->all());
    return new JobResource($product);
  }
  public function update(Request $request, $id)
  {
    $product = Job::find($id);
    if (!$product) {
      return response()->json(['error' => 'Product not found'], 404);
    }
    $product->update($request->all());
    return new JobResource($product);
  }
  public function destroy($id)
  {
    $product = Job::find($id);
    if (!$product) {
      return response()->json(['error' => 'Product not found'], 404);
    }
    $product->delete();
    return response()->json(['message' => 'Product deleted successfully']);
  }
}
