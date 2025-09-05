@extends('front-end.index')
@section('title', 'Contact Us')
@section('slot')
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="card shadow-sm p-4">
                        <h4 class="mb-4">Send a Message</h4>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Your Email</label>
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control" placeholder="Enter subject">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="5" placeholder="Write your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Send Message</button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-5">
                    <div class="card shadow-sm p-4 contact-info">
                        <h4 class="mb-4">Get in Touch</h4>
                        <h5><i class="bi bi-geo-alt text-success"></i> Address</h5>
                        <p class="text-muted">123 Green Street, Ho Chi Minh City, Vietnam</p>

                        <h5><i class="bi bi-telephone text-success"></i> Phone</h5>
                        <p class="text-muted">+84 123 456 789</p>

                        <h5><i class="bi bi-envelope text-success"></i> Email</h5>
                        <p class="text-muted">contact@shoplogo.com</p>

                        <div class="mt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18..." width="100%" height="200"
                                style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
