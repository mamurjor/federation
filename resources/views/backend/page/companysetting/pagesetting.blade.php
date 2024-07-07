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
                                <h5 class="mb-0">page setting</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.save') }}" method="POST" id="myForm"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Blog title</label>
                                        <input type="text" value="{{ config('settings.blogtitle')}}" class="form-control"
                                            name="blogtitle" id="icon" name="hlogo">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Blog slogan</label>
                                        <input type="text" value="{{ config('settings.blogslogan')}}" class="form-control"
                                            id="icon" name="blogslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Cast title</label>
                                        <input type="text" value="{{ config('settings.casttitle')}}" class="form-control"
                                            id="icon" name="casttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Cast slogan</label>
                                        <input type="text" value="{{ config('settings.castslogan')}}" class="form-control"
                                            id="icon" name="castslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial title</label>
                                        <input type="text" value="{{ config('settings.matromonialtitle')}}" class="form-control"
                                            id="icon" name="matromonialtitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial slogan</label>
                                        <input type="text" value="{{ config('settings.matromonialslogan')}}" class="form-control"
                                            id="icon" name="matromonialslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Division title</label>
                                        <input type="text" value="{{ config('settings.Divisiontitle')}}" class="form-control"
                                            id="icon" name="Divisiontitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Division slogan</label>
                                        <input type="text" value="{{ config('settings.Divisionslogan')}}" class="form-control"
                                            id="icon" name="Divisionslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Tehsil title</label>
                                        <input type="text" value="{{ config('settings.tehsiltitle')}}" class="form-control"
                                            id="icon" name="tehsiltitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Tehsil slogan</label>
                                        <input type="text" value="{{ config('settings.tehsilslogan')}}" class="form-control"
                                            id="icon" name="tehsilslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">District title</label>
                                        <input type="text" value="{{ config('settings.districttitle')}}" class="form-control"
                                            id="icon" name="districttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">District slogan</label>
                                        <input type="text" value="{{ config('settings.districtslogan')}}" class="form-control"
                                            id="icon" name="districtslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Contact title</label>
                                        <input type="text" value="{{ config('settings.contacttitle')}}" class="form-control"
                                            id="icon" name="contacttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Contact slogan</label>
                                        <input type="text" value="{{ config('settings.contactslogan')}}" class="form-control"
                                            id="icon" name="contactslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">About us title</label>
                                        <input type="text" value="{{ config('settings.abouttitle')}}" class="form-control"
                                            id="icon" name="abouttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">About us slogan</label>
                                        <input type="text" value="{{ config('settings.aboutslogan')}}" class="form-control"
                                            id="icon" name="aboutslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Wings title</label>
                                        <input type="text" value="{{ config('settings.wingstitle')}}" class="form-control"
                                            id="icon" name="wingstitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Wings slogan</label>
                                        <input type="text" value="{{ config('settings.wingsslogan')}}" class="form-control"
                                            id="icon" name="wingsslogan">

                                    </div>



                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit </button>

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
            