@extends('CRUD.home')
@section('edit')

  <div class="card shadow-lg border-0 p-4 rounded-4" style="background: #ffffff;">
    <h3 class="mb-4 fw-bold text-primary d-flex align-items-center">
        <i class="bi bi-pencil-square me-2"></i> Edit Blog
    </h3>

    <form action="{{ url('/update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $blog->id }}">

        <!-- Blog Title -->
        <div class="mb-4">
            <label class="form-label fw-semibold">Blog Title</label>
            <input type="text" name="title" 
                value="{{ $blog->title }}" 
                class="form-control form-control-lg shadow-sm rounded-3"
                placeholder="Enter blog title..." required>
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label class="form-label fw-semibold">Category</label>
            <select name="category_id" class="form-select form-select-lg shadow-sm rounded-3" required>
                <option value="" disabled>Select Category</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}" 
                        {{ $category->id == $blog->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Status -->
        <div class="mb-4">
            <label class="form-label fw-semibold">Status</label>
            <select name="status_id" class="form-select form-select-lg shadow-sm rounded-3" required>
                <option value="" disabled>Select Status</option>

                @foreach($statuses as $status)
                    <option value="{{ $status->id }}" 
                        {{ $status->id == $blog->status_id ? 'selected' : '' }}>
                        {{ $status->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label class="form-label fw-semibold">Description</label>
            <textarea name="description" class="form-control form-control-lg shadow-sm rounded-3"
                rows="5" required
                placeholder="Write blog description here...">{{ $blog->description }}</textarea>
        </div>

        <!-- Image Preview + Upload -->
        <div class="text-center mb-4">
            <label class="form-label fw-semibold">Blog Image</label>

            <div class="mb-3">
                <img id="selectedImage" 
                    src="{{ asset($blog->img_path) }}" 
                    class="img-fluid rounded-square shadow" 
                    style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #fff;">
            </div>

            <label for="img_path" class="btn btn-outline-primary w-50 rounded-pill shadow-sm">
                <i class="fas fa-camera me-2"></i> Change Image
            </label>

            <input type="file" id="img_path" name="img_path" class="d-none"
                accept="image/*" onchange="displaySelectedImage(event, 'selectedImage')">
            
            <small class="text-muted d-block mt-2">Recommended: 800 × 800 px</small>
        </div>

        <!-- Buttons -->
        <div class="d-flex gap-3 mt-4">
            <a href="{{ url('/AD') }}"
                class="btn btn-light border btn-lg w-50 rounded-3 shadow-sm fw-semibold hover-scale">
                <i class="fas fa-arrow-left me-2"></i> Cancel
            </a>

            <button type="submit" 
                class="btn btn-primary btn-lg w-50 rounded-3 shadow-sm fw-semibold hover-scale">
                <i class="bi bi-save me-2"></i> Confirm
            </button>
        </div>
    </form>
</div>

@endsection