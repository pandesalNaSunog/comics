<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
class ComicController extends Controller
{
    public function createComic(Request $request){

        $fields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);


        if($request->hasFile('image')){
            $fields['image'] = $request->file('image')->store('images', 'public');
        }

        

        Comic::create($fields);

        return redirect('/')->with('message', 'Added pirated comic successfully!');
    }
    public function showComics(){
        $comics = Comic::latest()->filter(request(['search']))->paginate(4);
        return view('index',[
            'comics' => $comics,
            'active' => 'home'
        ]);
    }

    public function showComicsApi(){
        $comics = Comic::all();
        return response($comics, 200);
    }

   
}
