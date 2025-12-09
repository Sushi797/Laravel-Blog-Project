@extends('layout.home')

@section('food')

    @if ($latestFood)
        <div class="site-cover site-cover-sm same-height overlay single-page"
            style="background-image: url('{{ asset($latestFood->img_path) }}');">
            <div class="container">
                <div class="row same-height justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="post-entry text-center">
                            <span class="post-category text-white bg-success mb-3">
                                {{ $latestFood->category->name }}
                            </span>
                            <h1 class="mb-4">
                                <a href="#">{{ $latestFood->title }}</a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <section class="py-5 bg-light">
        <div class="container">
            @foreach ($FullblogsF as $blog)
                <div class="row align-items-center mb-5">
                    <div class="col-md-6">
                        <img src="{{ asset($blog->img_path) }}" alt="{{ $blog->title }}" class="img-fluid rounded shadow ">
                    </div>
                    <div class="col-md-6">
                        <h3 class="fw-bold text-dark mb-3">{{ $blog->title }}</h3>
                        <p class="text-muted">{{ $blog->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection