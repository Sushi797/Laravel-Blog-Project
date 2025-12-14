@extends("layout.home")
@section("Show detail blog")

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <!-- Blog Card -->
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                <!-- Image -->
                <img src="{{ asset($blog->img_path) }}" 
                     class="img-fluid w-100"
                     style="max-height: 420px; object-fit: cover;"
                     alt="{{ $blog->title }}">

                <!-- Content -->
                <div class="card-body p-4 p-lg-5">

                    <!-- Category -->
                    <span class="badge bg-success text-dark mb-3 px-3 py-2">
                        {{ $blog->category->name }}
                    </span>

                    <!-- Title -->
                    <h1 class="fw-bold mb-3">
                        {{ $blog->title }}
                    </h1>

                    <!-- Description -->
                    <p class="text-muted fs-5 lh-lg">
                        {{ $blog->description }}
                    </p>

                    <!-- Divider -->
                    <hr class="my-4">

                    <!-- Back Button -->
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                        ← Back to Homepage
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection