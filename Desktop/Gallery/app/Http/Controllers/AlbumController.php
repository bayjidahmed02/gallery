<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AlbumController extends Controller
{

    public function index()
    {
        $albums = Album::all();
        return view('Backend.Dashboard.Gallery.Album.index', compact('albums'));
    }

    public function create()
    {
        return view('Backend.Dashboard.Gallery.Album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'cover_image' => 'required|image|mimes:png,jpg,jpeg,webp,gif,svg',
        ]);

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = md5(uniqid()) . now()->format('_d-m-Y') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Gallery/Cover Image'), $filename);
        }

        Album::create([
            'name' => $request->name,
            'description' => $request->description,
            'cover_image' => 'Gallery/Cover Image/' . $filename,
        ]);
        Toastr::success('Added a New Album');
        return redirect()->back();
    }


    public function show(Album $album)
    {
        $album_id = $album->id;
        $photos = Photo::where('album_id', $album_id)->get();
        return view('Backend.Dashboard.Gallery.Photo.index', compact('photos', 'album'));
    }



    public function edit(Album $album)
    {
        return view('Backend.Dashboard.Gallery.Album.edit', compact('album'));
    }


    public function update(Request $request, Album $album)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'cover_image' => 'nullable|image|mimes:png,jpg,jpeg,webp,gif,svg',
        ]);
        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = md5(uniqid()) . now()->format('_d-m-Y') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Gallery/Cover Image'), $filename);

            if ($album->cover_image) {
                unlink(public_path($album->cover_image));
            }
            $album->update([
                'name' => $request->name,
                'description' => $request->description,
                'cover_image' => 'Gallery/Cover Image/' . $filename,
            ]);
        }
        Toastr::success('Updated Album Info');
        return redirect()->route('admin.album.index');
    }


    public function destroy(Album $album)
    {
        if (file_exists(public_path($album->cover_image))) {
            unlink(public_path($album->cover_image));
            $album->delete();
        }
        Toastr::success('Album Deleted');
        return redirect()->back();
    }
}
