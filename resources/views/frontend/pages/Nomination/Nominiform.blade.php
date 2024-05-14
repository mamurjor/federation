@extends('backend.client')
@section('main-content')
      <div class="row m-5">
        <div class="col-xl">
            <div class="card m-3">
                <di class="card-header d-flex justify-content-between align-items-center">
                  <h5>Nomini Form</h5>
                </di v>

                <div class="card-body">

                         

                    <form action="{{ route('nomini.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            @if(session('success'))
                                <div class = "my-3 fw-bold text-success">
                                    {{ session('success') }}
                               
                                </div>
                            @endif
                            <div class="col-md-12">


                                @foreach ($voteannouncement as $singlevalue )
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span
                                                class="text-danger">*</span> Votetype </label>

                                        <input type="hidden" value="{{ $singlevalue->id }}" name="id"
                                        class="form-control py-3 input_color" placeholder="">
                                        <input type="text" readonly value="{{ $singlevalue->votetype }}" name="votetype"
                                            class="form-control py-3 input_color" placeholder="Enter votetype">
                                        @error('votetype')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span
                                                class="text-danger">*</span> Country </label>
                                        <input type="text" readonly value="{{ $singlevalue->country }}" name="country"
                                            class="form-control py-3 input_color" placeholder="Enter votetype">
                                        @error('votetype')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span
                                                class="text-danger">*</span> district </label>
                                        <input type="text" readonly value="{{ $singlevalue->district }}" name="district"
                                            class="form-control py-3 input_color" placeholder="Enter votetype">
                                        @error('votetype')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span
                                                class="text-danger">*</span> tehsil </label>
                                        <input type="text" readonly value="{{ $singlevalue->tehsil }}" name="tehsil"
                                            class="form-control py-3 input_color" placeholder="Enter votetype">
                                        @error('votetype')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span
                                                class="text-danger">*</span> announce </label>
                                        <input type="text" readonly value="{{ $singlevalue->announce }}" name="announce"
                                            class="form-control py-3 input_color" placeholder="Enter votetype">
                                        @error('votetype')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span
                                                class="text-danger">*</span> Date </label>
                                        <input type="text" readonly value="{{ $singlevalue->votingdate }}" name="date"
                                            class="form-control py-3 input_color" placeholder="Enter votetype">
                                        @error('votetype')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span class="text-danger">*</span> Vote Position type </label>
                                        <div class="mt-1 mb-2">
                                            @php
                                                $positionlist = unserialize($singlevalue->votepositiontype);
                                                foreach ($positionlist as $key => $position) {
                                            @endphp
                                            <input type='radio' class="position" name="position" value="<?php echo $position?>" /> <?php echo $position?>
                                            @php
                                                }
                                            @endphp
                                        </div>
                                    </div>
                                </div>
                                


                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"><span
                                                class="text-danger">*</span> Charge </label>
                                        <input type="text" readonly value="" id="charge" name="charge"
                                            class="form-control py-3 input_color" placeholder="Enter votetype">
                                        @error('charge')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                
                                @endforeach
                              
                                


                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Payment and Apply<i
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.position').click(function() {
            // console.log($(this).val());
            var positionName = $(this).val();
            // alert(positionName)
        
            // Send positionName to server using AJAX
            $.ajax({
                url: 'http://127.0.0.1:8000/getCharge',
                type: 'GET',
                data: { positionName: positionName },
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
    