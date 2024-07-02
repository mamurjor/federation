@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Edit Wings</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('wings.update') }}" method="POST">
                        @csrf        
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Wings type<span class="text-danger">*</span></label>
                                        <input type="hidden" name="id" value="{{ $wings->id }}">
                                        <select name="wings_type" id="wings_type" class="form-control input_color py-3">
                                            <option value="">Select type</option>
                                            <option value="Country" {{ $wings->wings_type == 'Country' ? 'selected' : '' }}>Country</option>
                                            <option value="District" {{ $wings->wings_type == 'District' ? 'selected' : '' }}>District</option>
                                            <option value="Tehsil" {{ $wings->wings_type == 'Tehsil' ? 'selected' : '' }}>Tehsil</option>
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
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update<i class="fa-solid fa-circle-plus ms-2"></i></button>
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
        var baseUrl = '{{ url('') }}';

        // Initialize dropdowns with previous values
        var wingsType = '{{ $wings->wings_type }}';
        var wingsTypeName = '{{ $wings->wings_type_name }}';

        if (wingsType) {
            $.ajax({
                url: baseUrl + '/get-names',
                type: 'GET',
                data: { model: wingsType },
                success: function(response) {
                    var typeDetailsSelect = $('#wings_type_name');
                    typeDetailsSelect.empty();
                    typeDetailsSelect.append(`<option value="">Select ${wingsType}</option>`);

                    $.each(response, function(index, name) {
                        typeDetailsSelect.append('<option value="' + name + '"' + (name == wingsTypeName ? ' selected' : '') + '>' + name + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + status + error);
                }
            });
        }

        $('#wings_type').on('change', function() {
            var selectedType = $(this).val();

            if (selectedType) {
                $.ajax({
                    url: baseUrl + '/get-names',
                    type: 'GET',
                    data: { model: selectedType },
                    success: function(response) {
                        var typeDetailsSelect = $('#wings_type_name');
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

        $('#wings_type_name').on('change', function() {
            var selectedValue = $(this).val();
            var selectedType = $('#wings_type').val();

            if (selectedValue && selectedType) {
                $.ajax({
                    url: baseUrl + '/get-professions',
                    type: 'GET',
                    data: { type: selectedType, value: selectedValue },
                    success: function(response) {
                        var professionSelect = $('#profession_name');
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
                $('#profession_name').empty().append('<option value="">Select</option>');
            }
        });
    });
</script>
