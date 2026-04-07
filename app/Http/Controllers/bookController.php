<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
    //
    public function index(){
        $books = [
             ['id'=> 1, 'title'=> 'The programmers guide', 'author'=>' Gee.M malkom'],
             ['id'=> 2, 'title'=> 'The good boy', 'author'=> ' Dr Brennan.Bones']
        ];
        return view('books',['books'=> $books]);

    }

    public function show($id){
        $books = [
             1=> ['title'=> 'The programmers guide', 'author'=>' Gee.M malkom'],
             2=> ['title'=> 'The good boy', 'author'=> ' Dr Brennan.Bones']
        ];
        if(!isset($books[$id])){
            return "Book not found";
        }
        return view('book-detail', ['book_detail' => $books[$id]]);
        
}
}

