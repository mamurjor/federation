<section id="presidents_and_secretaries" class="presidents_and_secretaries">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="common_heading text-center">
                    <h6>See Ads</h6>
                    <h2 class="fw-bold mb-3 mt-3">Classified Ads</h2>
                    <p class="fw-normal">{{ config('settings.psubtitle') }}</p>
                </div>
            </div>
        </div>

        <div id="classify" class="row mt-5">

            @foreach ($classified as $data)
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">

                    <a href="{{ route('classified.single', $data->id) }}">
                        <div class="card position-relative border-0 mb-3">
                            <h6 class="classified_position_heading position-absolute">New</h6>
                            <div class="hart_postion position-absolute">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <img src="{{ $data->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card_date d-flex justify-content-between">
                                    <div class="card_date_common mb-4 mobile_bg"><i
                                            class="fa-solid fa-mobile-screen-button me-2 text-white"></i>Mobiles
                                    </div>
                                    <div class="card_date_common mb-4"><i class="fa fa-star rating-color me-2"></i>4.5
                                    </div>
                                </div>
                                <h5 class="card-title mt-4">{{ $data->title }}</h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot "></i>
                                    {{ $data->location }}</p>
                                <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>
                                    <?php
                                    
                                    $currentDate = date('Y-m-d'); // Add a semicolon here
                                    $date2 = new DateTime($data->created_at);
                                    
                                    $interval = $date2->diff(new DateTime($currentDate)); // Call diff() on $date2
                                    
                                    echo $interval->format(' %a days ago'); // Output: -9 days
                                    ?>
                                </p>

                                <div class="classified_add_btn d-flex justify-content-between align-items-center">
                                    <h6 class="fw-bold">${{ $data->price }}</h6>
                                    <a href="{{ route('classified.single', $data->id) }}" class="py-3">Read
                                        More<i class="fa-solid fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>
            @endforeach

            <div class="text-center border border-black p-3">
                <a href="{{ route('classified') }}" class="py-3">See
                    More<i class="fa-solid fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
</section>
