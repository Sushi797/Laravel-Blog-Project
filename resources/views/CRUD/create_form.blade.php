@extends('CRUD.home')
@section('create')

    <div class="card shadow-lg border-0 p-4 rounded-4">
        <h3 class="mb-4 fw-bold text-primary">
            <i class="bi bi-pencil-square me-2"></i> Create New Blog
        </h3>

        <form action="{{ url('/update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Blog Title -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Blog Title</label>
                <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter blog title"
                    required>
            </div>

            <!-- Category -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Category</label>
                <select name="category_id" class="form-select form-select-lg" required>
                    <option value="" disabled selected>Select Category</option>

                    <!-- SHOW CATEGORY OPTIONS -->
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Status</label>
                <select name="status_id" class="form-select form-select-lg" required>
                    <option value="" disabled selected>Select Status</option>

                    <!-- SHOW STATUS OPTIONS -->
                    @foreach($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Description</label>
                <textarea name="description" class="form-control form-control-lg" rows="4"
                    placeholder="Write blog description..." required></textarea>
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Blog Image</label>
                <input type="file" name="img_path" class="form-control form-control-lg" required>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">
                <i class="bi bi-save me-2"></i> Create Blog
            </button>
        </form>
    </div>

@endsection