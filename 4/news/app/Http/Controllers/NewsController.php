<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Resources\News as NewsResource;

class NewsController extends Controller
{

    public function index() {
        return NewsResource::collection(News::all());
    }

    public function store(StoreNewsRequest $request) {
      $news = News::create($request->all());
      return new NewsResource($news);
    }

    public function show($id) {
      return new NewsResource(News::findOrFail($id));
    }

    public function update(StoreNewsRequest $request, $id) {
      if ($news = News::findOrFail($id)){
          $news->update($request->all());
        }
      return new NewsResource(News::findOrFail($id));
    }

    public function destroy($id) {
      $news = News::findOrFail($id);
      $news->delete();
    }
}
