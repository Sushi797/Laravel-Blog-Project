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
            <div class="text-center mb-4">
                <label class="form-label fw-semibold">Blog Image</label>
                <div class="mb-3">
                    <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                        class="img-fluid rounded border mb-3"
                        style="max-height: 200px; object-fit: contain; background: #f8f9fa;" alt="Preview">
                </div>
                <!-- ✅ Fixed: label 'for' must match input 'id' -->
                <label for="img_path" class="btn btn-outline-secondary w-100">
                    <i class="fas fa-cloud-upload-alt me-2"></i> Upload Image
                </label>
                <input type="file" class="form-control d-none" id="img_path" name="img_path" accept="image/*"
                    onchange="displaySelectedImage(event, 'selectedImage');">

                <small class="text-muted d-block mt-2">Recommended size: 800x800px</small>
            </div>

            <!-- Submit -->
            <div class="d-flex flex-column flex-md-row gap-3 mt-4">

                <!-- Back Button -->
                <a href="{{ url('/admin/AdminDash') }}"
                    class="btn btn-outline-secondary btn-lg d-flex align-items-center justify-content-center flex-fill">
                    <i class="bi bi-arrow-left me-2"></i>
                    Back to Dashboard
                </a>

                <!-- Submit Button -->
                <button type="submit"
                    class="btn btn-primary btn-lg d-flex align-items-center justify-content-center flex-fill shadow">
                    <i class="bi bi-plus-circle me-2"></i>
                    Create Blog
                </button>
            </div>
        </form>
    </div>

@endsection