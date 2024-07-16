<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $books = DB::table('books')
        ->join('categories','category_id','=','categories.id')
        ->select('books.*','name')
        ->orderByDesc('id')
        ->get();
    return view('books.index', compact('books'));
    }
}
