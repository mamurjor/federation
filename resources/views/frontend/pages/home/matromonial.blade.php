<section id="presidents_and_secretaries" class="presidents_and_secretaries">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="common_heading text-center">
                    <h6>See Matromonial</h6>
                    <h2 class="fw-bold mb-3 mt-3">Matromonial</h2>
                    <p class="fw-normal">{{ config('settings.psubtitle') }}</p>
                </div>
            </div>
        </div>
        <div id="matro" class="row mt-5">

            @foreach ($matromonial as $data)
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
                   <a href="{{ route('matromonial.single', $data->id) }}">
                    <div class="card border-0 mb-3">
                        <div class="text-center py-3">
                            <img src="{{ $data->matromonialimage }}" class="card-img-top matrimonial_img"
                                alt="...">
                        </div>
                        <div class="card-body text-center">
                            <div class="card_date d-flex justify-content-between">
                                <h6 class="card_age_year">{{ $data->age }}</h6>
                                <h6 class="card_age_year bg-warning">{{ $data->height }}</h6>
                                <h6 class="card_age_year bg-danger">{{ $data->religion }}</h6>
                                <h6 class="card_age_year bg-primary">{{ $data->education }}</h6>
                            </div>
                            <h5 class="card-title mt-4">{{ $data->name }}</h5>
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

                            <div
                                class="classified_add_btn d-flex justify-content-between align-items-center pt-3">
                                <a
                                    href="mailto:{{ $data->email }}?subject=Your%20Subject&body=Your%20Message%20Here">

                                    <h6 class="fw-bold matrimonial_add_btn"><i
                                            class="fa-solid fa-phone"></i>
                                        contact</h6>
                                </a>
                                <a href="{{ route('matromonial.single', $data->id) }}"
                                    class="py-3">View
                                    Profile<i class="fa-solid fa-arrow-right ms-3"></i></a>
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