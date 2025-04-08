@extends('admin.layout.master')

@section('content')
    <!-- Page title & breadcrumb -->
    <div class="cr-page-title cr-page-title-2">
        <div class="cr-breadcrumb">
            <h5>Category</h5>
            <ul>
                <li><a href="index.html">Carrot</a></li>
                <li>Category</li>
            </ul>
        </div>
    </div>
    <div class="row cr-category">
        <div class="col-xl-4 col-lg-12">
            <div class="team-sticky-bar">
                <div class="col-md-12">
                    <div class="cr-cat-list cr-card card-default mb-24px">
                        <div class="cr-card-content">
                            <div class="cr-cat-form">
                                <h3>Add New Category</h3>
                                <form method="POST" action="{{ route('admin.categories.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <div class="col-12">
                                            <input id="text" name="name" class="form-control here slug-title"
                                                type="text">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <button type="submit" class="cr-btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="cr-cat-list cr-card card-default">
                <div class="cr-card-content ">
                    <div class="table-responsive tbl-800">
                        <table id="cat_data_table" class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Sub Categories</th>
                                    <th>Product</th>
                                    <th>Status</th>
                                    <th>Trending</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Clothes</td>
                                    <td>
                                        <span class="cr-sub-cat-list">
                                            <span class="cr-sub-cat-count" title="Total Sub Categories">5</span>
                                            <span class="cr-sub-cat-tag">T-shirt</span>
                                            <span class="cr-sub-cat-tag">Shirt</span>
                                            <span class="cr-sub-cat-tag">Dress</span>
                                            <span class="cr-sub-cat-tag">Jeans</span>
                                            <span class="cr-sub-cat-tag">Top</span>
                                        </span>
                                    </td>
                                    <td>28</td>
                                    <td class="active">ACTIVE</td>
                                    <td><span class="badge badge-success">Top</span></td>
                                    <td>
                                        <div>
                                            <button type="button"
                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static">
                                                <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Footwear</td>
                                    <td>
                                        <span class="cr-sub-cat-list">
                                            <span class="cr-sub-cat-count" title="Total Sub Categories">4</span>
                                            <span class="cr-sub-cat-tag">Sports</span>
                                            <span class="cr-sub-cat-tag">Casual</span>
                                            <span class="cr-sub-cat-tag">safety shoes </span>
                                            <span class="cr-sub-cat-tag">Sandal</span>
                                        </span>
                                    </td>
                                    <td>68</td>
                                    <td class="active">ACTIVE</td>
                                    <td><span class="badge bg-primary">Medium</span></td>
                                    <td>
                                        <div>
                                            <button type="button"
                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static">
                                                <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jewelry</td>
                                    <td>
                                        <span class="cr-sub-cat-list">
                                            <span class="cr-sub-cat-count" title="Total Sub Categories">4</span>
                                            <span class="cr-sub-cat-tag">necklace</span>
                                            <span class="cr-sub-cat-tag">chain</span>
                                            <span class="cr-sub-cat-tag">rings</span>
                                            <span class="cr-sub-cat-tag">earings</span>
                                        </span>
                                    </td>
                                    <td>68</td>
                                    <td><span class="disable">Inactive</span></td>
                                    <td><span class="badge badge-success">Top</span></td>
                                    <td>
                                        <div>
                                            <button type="button"
                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static">
                                                <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
