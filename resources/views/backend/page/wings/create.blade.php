@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Add Wings</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('wings.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Wings type<span
                                                class="text-danger">*</span></label>
                                        <select name="wings_type" id="wings_type" class="form-control input_color py-3">
                                            <option value="">Select type</option>
                                            <option value="Country">Country</option>
                                            <option value="District">District</option>
                                            <option value="Tehsil">Tehsil</option>
                                        </select>
                                        @error('wings_type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror


                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Wings type name<span
                                                class="text-danger">*</span></label>
                                        <select name="wings_type_name" id="wings_type_name"
                                            class="form-control input_color py-3">
                                            <option value="">Select</option>
                                        </select>
                                        @error('wings_type_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Profession name <span
                                                class="text-danger">*</span></label>
                                        <select name="profession_name" id="profession_name"
                                            class="form-control input_color py-3">
                                            <option value="">Select</option>
                                        </select>
                                        @error('profession_name')
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
        $('#wings_type').on('change', function() {
            var selectedType = $(this).val();

            if (selectedType) {
                $.ajax({
                    url: baseUrl + '/get-names',
                    type: 'GET',
                    data: {
                        model: selectedType
                    },
                    success: function(response) {
                        var typeDetailsSelect = $('#wings_type_name');
                        typeDetailsSelect.empty();
                        typeDetailsSelect.append(
                            `<option value="">Select ${selectedType}</option>`);

                        $.each(response, function(index, name) {
                            typeDetailsSelect.append('<option value="' + name +
                                '">' + name + '</option>');
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
        $('#wings_type_name').on('change', function() {
            var selectedValue = $(this).val();
            var selectedType = $('#wings_type').val();

            if (selectedValue && selectedType) {
                $.ajax({
                    url: baseUrl + '/get-professions',
                    type: 'GET',
                    data: {
                        type: selectedType,
                        value: selectedValue
                    },
                    success: function(response) {
                        console.log(response);
                        var professionSelect = $('#profession_name');
                        professionSelect.empty();
                        professionSelect.append(
                            '<option value="">Select Profession</option>');

                        var uniqueProfessions = [...new Set(response)];

                        $.each(uniqueProfessions, function(index, profession) {
                            professionSelect.append('<option value="' + profession +
                                '">' + profession + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ' + status + error);
                    }
                });
            } else {
                $('#profession_name').empty().append('<option value="">Select</option>');
            }
        });
    });
</script>
