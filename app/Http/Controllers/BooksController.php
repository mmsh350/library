<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;
use DataTables;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if ($request->ajax()) {
                
            $data = Books::select("*")->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $id = $row->id;
                // Button Customizations
                $btn = "
                    <button data-toggle='modal' data-target='#updateModal' data-id=$id data-meta='$row->title'
                    data-isbn='$row->ISBN' data-rev='$row->revision_number' data-pub='$row->publisher' data-author='$row->author'
                    data-publishd='$row->publish_date' data-genre='$row->genre' data-oldpic='$row->coverpage_image>'
                    ><i class='fa fa-edit' aria-hidden='true'> Modify</i></button>";
                return $btn;
            })
            ->rawColumns(['action'])
            ->editColumn('coverpage_image', function ($row) {
                      
                return "<img width=20%  src=data:image/;base64,$row->coverpage_image>";
             })
               
                ->escapeColumns('coverpage_image')
                ->make(true);
                
               
        }
        return view('auth.books');
    }

    
    public function addbooks(Request $request){

        $request->validate([
           'title' => ['required','string','max:255'],
           'isbn' => 'required|numeric',
           'revision_number' => 'required|numeric',
           'publisher' => ['required','string','max:255'],
           'pub_date' => ['required','string','max:255'],
           'author' => ['required','string','max:255'],
           'image' => 'required|image|mimes:jpeg,png,jpg|max:500',
           'genre' => ['required','string','max:255'],
       ]);

           $requestid = auth()->user()->id;
          

       if($request->file('image')){

           $path = $request->file('image');
           $data = file_get_contents($path);
           $image_path = base64_encode($data); 
       }

        
       $affected = books::create([
                           'title' => $request->title,
                           'ISBN' => $request->isbn,
                           'revision_number' => $request->revision_number,
                           'publisher' => $request->pub_date,
                           'publish_date' => $request->pub_date,
                           'author' => $request->author,
                           'coverpage_image' => $image_path,
                           'genre' => $request->genre,
                       ]);
           if($affected)
               redirect()->back()->with('status', 'Book added Successful');
        
       }
    
 
 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, books $books)
    {
        $request->validate([
            'title' => ['required','string','max:255'],
            'isbn' => 'required|numeric',
            'revision_number' => 'required|numeric',
            'publisher' => ['required','string','max:255'],
            'pub_date' => ['required','string','max:255'],
            'author' => ['required','string','max:255'],
            'image' => 'image|mimes:jpeg,png,jpg|max:500',
            'genre' => ['required','string','max:255'],
        ]);
 
            $requestid = auth()->user()->id;
           
 
        if($request->file('image')){
 
            $path = $request->file('image');
            $data = file_get_contents($path);
            $image_path = base64_encode($data); 
        }
        else{
            $image_path = $request->oldpic;
        }
 
         
        $affected = books::where('id', $request->bookid)->update([
                            'title' => $request->title,
                            'ISBN' => $request->isbn,
                            'revision_number' => $request->revision_number,
                            'publisher' => $request->pub_date,
                            'publish_date' => $request->pub_date,
                            'author' => $request->author,
                            'coverpage_image' => $image_path,
                            'genre' => $request->genre,
                     ]);
            if($affected)
                redirect()->back()->with('status', 'Book Updated Successful...');
         
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(books $books)
    {
        //
    }
}
