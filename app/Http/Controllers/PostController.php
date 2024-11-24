<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::withWhereHas('student', function ($query) {
      $query->status(true)->select('id', 'name', 'email');
    })->get();
    // $students = Student::status(true)->with('posts')->get();
    return $posts;
  }
}