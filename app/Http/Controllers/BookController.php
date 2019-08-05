<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = DB::select('SELECT * FROM book');
    return view('book', ["results" => $results]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insertBook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $query = DB::insert('INSERT INTO book(title, author) VALUES(?, ?)', [$request->createTitle, $request->createAuthor]);
        return view('insertBook', ["query" => $query]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $results = DB::select('SELECT * FROM book WHERE id_book =' . $id);
        return view('editbook', ['title' => $results[0]->title, 'author' => $results[0]->author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $edit = DB::update("UPDATE book
    SET title=?, author=?
    WHERE id_book= $id", [$request->newTitle, $request->newAuthor]);

    return view('editbook', ['edit'=> $edit, 'title'=>$request->newTitle, 'author'=>$request->newAuthor]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = DB::delete("DELETE FROM book WHERE id_book=$id");
        return redirect('/books');
    }
}
