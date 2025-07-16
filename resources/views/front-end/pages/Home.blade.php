@extends('front-end.index')
@section('title', 'Trang chủ')
@section('slot')
    <section class="home">
        <div class="banner-home">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/banner-home-1.jpg" alt="">
                    </div>
                    <div class="swiper-slide"><img src="/images/banner-home-2.png" alt=""></div>
                    <div class="swiper-slide"><img src="/images/banner-home-3.png" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row vh-50">
                <div class="col-8">
                    <img src="/images/banner_service.png" alt="">
                </div>
                <div class="col-4 h-100 d-flex flex-column justify-content-center">

                    <div class="info-card">
                        <img src="/images/thanh-toan.png" alt="Thanh toán">
                        <div>
                            <h5 class="mb-1 fw-bold">Thanh toán</h5>
                            <p class="mb-0 small">Khách hàng có thể lựa chọn một hoặc nhiều hình thức thanh toán</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <img src="/images/cam-ket.png" alt="Cam kết chính hãng">
                        <div>
                            <h5 class="mb-1 fw-bold">Cam kết chính hãng</h5>
                            <p class="mb-0 small">Chúng tôi cam kết hàng chính hãng và đảm bảo về chất lượng sản phẩm
                            </p>
                        </div>
                    </div>
                    <div class="info-card">
                        <img src="/images/sieu-toc.png" alt="Siêu tốc 2H">
                        <div>
                            <h5 class="mb-1 fw-bold">Siêu tốc 2H</h5>
                            <p class="mb-0 small">Dịch vụ giao hàng nhanh 2h trong nội thành Hà Nội</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 banner-khuyenmai">
                <h3 class="fw-bold">KHUYẾN MÃI</h3>
            </div>
            <div class="row mt-5">
                <div class="col-6" style="overflow: hidden;">
                    <div class="swiper2 mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="position-relative">
                                    <img src="/images/1.png" alt="">
                                    <div class="position-absolute" style="top: 10px">
                                        <div class="search-icon">🔍</div>
                                        <button class="overlay-btn text-dark">
                                            Mua ngay <i class="bi bi-bag"></i>
                                        </button>
                                    </div>
                                </div>
                                <h6 class="card-title mb-2">Dầu gội L'Oréal Paris</h6>
                                <p class="mb-0">
                                    <span class="text-muted text-decoration-line-through">150.000₫</span>
                                    <span class="fw-bold text-danger ms-2">120.000₫</span>
                                </p>
                            </div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="col-6">
                    <img class="h-100 w-100" src="/images/banner_promotion.png" alt="">
                </div>
            </div>
            <div class="mt-5 banner-newproduct">
                <h3 class="fw-bold">HÀNG MỚI VỀ</h3>
            </div>
            <div class="newproduct">
                <div class="swiper mySwiperNewProduct">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/rice-milk.jpg" alt="Sữa rửa mặt Rice milk">
                            <div class="product-title mt-2">Sữa rửa mặt Rice milk</div>
                            <div class="fw-bold mt-1">75.000₫</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/eucerin.jpg" alt="Sữa rửa mặt Eucerin">
                            <div class="product-title mt-2">Sữa rửa mặt Eucerin</div>
                            <div class="fw-bold mt-1">55.000₫</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/clinic.jpg" alt="Sữa rửa mặt Clinic">
                            <div class="product-title mt-2">Sữa rửa mặt Clinic</div>
                            <div class="fw-bold mt-1">65.000₫</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/v7.jpg" alt="Kem dưỡng da V7 Toning Light">
                            <div class="product-title mt-2">Kem dưỡng da V7 Toning Light</div>
                            <div class="fw-bold mt-1">80.000₫</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/v7.jpg" alt="Kem dưỡng da V7 Toning Light">
                            <div class="product-title mt-2">Kem dưỡng da V7 Toning Light</div>
                            <div class="fw-bold mt-1">80.000₫</div>
                        </div>
                        <!-- Thêm các sản phẩm khác nếu muốn -->
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <section class="py-5 bg-white text-center">
                <div class="container">
                    <h4 class="text-uppercase fw-bold mb-4 text-primary">Sản phẩm bán chạy</h4>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4">

                        <!-- SP1 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Sữa tắm Purité">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Sữa tắm Purité</h6>
                                    <p class="text-danger fw-bold mb-0">200.000₫</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP2 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Sữa tắm Pharmacy">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Sữa tắm Pharmacy</h6>
                                    <p class="text-danger fw-bold mb-0">150.000₫</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP3 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Sữa tắm LOVE BEAUTY & PLANET">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Sữa tắm LOVE BEAUTY & PLANET</h6>
                                    <p class="text-danger fw-bold mb-0">150.000₫</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP4 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Sữa rửa mặt Hazeline">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Sữa rửa mặt Hazeline</h6>
                                    <p class="text-danger fw-bold mb-0">55.000₫</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP5 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Sữa rửa mặt Hatomuzi">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Sữa rửa mặt Hatomuzi</h6>
                                    <p class="text-danger fw-bold mb-0">95.000₫</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP6 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Sữa rửa mặt Rice milk">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Sữa rửa mặt Rice milk</h6>
                                    <p class="text-danger fw-bold mb-0">75.000₫</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP7 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Kem dưỡng da V7 Toning Light">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Kem dưỡng da V7 Toning Light</h6>
                                    <p class="text-danger fw-bold mb-0">80.000₫</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP8 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Kem dưỡng da Collagen">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Kem dưỡng da Collagen</h6>
                                    <p class="text-danger fw-bold mb-0">230.000₫</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP9 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Dầu gội Clear">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Dầu gội Clear</h6>
                                    <p class="text-muted mb-0">Liên hệ</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP10 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Dầu gội Nerman Black Tone">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Dầu gội Nerman Black Tone</h6>
                                    <p class="mb-0 text-muted text-decoration-line-through">250.000₫</p>
                                    <p class="text-danger fw-bold mb-0">200.000₫</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP11 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Dầu gội Rejoie">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Dầu gội Rejoie</h6>
                                    <p class="text-muted mb-0">Liên hệ</p>
                                </div>
                            </div>
                        </div>

                        <!-- SP12 -->
                        <div class="col">
                            <div class="card border-0">
                                <img src="/images/1.png" class="card-img-top" alt="Dầu gội Dercos">
                                <div class="card-body p-2">
                                    <h6 class="card-title small">Dầu gội Dercos</h6>
                                    <p class="text-danger fw-bold mb-0">90.000₫</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="py-5 bg-light" style="background-color: #fff3ee;">
  <div class="container text-center">
    <h5 class="fw-bold mb-4">Khách hàng của chúng tôi nói gì</h5>

    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner mb-5">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="/images/avata.png" class="rounded-circle mb-3" alt="Khách hàng" width="100" height="100">
          <h6 class="fw-semibold mb-1">Chị Trà My - CEO My Nails</h6>
          <p class="text-muted small px-md-5">
            Mình thường xuyên ghé qua đây để chăm chút bản thân, công việc của mình cũng liên quan đến đồ mỹ phẩm nên mình cảm thấy Rosie phục vụ khách hàng rất chu đáo, các bạn còn được ưu đãi thành viên nữa, mình rất thích nơi đây.
          </p>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="khach-2.jpg" class="rounded-circle mb-3" alt="Khách hàng 2" width="100" height="100">
          <h6 class="fw-semibold mb-1">Anh Hưng - Chuyên viên Marketing</h6>
          <p class="text-muted small px-md-5">
            Dịch vụ rất tốt, nhân viên tận tình. Mình mua mỹ phẩm cho vợ và được tư vấn rất kỹ, chắc chắn sẽ quay lại lần sau.
          </p>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="khach-3.jpg" class="rounded-circle mb-3" alt="Khách hàng 3" width="100" height="100">
          <h6 class="fw-semibold mb-1">Chị Ngọc - Blogger làm đẹp</h6>
          <p class="text-muted small px-md-5">
            Mỹ phẩm ở đây chính hãng, có cả nhiều thương hiệu Hàn và Nhật yêu thích của mình. Mình review nhiều lần rồi, vẫn ưng như ngày đầu.
          </p>
        </div>

      </div>

      <!-- Prev/Next buttons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-white border rounded-circle shadow-sm" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-white border rounded-circle shadow-sm" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <!-- Indicators -->
      <div class="carousel-indicators mt-4">
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active rounded-circle bg-dark" style="width: 8px; height: 8px;"></button>
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" class="rounded-circle bg-dark" style="width: 8px; height: 8px;"></button>
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" class="rounded-circle bg-dark" style="width: 8px; height: 8px;"></button>
      </div>

    </div>
  </div>
</section>

        </div>
    </section>
@endsection
