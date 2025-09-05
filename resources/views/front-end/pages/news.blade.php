@extends('front-end.index')
@section('slot')
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card mb-4 news-card">
                        <img src="/assets/images/hoa-qua.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Summer Smoothie Recipes You Must Try</h5>
                            <p class="card-text text-muted">Discover the healthiest smoothie recipes made from fresh fruits
                                & veggies. Perfect for your summer vibes!</p>
                            <a href="#" class="btn btn-success">Read More</a>
                        </div>
                    </div>

                    <div class="card mb-4 news-card">
                        <img src="/assets/images/hoa-qua.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Benefits of Organic Vegetables</h5>
                            <p class="card-text text-muted">Organic veggies are not only healthier but also packed with
                                nutrients. Here's why you should switch today!</p>
                            <a href="#" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4">
                        <h4 class="sidebar-title">Categories</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Fruits & Veggies</li>
                            <li class="list-group-item">Health Tips</li>
                            <li class="list-group-item">Promotions</li>
                            <li class="list-group-item">Recipes</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="sidebar-title">Popular Posts</h4>
                        <div class="d-flex mb-3">
                            <img src="https://via.placeholder.com/80" class="me-3 rounded" alt="">
                            <div>
                                <h6 class="mb-1">Top 5 Juices for Energy</h6>
                                <small class="text-muted">Aug 30, 2025</small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="https://via.placeholder.com/80" class="me-3 rounded" alt="">
                            <div>
                                <h6 class="mb-1">How to Store Fresh Fruits</h6>
                                <small class="text-muted">Aug 25, 2025</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
