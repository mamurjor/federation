<!-- join us section start -->
        <section id="join_us_section" class="join_us_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="common_join_heading py-3 ps-3">
                            <h5 class="fw-bold">Join Us</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="common_join_heading py-3 ps-3">
                            <h5 class="fw-bold">All feature</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="common_join_heading py-3 ps-3">
                            <h5 class="fw-bold">Latest Ads</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="common_join_heading py-3 ps-3">
                            <h5 class="fw-bold">Matrimonials</h5>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3">
                        <div class="common_join_box join_us_bg text-center">
                            <h3>{{ config('settings.jtitle') }}</h3>
                            <p>{{ config('settings.jsubtitle') }}</p>
                            <div class="common_button mt-5">
                                <a href="{{ config('settings.jurl') }}"> {{ config('settings.jtext') }} <i class="{{ config('settings.jicon') }}"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3 bg-white feature_box px-3 py-4">
                            <a href="#">
                                <div class="feature_heading py-3 px-3 mb-3 rounded">
                                   <h6>Govt. Permission</h6>
                                </div>
                            </a>
                            <a href="#">
                                <div class="feature_heading py-3 px-3 mb-3 rounded">
                                   <h6>Matrimonials</h6>
                                </div>
                            </a>
                            <a href="#">
                                <div class="feature_heading py-3 px-3 mb-3 rounded">
                                   <h6>Latest Ads</h6>
                                </div>
                            </a>
                            <a href="#">
                                <div class="feature_heading py-3 px-3 mb-3 rounded">
                                   <h6>Report Polution</h6>
                                </div>
                            </a>
                            <a href="#">
                                <div class="feature_heading py-3 px-3 mb-3 rounded">
                                   <h6>Transcending geographical </h6>
                                </div>
                            </a>
                            <a href="#">
                                <div class="feature_heading py-3 px-3 mb-3 rounded">
                                   <h6>Meet Chairmen</h6>
                                </div>
                            </a>
                            <a href="#">
                                <div class="feature_heading py-3 px-3 mb-3 rounded">
                                   <h6>Meet Presidents</h6>
                                </div>
                            </a>

                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3">
                        <div class="common_join_box lastest_bg text-center">
                            <img src="{{ config('settings.clogo') }}" class="w-25 mb-2" alt="">
                            <h3>{{ config('settings.ctitle') }}</h3>
                            <p>{{ config('settings.csubtitle') }}</p>
                            <div class="common_button mt-5">
                                <a href="{{ config('settings.curl') }}" class="bg-danger border-danger"> {{ config('settings.ctext') }}  <i class="{{ config('settings.cicon') }}"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3">
                        <div class="common_join_box matrimonials_bg text-center">
                            <img src="{{ config('settings.mlogo') }}" class="w-25 mb-1" alt="">
                            <h3>{{ config('settings.mtitle') }}</h3>
                            <p>{{ config('settings.msubtitle') }}</p>
                            <div class="common_button mt-5">
                                <a href="{{ config('settings.murl') }}"> {{ config('settings.mtext') }}  <i class="{{ config('settings.micon') }}"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- join us section  end -->
