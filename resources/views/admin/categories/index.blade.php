{{-- filepath: d:\laragon\www\Agile-n3\resources\views\admin\categories\index.blade.php --}}
@extends('admin.layout.master')

@section('content')

<!-- main content -->
<div class="container-fluid">
    <!-- Page title & breadcrumb -->
    <div class="cr-page-title cr-page-title-2">
        <div class="cr-breadcrumb">
            <h5>Category List</h5>
            <ul>
                <li><a href="{{ route('admin.categories.index') }}">Dashboard</a></li>
                <li>Category List</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="cr-card card-default category-list">
                <div class="cr-card-content">
                    <div class="table-responsive">
                        <table id="category_list" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{
                                            $category->created_at ? $category->created_at->format('d/m/Y') : 'N/A'
                                        }}
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-primary mx-1">Edit</a>
                                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-3">
                        {{ $categories->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- main content end -->

@endsection
