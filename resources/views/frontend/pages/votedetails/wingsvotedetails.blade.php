@extends('backend.client')
@section('main-content')
    <style>
        .member_heading {
            text-align: center;
        }

        .member_heading h4 {
            font-size: 16px;
            line-height: 26px;
            color: #000;
            font-weight: 600;
            margin-bottom: 0;
        }

        .member_heading p {
            font-size: 14px;
            line-height: 20px;
            color: #7855F0;
            margin-bottom: 10px;
        }

        .member_img img {
            width: 100%;
        }

        .member_heading {
            position: absolute;
            background: white;
            padding: 20px;
            margin-top: -50px;
            z-index: 999;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            border-radius: 15px;
            box-shadow: 0 0 38px 0 #0b223915;
        }

        .latest_member_box {
            padding: 10px 10px 90px 10px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 38px 0 #0b223915;
            border: 1px solid white;
            transition: .6s;
        }

        .latest_member_box:hover {
            border-color: #7855F0;
        }

        .otp_heading h5 {
            font-size: 16px;
            line-height: 20px;
            color: #000;
            margin-bottom: 0;
        }

        .otp_heading p {
            font-size: 14px;
            line-height: 20px;
            color: #8e8989;
            margin-bottom: 0;
            margin-top: 4px;
        }

        .otp_icon i {
            background: #ff00001c;
            padding: 12px;
            border-radius: 5px;
            font-size: 21px;
        }
    </style>
    {{-- <div class="m-5 d-flex gap-5"> --}}
    {{-- @foreach ($nomini_list as $nomini)
            <div class="col-md-4 col-sm-6 col-lg-4 col-xl-2 mb-4 border border-black p-3">
                <div class="latest_member_box cast_boxs text-center">
                    @if ($nomini->user)
                        <img class="mb-3" src="{{ $nomini->user->userimage }}" alt="">
                        <h6 class="mb-2">Name : {{ $nomini->user->fname }}</h6>
                    @endif
                    <h6 class="mb-2">{{ $nomini->votepositiontype }}</h6>
                    <button class="btn btn-primary waves-effect waves-light vote-btn" 
                        data-nomini-id="{{ $nomini->id }}"
                        data-email="{{ $nomini->user->email }}"
                        data-votepositiontype="{{ $nomini->votepositiontype }}"
                        data-votetype="{{ $nomini->votetype }}"
                        data-votingdate="{{ $nomini->votingdate }}"
                        data-Division="{{ $nomini->Division }}"
                        data-district="{{ $nomini->district }}"
                        data-tehsil="{{ $nomini->tehsil }}"
                    >Vote</button>
                </div>
            </div>
        @endforeach --}}

    {{-- </div> --}}

    <div class="row">
        @foreach ($wingsnomini_list as $nomini)
            <div class="col-md-3 mt-3">
                <div class="latest_member_box position-relative">
                    <div class="member_img">
                        @if ($nomini->user)
                            <img src="{{ $nomini->user->userimage }}" alt="">
                        @endif
                        <div class="member_heading">
                            @if ($nomini->user)
                                <h4>{{ $nomini->user->fname }}</h4>
                            @endif
                            <p>{{ $nomini->votepositiontype }}</p>
                            <button class="btn btn-sm btn-primary vote-btn" data-bs-toggle="modal"
                                data-bs-target="#otpModal"
                                data-nomini-id="{{ $nomini->id }}"
                                data-email="{{ Auth::user()->email }}"
                                data-votepositiontype="{{ $nomini->votepositiontype }}"
                                data-votetype="{{ $nomini->votetype }}"
                                data-votingdate="{{ $nomini->votingdate }}"
                                data-wings="{{ $nomini->wings }}"
                                >Vote Now<i class="fa-solid fa-circle-plus ms-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
<!-- OTP Modal -->
@include('backend.applymodal.apply')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.vote-btn').on('click', function() {
            var nominiId = $(this).data('nomini-id');
            var email = $(this).data('email');
            var votepositiontype = $(this).data('votepositiontype');
            var votetype = $(this).data('votetype');
            var votingdate = $(this).data('votingdate');
            var wings = $(this).data('wings');

            $.ajax({
                url: '{{ route('send.otp') }}',
                method: 'POST',
                data: {
                    nomini_id: nominiId,
                    email: email
                },
                success: function(response) {
                    // console.log('Response:', response);
                    if (response.success) {
                        $('#otpModal').modal('show');
                        $('#hidden_nomini_id').val(nominiId);
                        $('#otpForm').data({
                            votepositiontype: votepositiontype,
                            votetype: votetype,
                            votingdate: votingdate,
                            wings: wings
                        });
                    } else {
                        alert('Failed to send OTP. Please try again. ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert('Failed to send OTP. Please try again.');
                }
            });
        });

        $('#otpForm').on('submit', function(e) {
            e.preventDefault();

            var otp = $('#otp').val();
            var nominiId = $('#hidden_nomini_id').val();
            var data = $(this).data();

            $.ajax({
                url: '{{ route('verify.otp') }}',
                method: 'POST',
                data: {
                    otp: otp,
                    nomini_id: nominiId
                },
                success: function(response) {
                    // console.log('Verify OTP Response:', response);
                    if (response.success) {
                        // alert('OTP verified successfully!');
                        // Submit the data to store
                        $.ajax({
                            url: '{{ route('store.wingsvote.data') }}',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                nomini_id: nominiId,
                                votepositiontype: data.votepositiontype,
                                votetype: data.votetype,
                                votingdate: data.votingdate,
                                wings: data.wings,
                                user_id: '{{ Auth::id() }}' // Add the user_id here
                            },
                            success: function(storeResponse) {
                                // console.log('Store Vote Data Response:', storeResponse);
                                if (storeResponse.success) {
                                    // alert('Vote cast successfully!');

                                    $('#otpModal').modal('hide');
                                    $('#voteSuccess').modal('show');
                                } else {
                                    alert(
                                        'Failed to cast vote. Please try again.'
                                    );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('Store Vote Data Error:', error);
                                alert('Failed to cast vote. Please try again.');
                            }
                        });

                    } else {
                        // alert('Invalid OTP. Please try again.');
                        $('#voteFailed').modal('show');

                    }
                },
                error: function(xhr, status, error) {
                    console.error('Verify OTP Error:', error);
                    alert('Failed to verify OTP. Please try again.');
                }
            });
        });
    });
</script>
