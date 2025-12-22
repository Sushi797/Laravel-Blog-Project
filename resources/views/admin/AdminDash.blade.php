@extends('admin.Home')
@section('AdminDash')


    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold text-dark mb-0">Recent Blogs</h3>

        <a href="{{ url('/create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle me-1"></i> Add New Blog
        </a>
    </div>


    <div class="row g-4">
        @foreach ( $blogs as $blog)
            <!-- Blog Card -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset($blog->img_path) }}" class="card-img-top" alt="Blog Image">
                    <div class="card-body">
                        <h6 class="fw-bold">{{$blog->title}}</h6>
                        <p class="badge bg-primary text-uppercase mb-2 fw-bold ">{{ $blog->category->name }}</p>
                        <p class="text-secondary small mb-3">{{ Str::limit($blog->description, 100) }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ url('/edit/'. $blog->id) }}" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                            <form action="{{  url('/delete/' . $blog->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i>
                                    Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection