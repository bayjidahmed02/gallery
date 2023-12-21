<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Dashboard.Gallery.Photo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        if (file_exists(public_path($photo->photo))) {
            unlink(public_path($photo->photo));
            $photo->delete();
        }
        Toastr::success('Photo Deleted');
        return redirect()->back();
    }
}
