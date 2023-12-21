@extends('Backend.Dashboard.Layouts.app')
@section('main_page_title', 'Photos')
@section('content')
    <div class="row">
        <div class="card col-12">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title align-self-center mb-0">Album Name > {{ $album->name }} > {{ $album->id }}</h5>
                <a href="{{ route('admin.photo.create', $album->id) }}" class="btn btn-sm btn-primary px-3 py-2">Add
                    Photo</a>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($photos as $photo)
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset($photo->photo) }}" alt="Album Cover Image" class="card-img-top"
                                        style="height: 250px; object-fit:cover;">
                                    <form action="{{ route('admin.album.destroy', $photo->id) }}" method="post"
                                        class="mt-3">
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
