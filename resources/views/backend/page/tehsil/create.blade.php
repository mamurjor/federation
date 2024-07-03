@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Add Tehsil</h5>
                </div>
      
            <div class="card-body">
                <form action="{{ route('tehsil.store') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="mb-6 mt-2">
                            <div class="form-group">
                                <label for="form-label" class="form-label">Division Of Residence <span
                                        class="text-danger">*</span></label>

                                <select name="Division" id="Division_residence" class="form-control input_color py-3">
                                    <option value="" selected>Select Division of Residence</option>
                                    @foreach ($divisions as $index => $singlevalue)
                                        <option value="{{ $singlevalue->name }}"> {{ $singlevalue->name }}
                                        </option>
                                    @endforeach

                                </select>

                                @error('Division')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>


                        <div class="mb-6">
                            <div class="form-group">
                                <label for="form-label" class="form-label"> Select District <span
                                        class="text-danger">*</span></label>

                                <select name="district" id="district" class="form-control input_color py-3">
                                    <option value="">Select District</option>
                                </select>
                                @error('district')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-6">
                                <div class="form-group">
                                    <label for="form-label" class="form-label">Name. <span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="" name="name"
                                        class="form-control py-3 input_color" placeholder="Enter Name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="form-group">
                                    <label for="form-label" class="form-label">Code <span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="1" name="code"
                                        class="form-control py-3 input_color" placeholder="Enter Code">
                                    @error('code')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="my-3">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Create<i
                                        class="fa-solid fa-circle-plus ms-2"></i></button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#Division_residence").change(function() {

            var Division = $('#Division_residence').val();
            // alert(Division)


            $.ajax({
                url: '{{ route('tehsil.getDivision', ':Division') }}'.replace(':Division',
                    Division),
                type: 'GET',
                dataType: 'json',
                success: function(response) {

                    // Check if response is not empty
                    if ($.isEmptyObject(response)) {
                        $('#district').empty();
                        var option = "<option value='" + 0 + "'>" + 'no data found' +
                            "</option>";
                        $("#district").append(option);
                        return;
                    }

                    // Clear existing options
                    $('#district').empty();

                    // Append new options
                    $.each(response, function(id, data) {
                        var option = "<option  value='" + data.name + "'>" + data
                            .name + "</option>";
                        $("#district").append(option);
                    });

                }
            });

        });
        //var value = $('#dropDownId').val();

    });
</script>
