<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
   public function getSuggestions(Request $request) {
      $genre    = $request->genre;
      $cast     = $request->cast;
      $keywords = $request->keywords;
      
      // Make request to the TMDB
      $response = Http::get(env('API_BASE_URL', null) . 'discover/movie', [
        'api_key'       => env('TMDB_API_KEY', null), 
        'with_genres'   => $genre,
        'with_people'   => $cast,
        'with_keywords' => $keywords,
        'sort_by'       => 'popularity.desc',
        'page'          => 1
      ]);

      return response()->json([
        'data' => $response->json()
      ], 200);
    }

    public function getTrendingMovies() {
      // Make request to the TMDB
      $response = Http::get(env('API_BASE_URL', null) . 'trending/movie/week', [
        'api_key' => env('TMDB_API_KEY', null), 
      ]);
  
      return response()->json([
        'data' => $response->json()
      ], 200);
    }
  }
