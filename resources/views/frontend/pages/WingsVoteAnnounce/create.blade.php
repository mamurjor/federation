@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Add Wings Vote announce</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('wingsvoteannounce.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="type" class="form-label">Select Type <span class="text-danger">*</span></label>
                                        <select name="type" id="type" class="form-control input_color py-3">
                                            <option value="">Select type</option>
                                            <option value="Country">Country</option> <!-- Model names -->
                                            <option value="District">District</option>
                                            <option value="Tehsil">Tehsil</option>
                                        </select>
                                        @error('type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div id="getType" class="mb-6">
                                    <div class="form-group">
                                        <label for="typeDetails" class="form-label">Select Type <span class="text-danger">*</span></label>
                                        <select name="typeDetails" id="typeDetails" class="form-control input_color py-3">
                                            <option value="">Select</option>
                                        </select>
                                        @error('typeDetails')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div id="getProfession" class="mb-6">
                                    <div class="form-group">
                                        <label for="profession" class="form-label">Select Profession <span class="text-danger">*</span></label>
                                        <select name="profession" id="profession" class="form-control input_color py-3">
                                            <option value="">Select</option>
                                        </select>
                                        @error('profession')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                




                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Announcement<span
                                                class="text-danger">*</span></label>
                                        <textarea name="announce" class="form-control py-3 input_color" id="" cols="20" rows="10"></textarea>
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
                                            <option value="">Select</option>
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



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle the first dropdown change event
        $('#type').on('change', function() {
            var selectedType = $(this).val();
    
            if (selectedType) {
                $.ajax({
                    url: '/get-names',
                    type: 'GET',
                    data: { model: selectedType },
                    success: function(response) {
                        var typeDetailsSelect = $('#typeDetails');
                        typeDetailsSelect.empty();
                        typeDetailsSelect.append(`<option value="">Select ${selectedType}</option>`);
                        
                        $.each(response, function(index, name) {
                            typeDetailsSelect.append('<option value="' + name + '">' + name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ' + status + error);
                    }
                });
            } else {
                $('#typeDetails').empty().append('<option value="">Select</option>');
            }
        });
    
        // Handle the second dropdown change event
        $('#typeDetails').on('change', function() {
            var selectedValue = $(this).val();
            var selectedType = $('#type').val();
    
            if (selectedValue && selectedType) {
                $.ajax({
                    url: '/get-professions',
                    type: 'GET',
                    data: { type: selectedType, value: selectedValue },
                    success: function(response) {
                        console.log(response);
                        var professionSelect = $('#profession');
                        professionSelect.empty();
                        professionSelect.append('<option value="">Select Profession</option>');

                        var uniqueProfessions = [...new Set(response)];
                        
                        $.each(uniqueProfessions, function(index, profession) {
                            professionSelect.append('<option value="' + profession + '">' + profession + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ' + status + error);
                    }
                });
            } else {
                $('#profession').empty().append('<option value="">Select</option>');
            }
        });
    });
    </script>

