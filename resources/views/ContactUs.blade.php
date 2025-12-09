@extends('layout.home')

@section('contactus')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h1 class="fw-bold text-dark mb-3">Contact Us</h1>
                    <p class="text-muted">
                        Have questions, suggestions, or just want to say hello? Fill out the form below and we’ll get back
                        to you shortly.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-body p-4 p-md-5">
                            <form action="{{ url('contact.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label fw-semibold">Your Name</label>
                                        <input type="text" class="form-control form-control-lg" id="name" name="name"
                                            placeholder="John Doe" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label fw-semibold">Your Email</label>
                                        <input type="email" class="form-control form-control-lg" id="email" name="email"
                                            placeholder="example@email.com" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="subject" class="form-label fw-semibold">Subject</label>
                                    <input type="text" class="form-control form-control-lg" id="subject" name="subject"
                                        placeholder="Message subject" required>
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="form-label fw-semibold">Message</label>
                                    <textarea class="form-control form-control-lg" id="message" name="message" rows="5"
                                        placeholder="Write your message..." required></textarea>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-lg px-5">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection