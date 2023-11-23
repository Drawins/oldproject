<?php

namespace App\Http\Controllers;
 

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    function createNewBook(Request $request){
        //validation
        $request -> validate([
            'name'=>'required',
            'author'=>'required',
            'pages'=>'required',
            'IBN'=>'required',
            'category'=>'required',
            'publisher'=>'required',
            'yearOfPublication'=>'required',
        ]);
        $book = Book::create([
           'name'=>$request->name,
           'author'=>$request->author,
           'pages'=>$request->pages,
           'IBN'=>$request->IBN,
           'category'=>$request->category,
           'publisher'=>$request->publisher,
           'yearOfPublication'=>$request->yearOfPublication,
        ]);
        //retrive the book
        $book = Book::find($book->id);
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
    }//
    public function index(){
        return view('Books');
    }
    public function store(Request $request){
        $validateData = $request([
            'name'=>'require|string|max:255',
            'pages'=>'required'|'integer',
            'IBN'=>'required',
            'Category'=>'required',
            'yearOfPublication'=>'required',
            'user_id'=>'required',

        ]);
    }
}
