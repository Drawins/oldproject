<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class MoviesController extends Controller
{
    //
    function createNewBook(Request $request){
        //validation
        $request -> validate([
            'name'=>'required',
            'author'=>'required',
            'page'=>'required',
            'IBN'=>'required',
            'category'=>'required',
            'publisher'=>'required',
            'yearOfPublication'=>'required',
        ]);
        $book = Book ::create([
           'name'=>request->name,
           'author'=>$request->author,
           'page'=>$request->page,
           'IBN'=>$request->IBNr,
           'category'=>$request->category,
           'publisher'=>$request->publisher,
           'yearOfPublication'=>$request->yearOfPublication,
        ]);
        //retrive the book
        $book = Book ::find($book->id);
        //return success or faliure
        if (!$book) {
            return response([
                'message'=>'unsuccessful!'
            ]);
        }else{
            return response([
                'message'=>'successful!'
            ]);
        
        }
    }
}
