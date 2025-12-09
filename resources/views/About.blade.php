@extends('layout.home')

@section('about')

    <section class="py-5 bg-light">
    <div class="container">

        <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
                <h2 class="fw-bold mb-3">About Us</h2>
                <p class="text-muted">
                    Welcome to our blog — a place where stories come alive, ideas are shared, 
                    and inspiration is found. We create meaningful content for travelers, 
                    food lovers, and anyone who enjoys exploring the beauty of life.
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1526772662000-3f88f10405ff"
                     class="img-fluid rounded shadow"
                     alt="About image">
            </div>

            <div class="col-lg-6">
                <h4 class="fw-semibold mb-3">Our Mission</h4>
                <p class="text-muted">
                    We aim to bring you honest reviews, stunning visuals, helpful guides, 
                    and stories that spark curiosity. Whether you're planning your next 
                    adventure or simply looking for inspiration, we’re here to help.
                </p>

                <h4 class="fw-semibold mt-4 mb-3">Why We Share</h4>
                <p class="text-muted">
                    Every place, every dish, every experience has a story. 
                    We believe those stories should be shared — beautifully and authentically.
                </p>
            </div>
        </div>

    </div>
</section>


@endsection