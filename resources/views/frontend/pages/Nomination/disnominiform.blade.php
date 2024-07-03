@extends('backend.client')
@section('main-content')
    <div class="row m-5">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>District Nomini Form</h5>
                </div>

                <div class="card-body">

                    <form action="{{ route('disnomini.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            @if (session('success'))
                                <div class = "my-3 fw-bold text-success">
                                    {{ session('success') }}

                                </div>
                            @endif

                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span class="text-danger">*</span>
                                            Votetype </label>

                                        <input type="hidden" value="{{ $disvoteannouncement->id }}" name="id"
                                            class="form-control py-3 input_color" placeholder="">
                                        <input type="text" readonly value="{{ $disvoteannouncement->votetype }}"
                                            name="votetype" class="form-control py-3 input_color"
                                            placeholder="Enter votetype">
                                        
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span class="text-danger">*</span>
                                            Division </label>
                                        <input type="text" readonly value="{{ $disvoteannouncement->Division }}"
                                            name="Division" class="form-control py-3 input_color"
                                            placeholder="Enter votetype">

                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span class="text-danger">*</span>
                                            District </label>
                                        <input type="text" readonly value="{{ $disvoteannouncement->district }}"
                                            name="district" class="form-control py-3 input_color"
                                            placeholder="Enter votetype">

                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span class="text-danger">*</span>
                                            Announce </label>
                                        <input type="text" readonly value="{{ $disvoteannouncement->announce }}"
                                            name="announce" class="form-control py-3 input_color"
                                            placeholder="Enter votetype">

                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span class="text-danger">*</span> Date
                                        </label>
                                        <input type="text" readonly value="{{ $disvoteannouncement->votingdate }}"
                                            name="date" class="form-control py-3 input_color"
                                            placeholder="Enter votetype">

                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span class="text-danger">*</span>
                                            Reference 1 email
                                        </label>
                                        <input type="email" value="" name="emailone"
                                            class="form-control py-3 input_color" placeholder="Enter email">
                                        @error('emailone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span class="text-danger">*</span>
                                            Reference 2 email
                                        </label>
                                        <input type="email" value="" name="emailtwo"
                                            class="form-control py-3 input_color" placeholder="Enter email">
                                        @error('emailtwo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span class="text-danger">*</span> Vote
                                            Position Type </label>
                                        <div class="mt-1 mb-2">
                                            @php
                                                $positionlist = unserialize($disvoteannouncement->votepositiontype);
                                            @endphp

                                            @foreach ($positionlist as $key => $position)
                                                <input type='radio' class="position" name="position"
                                                    value="{{ $position }}" /> {{ $position }}
                                            @endforeach
                                            @error('position')user
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>



                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span class="text-danger">*</span>
                                            Charge
                                        </label>
                                        <input type="text" readonly value="" id="charge" name="charge"
                                            class="form-control py-3 input_color" placeholder="Enter votetype">
                                    
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Payment
                                            and Apply<i class="fa-solid fa-circle-plus ms-2"></i></button>
                                    </div>
                                </div>

                            </div>
                    </form>


                </div>
            </div>
        </div>

    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.position').click(function() {
            // console.log($(this).val());
            var positionName = $(this).val();
            // alert(positionName)

            // Send positionName to server using AJAX
            $.ajax({
                url: baseUrl + '/getCharge',
                type: 'GET',
                data: {
                    positionName: positionName
                },
                success: function(response) {
                    // $('#position').empty();
                    // console.log(response.charge);
                    $('#charge').val(response.charge);
                },
                error: function(xhr) {
                    // Handle error
                }
            });
        });
    });
</script>
