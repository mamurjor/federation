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
                                <h5 class="mb-0">FAQ</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.faq') }}" method="POST"
                                    enctype="multipart/form-data" id="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">FAQ Title</label>
                                        <input type="text" value="{{ config('settings.ftitle')}}" class="form-control"
                                            id="icon" name="ftitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">FAQ Sub Title</label>
                                        <input type="text" value="{{ config('settings.fsubtitle')}}" class="form-control"
                                            id="icon" name="fsubtitle">

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
            