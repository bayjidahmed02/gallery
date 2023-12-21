@extends('Backend.Dashboard.Layouts.app')
@section('main_page_title', 'Create Album')
@section('content')


    <div class="row">
        <div class="card col-12">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title align-self-center mb-0">Add Photo</h5>
                <a href="{{ route('admin.photo.index') }}" class="btn btn-sm btn-primary px-3 py-2">Back</a>
            </div>
            <div class="card-body">
                <div class="col-6">
                    <form action="{{ route('admin.photo.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Select Photo</label>
                            <input type="file" name="photo" class="form-control form-control-sm">
                            @error('photo')
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
