<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function form(){
        return view('form');
    }
    public function storeData(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $role = [
                'title' => 'required',
            ];
            $customMessage = [
                'title.required' => 'Fill the title box',
            ];
            $this->validate($request, $role, $customMessage);
            $movies = new Movie();
            $movies->title = $data['title'];
            $movies->details = $data['details'];
            $movies->thumbnail = $data['thumbnail'];
            $movies->image = $data['image'];
            $movies->screenshot = $data['screenshot'];
            $movies->download = $data['download'];
            $movies->category = $data['category'];
            $movies->url = $data['url'];
            $movies->year = $data['year'];
            $movies->save();
            return redirect('all-movies');
        }
    }
    public function allMovies()
    {
        $movies = Movie::latest()->paginate(26);
        return view('movies', compact('movies'));
    }
    public function movieInfo($url)
    {
        $movies=Movie::where('url',$url)->first();
        return view('movie_info')->with('movies',$movies);
    }
    // public function movieInfo($url = null)
    // {
    //     $movies=Movie::FindOrFail($url);
    //     return view('movie_info', compact('movies'));
    // }
}