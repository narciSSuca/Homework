<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\NewsModel;

class NewsController extends Controller
{
    public function index() {
      $res = NewsModel::all();
      return response()->json($res);
  }
}
