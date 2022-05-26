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
    return redirect()->route('book_list');
  }

  public function getBookUpdate(int $id){
    $books = Book::all();
    $book = Book::where('id',$id)->first();
    return view('books',array('books'=>$books,'firstBook'=>$book));
  }

  public function bookUpdate(Request $request){
    $validateData = $request->validate(
      [
        'images'=>'required|string',
        'name'=>'required|string',
        'author'=>'required|string',
        'isbn_number'=>'required|string',
        'id'=>'required|int',
      ]
    );
    $book = Book::find($request->id);
    $book->images= $request->images;
    $book->name= $request->name;
    $book->author= $request->author;
    $book->isbn_number= $request->isbn_number;
    $book->save();
    return redirect()->route('book_list');
  }

}
