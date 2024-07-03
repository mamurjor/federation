@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Add Vote announce</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('voteannounce.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"> Select Division <span
                                                class="text-danger">*</span></label>
                                        <select name="Division" id="Division" class="form-control input_color py-3">
                                            @foreach ($Division as $data)
                                                <option value="{{ $data->name }}">{{ $data->name }}</option>
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
                                            <option value="">Select Distict</option>
                                        </select>
                                        @error('district')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"> Select Tehsil <span
                                                class="text-danger">*</span></label>
                                        <select name="tehsil" id="tehsil" class="form-control input_color py-3">

                                            <option value="">Select Tehsil</option>
                                        </select>
                                        @error('tehsil')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Announcement<span
                                                class="text-danger">*</span></label>
                                        <textarea name="announce" class="form-control py-3 input_color" id="" cols="30" rows="10"></textarea>
                                        @error('announce')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"> Select vote type <span
                                                class="text-danger">*</span></label>
                                        <select name="votetype" id="" class="form-control input_color py-3">
                                            @foreach ($votetype as $data)
                                                <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('votetype')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"> Select vote position type <span
                                                class="text-danger">*</span></label>
                                        <select name="votepositiontype[]" id="" multiple data-live-search="true"
                                            class="selectpicker form-control input_color py-3">
                                            @foreach ($votepositiontype as $data)
                                                <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('votepositiontype')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror


                                    </div>
                                </div>

                                


                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Voting Date<span
                                                class="text-danger">*</span></label>
                                        <input type="date" value="" name="date"
                                            class="form-control py-3 input_color" placeholder="Enter ">
                                        @error('date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Image<span
                                                class="text-danger">*</span></label>
                                        <input type="file" value="" name="voteimage"
                                            class="form-control py-3 input_color" placeholder="Enter ">
                                        @error('voteimage')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="mt-3 text-end">
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
        $("#Division").change(function() {

            var Division = $('#Division').val();
            $.ajax({
                url: '{{ route('tehsil.getdistrict', ':Division') }}'.replace(':Division',
                    Division),
                type: 'GET',
                dataType: 'json',
                success: function(response) {

                    // Check if response is not empty


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





    $(document).ready(function() {
        $("#district").change(function() {

            var district = $('#district').val();
            $.ajax({
                url: '{{ route('tehsil.gettehsil', ':district') }}'.replace(':district',
                    district),
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if ($.isEmptyObject(response)) {
                        $('#tehsil').empty();
                        var option = "<option value='" + 0 + "'>" + 'no data found' +
                            "</option>";
                        $("#tehsil").append(option);
                        return;
                    }

                    // Clear existing options
                    $('#tehsil').empty();

                    // Append new options
                    $.each(response, function(id, data) {
                        var option = "<option  value='" + data.name + "'>" + data
                            .name + "</option>";
                        $("#tehsil").append(option);
                    });

                }
            });

        });
        //var value = $('#dropDownId').val();

    });
</script>
