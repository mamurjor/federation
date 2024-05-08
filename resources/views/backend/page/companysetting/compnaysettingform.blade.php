@extends('backend.dash')

@section('main-content')
    <main>
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4">{{ $title }}</h4>

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Header</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.header') }}" method="POST"
                                    enctype="multipart/form-data" id="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Facebook icon</label>
                                        {{-- <img width="100" height="100" src="<?php echo url('/') . config('settings.ficon'); ?>" alt="tst"> --}}
                                        <input type="text" value="<?php echo config('settings.ficon'); ?>" class="form-control"
                                            id="icon" name="ficon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Facebook Url</label>
                                        <input type="text" value="<?php echo config('settings.furl'); ?>" class="form-control"
                                            id="icon" name="furl">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Twitter icon</label>
                                        {{-- <img width="100" height="100" src="<?php echo url('/') . config('settings.ticon'); ?>" alt="tst"> --}}
                                        <input type="text" value="<?php echo config('settings.ticon'); ?>" class="form-control"
                                            id="icon" name="ticon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Twitter Url</label>
                                        <input type="text" value="<?php echo config('settings.turl'); ?>" class="form-control"
                                            id="icon" name="turl">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Linkedin icon</label>
                                        {{-- <img width="100" height="100" src="<?php echo url('/') . config('settings.licon'); ?>" alt="tst"> --}}
                                        <input type="text" value="<?php echo config('settings.licon'); ?>" class="form-control"
                                            id="icon" name="licon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Linkedin Url</label>
                                        <input type="text" value="<?php echo config('settings.lurl'); ?>" class="form-control"
                                            id="icon" name="hlogo">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Youtube icon</label>
                                        {{-- <img width="100" height="100" src="<?php echo url('/') . config('settings.yicon'); ?>" alt="tst"> --}}
                                        <input type="text" value="<?php echo config('settings.yicon'); ?>" class="form-control"
                                            id="icon" name="yicon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Youtube Url</label>
                                        <input type="text" value="<?php echo config('settings.yurl'); ?>" class="form-control"
                                            id="icon" name="yurl">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Header logo</label>
                                        <img width="100" height="100" src="<?php echo url('/') . config('settings.hlogo'); ?>" alt="tst">
                                        <input type="file" value="<?php echo config('settings.hlogo'); ?>" class="form-control"
                                            id="icon" name="hlogo">

                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>

                                </form>

                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">page setting</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.save') }}" method="POST" id="myForm"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Blog title</label>
                                        <input type="text" value="<?php echo config('settings.blogtitle'); ?>" class="form-control"
                                            name="blogtitle" id="icon" name="hlogo">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Blog slogan</label>
                                        <input type="text" value="<?php echo config('settings.blogslogan'); ?>" class="form-control"
                                            id="icon" name="blogslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Cast title</label>
                                        <input type="text" value="<?php echo config('settings.casttitle'); ?>" class="form-control"
                                            id="icon" name="casttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Cast slogan</label>
                                        <input type="text" value="<?php echo config('settings.castslogan'); ?>" class="form-control"
                                            id="icon" name="castslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial title</label>
                                        <input type="text" value="<?php echo config('settings.matromonialtitle'); ?>" class="form-control"
                                            id="icon" name="matromonialtitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial slogan</label>
                                        <input type="text" value="<?php echo config('settings.matromonialslogan'); ?>" class="form-control"
                                            id="icon" name="matromonialslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Country title</label>
                                        <input type="text" value="<?php echo config('settings.countrytitle'); ?>" class="form-control"
                                            id="icon" name="countrytitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Country slogan</label>
                                        <input type="text" value="<?php echo config('settings.countryslogan'); ?>" class="form-control"
                                            id="icon" name="countryslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Tehsil title</label>
                                        <input type="text" value="<?php echo config('settings.tehsiltitle'); ?>" class="form-control"
                                            id="icon" name="tehsiltitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Tehsil slogan</label>
                                        <input type="text" value="<?php echo config('settings.tehsilslogan'); ?>" class="form-control"
                                            id="icon" name="tehsilslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">District title</label>
                                        <input type="text" value="<?php echo config('settings.districttitle'); ?>" class="form-control"
                                            id="icon" name="districttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">District slogan</label>
                                        <input type="text" value="<?php echo config('settings.districtslogan'); ?>" class="form-control"
                                            id="icon" name="districtslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Contact title</label>
                                        <input type="text" value="<?php echo config('settings.contacttitle'); ?>" class="form-control"
                                            id="icon" name="contacttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Contact slogan</label>
                                        <input type="text" value="<?php echo config('settings.contactslogan'); ?>" class="form-control"
                                            id="icon" name="contactslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">About us title</label>
                                        <input type="text" value="<?php echo config('settings.abouttitle'); ?>" class="form-control"
                                            id="icon" name="abouttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">About us slogan</label>
                                        <input type="text" value="<?php echo config('settings.aboutslogan'); ?>" class="form-control"
                                            id="icon" name="aboutslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Wings title</label>
                                        <input type="text" value="<?php echo config('settings.wingstitle'); ?>" class="form-control"
                                            id="icon" name="wingstitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Wings slogan</label>
                                        <input type="text" value="<?php echo config('settings.wingsslogan'); ?>" class="form-control"
                                            id="icon" name="wingsslogan">

                                    </div>



                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit </button>

                                </form>

                            </div>
                        </div>


                    </div>

                    {{-- <form id="myForm">

                                  <div class="form-group mt-3">
                                      <label for="field1">Blog</label>
                                      <input type="text" class="form-control" id="icon" name="hlogo">

                                  </div>
                           
                           
                                  <button type="button" class="btn btn-primary mt-3" id="submit">Submit</button>

                              </form>
                                <form id="myForm">

                              
                                  <div class="form-group mt-3">
                                      <label for="field1">Cast</label>
                                      <input type="text" class="form-control" id="icon" name="hlogo">

                                  </div>

                                 
                                
                                  <button type="button" class="btn btn-primary mt-3" id="submit">Submit</button>

                              </form>
                                <form id="myForm">

                              
                                  <div class="form-group mt-3">
                                      <label for="field1">Matromonial</label>
                                      <input type="text" class="form-control" id="icon" name="hlogo">

                                  </div>

                                 
                                
                                  <button type="button" class="btn btn-primary mt-3" id="submit">Submit</button>

                              </form> --}}


                    <div class="col-xl">
                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Footer</h5>
                                <small class="text-muted float-end">Merged input group</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.footer') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Footer logo</label>

                                        <img width="100" height="100" src="<?php echo url('/') . config('settings.flogo'); ?>" alt="tst">
                                        <input type="file" value="<?php echo config('settings.flogo'); ?>" class="form-control"
                                            id="icon" name="flogo">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Footer Description</label>
                                        <input type="text" value="<?php echo config('settings.footerdescription'); ?>" class="form-control"
                                            id="" name="footerdescription">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Footer tel number</label>
                                        <input type="text" value="<?php echo config('settings.footertelnumber'); ?>" class="form-control"
                                            id="" name="footertelnumber">

                                    </div>



                                    <div class="form-group mt-3">
                                        <label for="field1">Footer gmail</label>
                                        <input type="email" value="<?php echo config('settings.footeremail'); ?>" class="form-control"
                                            id="" name="footeremail">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Footer address</label>
                                        <input type="text" value="<?php echo config('settings.footeraddress'); ?>" class="form-control"
                                            id="" name="footeraddress">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Home Url</label>
                                        <input type="text" value="<?php echo config('settings.homeurl'); ?>" class="form-control"
                                            id="" name="homeurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">About Us Url</label>
                                        <input type="text" value="<?php echo config('settings.abouturl'); ?>" class="form-control"
                                            id="" name="abouturl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Services Url</label>
                                        <input type="text" value="<?php echo config('settings.serviceurl'); ?>" class="form-control"
                                            id="" name="serviceurl">he
                                    </div>
                                   
                                    <div class="form-group mt-3">
                                        <label for="field1">Contact us Url</label>
                                        <input type="text" value="<?php echo config('settings.contacturl'); ?>" class="form-control"
                                            id="" name="contacturl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Help center Url</label>
                                        <input type="text" value="<?php echo config('settings.helpcenterurl'); ?>" class="form-control"
                                            id="" name="helpcenterurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">How it works Url</label>
                                        <input type="text" value="<?php echo config('settings.howitworksurl'); ?>" class="form-control"
                                            id="" name="howitworksurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">registration url</label>
                                        <input type="text" value="<?php echo config('settings.registrationurl'); ?>" class="form-control"
                                            id="" name="registrationurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Login url</label>
                                        <input type="text" value="<?php echo config('settings.loginurl'); ?>" class="form-control"
                                            id="" name="loginurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">privacy policy url</label>
                                        <input type="text" value="<?php echo config('settings.privacyurl'); ?>" class="form-control"
                                            id="" name="privacyurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Terms and conditions url</label>
                                        <input type="text" value="<?php echo config('settings.termsconditionurl'); ?>" class="form-control"
                                            id="" name="termsconditionurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">profession url</label>
                                        <input type="text" value="<?php echo config('settings.professionurl'); ?>" class="form-control"
                                            id="" name="professionurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Country page url</label>
                                        <input type="text" value="<?php echo config('settings.countrypageurl'); ?>" class="form-control"
                                            id="" name="countrypageurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">All tehsil url</label>
                                        <input type="text" value="<?php echo config('settings.tehsilurl'); ?>" class="form-control"
                                            id="" name="tehsilurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">footer last section text</label>
                                        <input type="text" value="<?php echo config('settings.footerlastsectiontext'); ?>" class="form-control"
                                            id="" name="footerlastsectiontext">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Payment method logo</label>

                                        <img width="100" height="100" src="<?php echo url('/') . config('settings.paymentmethod'); ?>" alt="tst">
                                        <input type="file" value="<?php echo config('settings.paymentmethod'); ?>" class="form-control"
                                            id="icon" name="paymentmethod">

                                    </div>
                                    {{-- <div class="form-group mt-3">
                                        <label for="field1">visa</label>

                                        <img width="100" height="100" src="<?php echo url('/') . config('settings.visa'); ?>" alt="tst">
                                        <input type="file" value="<?php echo config('settings.visa'); ?>" class="form-control"
                                            id="icon" name="visa">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">mastercard</label>

                                        <img width="100" height="100" src="<?php echo url('/') . config('settings.mastercard'); ?>" alt="tst">
                                        <input type="file" value="<?php echo config('settings.mastercard'); ?>" class="form-control"
                                            id="icon" name="mastercard">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">discover</label>

                                        <img width="100" height="100" src="<?php echo url('/') . config('settings.discover'); ?>" alt="tst">
                                        <input type="file" value="<?php echo config('settings.discover'); ?>" class="form-control"
                                            id="icon" name="discover">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">american</label>

                                        <img width="100" height="100" src="<?php echo url('/') . config('settings.american'); ?>" alt="tst">
                                        <input type="file" value="<?php echo config('settings.american'); ?>" class="form-control"
                                            id="icon" name="american">

                                    </div> --}}

                                    <div class="form-group mt-3">
                                        <label for="field1">copyright</label>
                                        <input type="text" class="form-control" value="<?php echo config('settings.copyright'); ?>"
                                            id="" name="copyright">

                                    </div>


                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>








                <!-- Form Alignment -->

            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl">
                    <div
                        class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                        <div>
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2024
                            , made with ❤️ by
                            <a href="https://pixinvent.com" target="_blank"
                                class="footer-link text-primary fw-medium">Pixinvent</a>
                        </div>
                        <div class="d-none d-lg-inline-block">
                            <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                target="_blank">License</a>
                            <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                class="footer-link me-4">More Themes</a>

                            <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank"
                                class="footer-link me-4">Documentation</a>

                            <a href="https://pixinvent.ticksy.com/" target="_blank"
                                class="footer-link d-none d-sm-inline-block">Support</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
        </div>
    @endsection


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".approve-btn").click(function() {
                var userid = $(this).attr('data-userid');
                $.ajax({
                    url: '{{ route('user.approved', ':userid') }}'.replace(':userid', userid),
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $.each(response, function(id, data) {

                            window.location()


                        });

                    }
                });

            });

            $(".cancel-btn").click(function() {
                var userid = $(this).attr('data-userid');
                $.ajax({
                    url: '{{ route('user.cancel', ':userid') }}'.replace(':userid', userid),
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $.each(response, function(id, data) {

                            window.location()


                        });

                    }
                });

            });
            //var value = $('#dropDownId').val();

        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var counter = 2; // Start counter at 2 for the first additional field

            $('#addMore').click(function() {
                var newField = '<div class="form-group"><label for="field">Social Media Icon: :</label>' +
                    '<input type="text" class="form-control" id="icon" name="icon[]">' +
                    '</div>';
                var ns = '<div class="form-group"><label for="field">Social Media URL: </label>' +
                    '<input type="text" class="form-control" id="url" name="url[]">' +
                    '</div>';
                $('#extraFields').append(newField + ns);
                counter++;
            });

            $('#myForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission for demo
                // Here you can handle form submission
                alert('Form submitted!');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var counter = 2; // Start counter at 2 for the first additional field

            $('#addMore').click(function() {
                var newField = '<div class="form-group"><label for="field">Social Media Icon: :</label>' +
                    '<input type="text" class="form-control" id="icon" name="icon[]">' +
                    '</div>';
                var ns = '<div class="form-group"><label for="field">Social Media URL: </label>' +
                    '<input type="text" class="form-control" id="url" name="url[]">' +
                    '</div>';
                $('#extraFields').append(newField + ns);
                counter++;
            });

            $('#myForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission for demo
                // Here you can handle form submission
                alert('Form submitted!');
            });
        });
    </script>
