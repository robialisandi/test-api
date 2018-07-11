<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_review;

class UserReviewController extends Controller
{
  public function index()
  {
    return User_review::all();
  }

  public function show(User_review $review)
  {
    return $review;
  }

  public function store(Request $request)
  {
    $review = User_review::create($request->all());

    return response()->json($review, 201);
  }

  public function update(Request $request, User_review $review)
  {
    $review->update($request->all());

    return response()->json($review, 200);
  }

  public function delete(User_review $review)
  {
    $review->delete();

    return response()->json(null, 204);
  }
}

