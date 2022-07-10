<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
  private $requestUrl = 'https://api.themoviedb.org/3/discover/';  
  
  public function getSuggestions(Request $request) {
      $media    = $request->media;
      $genre    = $request->genre;
      $cast     = $request->cast;
      $keywords = $request->keywords;
      // Check if the media paratemer is present in the request
      if (! $request->filled('media')) {
        return response()->json([
          "message" => "Please select a media type, Movies or TV."
        ], 400);
      }      
    }
}
