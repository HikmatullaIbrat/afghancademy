<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index')
        ->with('page','admin')
        ->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create')
        ->with('page','admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return  $request->all();
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required'
        ],[
            // to customize the title message if no data is entered
            'title.required' => "Please Enter the Title",
            'title.min' => "Please Enter more than 10 characters"
        ]);
        //  after validation of data and sending data from front to server we catch and store data in data by
        //  create method after we specify fillabel columns in Post model
        Post::create(['title'=>$request->title, 'description'=>$request->description]);
        return redirect()->route('admin.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $admin)
    {
        // $admin means id but in here because of naming in web.php we named it with admin route so we use id 
        // by $admin
        // return $admin; // it returns id of post
        return view('admin.edit')
            ->with('page','admin')
            ->with('post', $admin);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Post $admin)
    public function update(Request $request, $admin)
    {
        // get validated data from editing post page
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required'
        ],[
            // to customize the title message if no data is entered
            'title.required' => "Please Enter the Title",
            'title.min' => "Please Enter more than 10 characters"
        ]);
        // and after data is sent for updating, send it to database to be updated
        // $admin->title= $request->title;
        // $admin->description = $request->description;
        // $admin->save();
        Post::where('id',$admin)->update(['title'=>$request->title, 'description'=>$request->description]);

        return redirect()->route('admin.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
