{{-- filepath: d:\laragon\www\Agile-n3\resources\views\admin\categories\edit.blade.php --}}
@extends('admin.layout.master')

@section('content')

<div class="container-fluid">
    <!-- Page title & breadcrumb -->
    <div class="cr-page-title cr-page-title-2">
        <div class="cr-breadcrumb">
            <h5>Edit Category</h5>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="{{ route('admin.categories.index') }}">Category List</a></li>
                <li>Edit Category</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="cr-card card-default">
                <div class="cr-card-content">
                    <form method="POST" action="{{ route('admin.categories.update', $category->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection