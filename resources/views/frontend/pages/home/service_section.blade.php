<!-- Service section  start -->
<section id="service_section" class="service_section">
    <div class="container-fluid">
        <div class="row">

            @php
                $data = json_decode($sliersections, true);

            @endphp

            <div class="col-md-12 p-0">
                <div id="carouselExampleCaptions_service" class="carousel slide p-0">
                    <div class="carousel-inner">

                        @foreach ($data as $index=>$singlevalue)
                         <div class="carousel-item image_overly_color <?php if($index=="0"){
                                echo "active";
                            }?>">
                                <img class="d-block w-100" src=" <?php echo url('/') . $singlevalue['imageurl']; ?>" alt="tst">
                                {{-- <img src="{{ asset('frontend/assets/img/home_page/service_section/img-01.png') }}"
                                class="d-block w-100" alt="..."> --}}
                                <div class="carousel-caption  d-md-block">
                                    <h1 class="fw-bold mb-2">{{ $singlevalue['title'] }}</h1>
                                    <p class="fw-normal">{{ $singlevalue['slogan'] }}</p>
                                    <div class="carousel_btn_div mt-5">
                                        <div class="common_button">
                                            <a href="{{ $singlevalue['button_url'] }}">{{ $singlevalue['button_text'] }}<i
                                                    class="fa-solid fa-circle-plus ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach




                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleCaptions_service" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleCaptions_service" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service section  end -->
