@extends('Backend.Dashboard.Layouts.app')
@section('main_page_title', 'Create Album')
@section('content')
    <div class="row">
        <div class="card col-12">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title align-self-center mb-0">Create a New Album</h5>
                <a href="{{ route('admin.album.index') }}" class="btn btn-sm btn-primary px-3 py-2">Back</a>
            </div>
            <div class="card-body">
                <div class="col-6">
                    <form action="{{ route('admin.album.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Album Name</label>
                            <input type="text" name="name" class="form-control form-control-sm"
                                value="{{ old('name') }}">
                            @error('name')
                                <p style="font-size: 14px;" class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description">Album Description</label>
                            <input type="text" name="description" class="form-control form-control-sm"
                                value="{{ old('description') }}">
                            @error('description')
                                <p style="font-size: 14px;" class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="cover_image">Upload Cover Image</label>
                            <input type="file" name="cover_image" class="form-control form-control-sm">
                            @error('cover_image')
                                <p style="font-size: 14px;" class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Create" class="btn btn-sm px-3 py-2 mt-2  btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
