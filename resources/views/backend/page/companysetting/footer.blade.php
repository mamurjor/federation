@extends('backend.dash')

@section('main-content')
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4">{{ $title }}</h4>

                <!-- Basic Layout -->
                

                <div class="row">
                    <div class="col-md-12">
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

                                        <img width="100" height="100" src="{{ url('/') . config('settings.flogo')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.flogo')}}" class="form-control"
                                            id="icon" name="flogo">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Footer Description</label>
                                        <input type="text" value="{{ config('settings.footerdescription')}}" class="form-control"
                                            id="" name="footerdescription">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Footer tel number</label>
                                        <input type="text" value="{{ config('settings.footertelnumber')}}" class="form-control"
                                            id="" name="footertelnumber">

                                    </div>



                                    <div class="form-group mt-3">
                                        <label for="field1">Footer gmail</label>
                                        <input type="email" value="{{ config('settings.footeremail')}}" class="form-control"
                                            id="" name="footeremail">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Footer address</label>
                                        <input type="text" value="{{ config('settings.footeraddress')}}" class="form-control"
                                            id="" name="footeraddress">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Home Url</label>
                                        <input type="text" value="{{ config('settings.homeurl')}}" class="form-control"
                                            id="" name="homeurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">About Us Url</label>
                                        <input type="text" value="{{ config('settings.abouturl')}}" class="form-control"
                                            id="" name="abouturl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Services Url</label>
                                        <input type="text" value="{{ config('settings.serviceurl')}}" class="form-control"
                                            id="" name="serviceurl">he
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Contact us Url</label>
                                        <input type="text" value="{{ config('settings.contacturl')}}" class="form-control"
                                            id="" name="contacturl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Help center Url</label>
                                        <input type="text" value="{{ config('settings.helpcenterurl')}}" class="form-control"
                                            id="" name="helpcenterurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">How it works Url</label>
                                        <input type="text" value="{{ config('settings.howitworksurl')}}" class="form-control"
                                            id="" name="howitworksurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">registration url</label>
                                        <input type="text" value="{{ config('settings.registrationurl')}}" class="form-control"
                                            id="" name="registrationurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Login url</label>
                                        <input type="text" value="{{ config('settings.loginurl')}}" class="form-control"
                                            id="" name="loginurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">privacy policy url</label>
                                        <input type="text" value="{{ config('settings.privacyurl')}}" class="form-control"
                                            id="" name="privacyurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Terms and conditions url</label>
                                        <input type="text" value="{{ config('settings.termsconditionurl')}}" class="form-control"
                                            id="" name="termsconditionurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">profession url</label>
                                        <input type="text" value="{{ config('settings.professionurl')}}" class="form-control"
                                            id="" name="professionurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Division page url</label>
                                        <input type="text" value="{{ config('settings.Divisionpageurl')}}" class="form-control"
                                            id="" name="Divisionpageurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">All tehsil url</label>
                                        <input type="text" value="{{ config('settings.tehsilurl')}}" class="form-control"
                                            id="" name="tehsilurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">footer last section text</label>
                                        <input type="text" value="{{ config('settings.footerlastsectiontext')}}" class="form-control"
                                            id="" name="footerlastsectiontext">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Payment method logo</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.paymentmethod')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.paymentmethod')}}" class="form-control"
                                            id="icon" name="paymentmethod">

                                    </div>
                                    {{-- <div class="form-group mt-3">
                                        <label for="field1">visa</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.visa')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.visa')}}" class="form-control"
                                            id="icon" name="visa">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">mastercard</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.mastercard')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.mastercard')}}" class="form-control"
                                            id="icon" name="mastercard">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">discover</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.discover')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.discover')}}" class="form-control"
                                            id="icon" name="discover">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">american</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.american')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.american')}}" class="form-control"
                                            id="icon" name="american">

                                    </div> --}}

                                    <div class="form-group mt-3">
                                        <label for="field1">copyright</label>
                                        <input type="text" class="form-control" value="{{ config('settings.copyright')}}"
                                            id="" name="copyright">

                                    </div>


                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>


                                </form>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <!-- / Content -->
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
            