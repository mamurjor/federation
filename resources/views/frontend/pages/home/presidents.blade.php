<!-- Presidents & General Secretaries start -->
        <section id="presidents_and_secretaries" class="presidents_and_secretaries">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="common_heading text-center">
                            <h6>Meet Now</h6>
                            <h2 class="fw-bold mb-3 mt-3">{{ config('settings.ptitle') }}</h2>
                            <p class="fw-normal">{{ config('settings.psubtitle') }}</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="row card_main">
                    @foreach ($uniqueUserResults as $single)
                        
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                       <a href="#">
                        <div class="card">
                            <div class="card_image">
                                <img src="{{ $single->nomini->user->userimage }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center">
                              <h5 class="card-title">{{ $single->nomini->user->fname }}</h5>
                              <p class="card-text">{{ $single->votepositiontype }}</p>
                              <div class="social_icon mt-5">
                                <a href="#" class=" p-2 rounded-circle fw-normal me-3 bg-primary text-white"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#" class=" p-2 rounded-circle fw-normal me-3 bg-black text-white"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class=" p-2 rounded-circle fw-normal bg-info text-white"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                            </div>
                        </div>
                       </a>
                    </div>
                    @endforeach
           
                </div> --}}
            </div>
        </section>
        <!-- Presidents & General Secretaries end -->
