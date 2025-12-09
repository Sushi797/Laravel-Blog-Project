@extends('layout.home')
@section('content')


    <div class="slide-one-item home-slider owl-carousel">
        @foreach ($popularslide as $ps)


            <div class="site-cover site-cover-sm same-height overlay" style="background-image: url('{{asset($ps->img_path)}}');">
                <div class="container">
                    <div class="row same-height align-items-center">
                        <div class="col-md-12 col-lg-6">
                            <div class="post-entry">
                                <span class="post-category text-white bg-success mb-3">{{$ps->category->name}}</span>
                                <h2 class="mb-4"><a href="#">{{ $ps->title }}</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>



    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase border-bottom border-3 border-success pb-2 d-inline-block">
                    Popular BLogs
                </h2>
            </div>
        </div>
        <div class="row g-3">
            @foreach ($popularBlogs as $key => $b)
                @if($key === 0)
                    <!-- Big Left Column -->
                    <div class="col-lg-6">
                        <div class="card border-0 shadow-lg h-100">
                            <img src="{{ asset($b->img_path) }}" class="card-img-top" alt="{{ $b->title }}">
                            <div class="card-body">
                                <span class="badge bg-danger text-uppercase mb-2 fw-bold ">{{ $b->category->name }}</span>
                                <h5 class="card-title fw-bold">{{ $b->title }}</h5>
                                <p class="text-secondary mb-4">
                                    {{ Str::limit($b->description, 100) }}
                                </p>
                                <a href="{{ url('/sport') }}" class="btn btn-danger px-4 rounded-pill fw-semibold">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Small Right Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset($b->img_path) }}" class="card-img-top" alt="{{ $b->title }}">
                            <div class="card-body">
                                <span class="badge bg-dark text-white mb-2">{{ $b->category->name }}</span>
                                <h5 class="card-title">{{ $b->title }}</h5>
                                <p class="text-secondary mb-4 fs-6">
                                    {{ Str::limit($b->description, 60) }}
                                </p>
                                <a href="{{ url('/travel') }}" class="text-primary fw-semibold small text-decoration-none">
                                    Read More →
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach


        </div>
    </div>

    <br><br>
    <div class="container my-5">
        <!-- Section Heading -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase border-bottom border-3 border-success pb-2 d-inline-block">
                    Latest Food Blogs
                </h2>
            </div>
        </div>

        <div class="row g-4">
            <!-- Featured Left Column -->
            <div class="col-lg-7">
                @foreach ($foodBlogs->reverse() as $key => $b)
                    @if($key === 4)
                        <div class="card border-0 shadow-lg rounded-4 overflow-hidden hover-card h-100">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset($b->img_path) }}" class="card-img-top object-fit-cover" alt="{{ $b->title }}">
                            </div>
                            <div class="card-body p-4">
                                <span class="badge bg-success text-uppercase mb-3 px-3 py-2 rounded-pill">
                                    {{ $b->category->name }}
                                </span>
                                <h3 class="fw-bold mb-3">{{ $b->title }}</h3>

                                <p class="text-secondary mb-4">
                                    {{ Str::limit($b->description, 160) }}
                                </p>
                                <a href="{{ url('/food') }}" class="btn btn-success px-4 rounded-pill fw-semibold">
                                    Read More
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Right Column Smaller Posts -->
            <div class="col-lg-5">
                <div class="d-flex flex-column gap-4">
                    @foreach ($foodBlogs->reverse() as $key => $b)
                        @if($key !== 4)
                            <div class="d-flex align-items-start hover-small border-bottom pb-3">
                                <div class="flex-shrink-0 me-3">
                                    <img src="{{ asset($b->img_path) }}" class="rounded-3 object-fit-cover" width="120" height="80"
                                        alt="{{ $b->title }}">
                                </div>
                                <div class="flex-grow-1">
                                    <span class="badge bg-light text-success border border-success text-uppercase mb-2 px-2 py-1">
                                        {{ $b->category->name }}
                                    </span>
                                    <h6 class="fw-bold mb-1">{{ $b->title }}</h6>
                                    <p class="small text-secondary mb-1">{{ Str::limit($b->description, 50) }}</p>
                                    <a href="{{ url('/food') }}" class="text-success fw-semibold small text-decoration-none">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="{{ url('/food') }}" class="btn btn-success px-5 py-2 rounded-pill fw-semibold shadow-sm">
                View All
            </a>
        </div>
    </div>


    <div class="container my-5">
        <!-- Section Heading -->
        <div class="row mb-5 text-center">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase d-inline-block border-bottom border-3 border-success pb-2">
                    Latest Sport Blogs
                </h2>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($sportBlogs as $b)
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-card">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset($b->img_path) }}" class="card-img-top object-fit-cover" alt="{{ $b->title }}">
                        </div>

                        <div class="card-body p-4">
                            <span class="badge text-uppercase mb-3 px-3 py-2 rounded-pill blog-badge">
                                {{ $b->category->name }}
                            </span>
                            <dt class="text-dark fw-bolder mb-0 fs-2">{{ $b->title }}</dt>
                            <p class="text-secondary small mb-0">
                                {{ Str::limit($b->description, 100) }}
                            </p>
                            <a href="{{ url('/sport') }}" class="text-primary fw-semibold small text-decoration-none">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-3">
            <a href="{{ url('/sport') }}" class="btn btn-primary px-5 py-2 rounded-pill fw-semibold shadow-sm">
                View All
            </a>
        </div>
    </div>

@endsection