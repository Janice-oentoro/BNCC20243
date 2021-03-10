<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    public function index()
	{
		return view('index');
	}

    public function collection()
    {
        $books = Book::all();
        return view('collection', compact('books'));
    }

    public function create()
	{
		return view('create');
	}

    public function store(Request $request)
    {
        $message = array(
            'title.required' => 'Please input book title',
            'title.min' => 'Please enter 5 until 20 characters',
            'title.max' => 'Please enter 5 until 20 characters',
            'author.required' => 'Please input author name',
            'author.min' => 'Please enter 5 until 20 characters',
            'author.max' => 'Please enter 5 until 20 characters',
            'pages.required' => 'Please enter total number of pages',
            'pages.min' => 'Please input atleast 1 page',
            'year.required' => 'Please input year of book published',
            'year.min' => 'Year published atleast',
   
        );

            $request->validate([
                'title' => 'required|min:5|max:20',
                'author' => 'required|min:5|max:20',
                'pages' => 'required|min:1',
                'year' => 'required|min:2000|max:2021',
                ],$message);


        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages,
            'year' => $request->year
        ]);
        return redirect('/create');    
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        Book::where('id', $id)
            ->update([
                'title' => $request->title,
                'author' => $request->author,
                'pages' => $request->pages,
                'year' => $request->year
            ]);

        return redirect('/collection');
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return redirect('/');
    }
}
