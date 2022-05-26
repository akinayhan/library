<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
  public function index(){
    $books = Book::all();
    return view('books',array('books'=>$books));
  }

  public function postBook(Request $request){
    $validateData = $request->validate(
      [
        'images'=>'required|string',
        'name'=>'required|string',
        'author'=>'required|string',
        'isbn_number'=>'required|string',
      ]
    );
    $book = new Book();
    $book->images= $request->images;
    $book->name= $request->name;
    $book->author= $request->author;
    $book->isbn_number= $request->isbn_number;
    $book->save();
    return back();
  }

  public function bookDelete(int $id){
    Book::where('id',$id)->delete();
    return back();
  }


}
