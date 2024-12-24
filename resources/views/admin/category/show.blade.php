@extends('admin.layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h5 class="fw-bold text-secondary">
                Detail Category
            </h5>
        </div>

        <div class="card-body p-4">
            <div class="row">
                <div class="col-lg-2">
                    <div class="mb-4">
                        <a href="{{ asset('uploads/categories/' . $category->image) }}" target="_blank">
                            <img src="{{ asset('uploads/categories/' . $category->image) }}" alt="{{ $category->name }}"
                                width="120" height="120">
                        </a>
                    </div>
                </div>

                <div class="col-lg-10">
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <td><span class="text-gray">{{ $category->name }}</span></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><span class="text-gray">{{ $category->description }}</span></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><span class="text-danger">{{ $category->status }}</span></td>
                        </tr>
                        <tr>
                            <th>Create At</th>
                            <td><span class="text-success">{{ $category->created_at }}</span></td>
                        </tr>

                    </table>
                    <div>
                        <span><a href="{{ route('admin.category.index') }}" class="btn btn-danger btn-sm">Back</a></span>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
