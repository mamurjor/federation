<!-- our mission start -->
<section id="our_mission" class="our_mission">
    <div class="container">
        <div class="row">

            @php

                $data = json_decode($MissionSections, true);

            @endphp

            @foreach ($data as $singlevalue)

            <div class="col-md-12">
                <div class="common_heading text-center">
                     <img src=" <?php echo url('/').$singlevalue['imageurl'];?>" alt="{{ $singlevalue['title'] }}">
                   
                        
                    <h2 class="fw-bold mb-5 mt-5 text-white"> {{ $singlevalue['title'] }}</h2>
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img class="p_leftRight_image"
                                src="{{ asset('frontend/assets/img/home_page/our_misson_section/rightimg.png') }}"
                                alt=""> 
                               
                            </div>
                        <div class="col-md-6">
                            <p class="fw-normal text-white">{{ $singlevalue['slogan'] }}</p>
                        </div>
                        <div class="col-md-3">
                            <img class="p_leftRight_image"
                                src="{{ asset('frontend/assets/img/home_page/our_misson_section/leftimg.png') }}"
                                alt=""> 
                               
                            </div>
                    </div>
                    <h5 class="text-left text-white mt-5">{{ $singlevalue['description'] }}</h5>

                    <div class="carousel_btn_div our_mission_button_main">
                        <div class="common_button carosel_button1">
                            <a target="_blank" href="{{ $singlevalue['button_one_url'] }}">{{ $singlevalue['button_one_text'] }}<i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                        <div class="common_button">
                            <a href="{{ $singlevalue['button_two_url'] }}" target="_blank">{{ $singlevalue['button_two_text'] }}<i class="fa-solid fa-circle-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


           
        </div>
    </div>
</section>
