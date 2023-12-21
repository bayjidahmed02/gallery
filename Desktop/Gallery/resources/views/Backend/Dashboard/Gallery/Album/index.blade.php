@extends('Backend.Dashboard.Layouts.app')
@section('main_page_title', 'Album')
@section('content')
    <div class="row">
        <div class="card col-12">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title align-self-center mb-0">Albums</h5>
                <a href="{{ route('admin.album.create') }}" class="btn btn-sm btn-primary px-3 py-2">Add Album</a>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($albums as $album)
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset($album->cover_image) }}" alt="Album Cover Image" class="card-img-top"
                                        style="height: 250px; object-fit:cover;">
                                    <h2 class="card-title mt-2">{{ $album->name }}</h2>
                                    <p class="card-text">{{ $album->description }}</p>
                                </div>
                                <div class="card-body d-flex justify-content-between">
                                    <a href="{{ route('admin.album.show', $album->id) }}"
                                        class="btn btn-sm btn-primary px-3 py-1">View</a>
                                    <a href="{{ route('admin.album.edit', $album->id) }}"
                                        class="btn btn-sm btn-success px-3 py-1">Edit</a>
                                    <form action="{{ route('admin.album.destroy', $album->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-sm btn-warning px-3 py-1">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
