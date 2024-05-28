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
  

    <div class="row">
        @foreach ($disnomini_list as $disnomini)
            <div class="col-md-3 mt-3">
                <div class="latest_member_box position-relative">
                    <div class="member_img">
                        @if ($disnomini->user)
                            <img src="{{ $disnomini->user->userimage }}" alt="">
                        @endif
                        <div class="member_heading">
                            @if ($disnomini->user)
                                <h4>{{ $disnomini->user->fname }}</h4>
                            @endif
                            <p>{{ $disnomini->votepositiontype }}</p>
                            <button class="btn btn-sm btn-primary vote-btn"
                                data-disnomini-id="{{ $disnomini->id }}" data-email="{{ Auth::user()->email }}"
                                data-votepositiontype="{{ $disnomini->votepositiontype }}"
                                data-votetype="{{ $disnomini->votetype }}" data-votingdate="{{ $disnomini->votingdate }}"
                                data-country="{{ $disnomini->country }}" data-district="{{ $disnomini->district }}"
                                data-tehsil="{{ $disnomini->tehsil }}">Vote Now<i
                                    class="fa-solid fa-circle-plus ms-1"></i></button>
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
        var disnominiId = $(this).data('disnomini-id');
        var email = $(this).data('email');
        var votepositiontype = $(this).data('votepositiontype');
        var votetype = $(this).data('votetype');
        var votingdate = $(this).data('votingdate');
        var country = $(this).data('country');
        var district = $(this).data('district');
        var tehsil = $(this).data('tehsil');

        $.ajax({
            url: '{{ route('check.vote') }}',
            method: 'POST',
            data: {
                disnomini_id: disnominiId,
                user_id: '{{ Auth::id() }}'
            },
            success: function(response) {
                if (response.hasVoted) {
                    // alert('Sorry. You have already voted for this nominee.');
                    $('#voteOver').modal('show');
                } else {
                    $.ajax({
                        url: '{{ route('send.otp') }}',
                        method: 'POST',
                        data: {
                            disnomini_id: disnominiId,
                            email: email
                        },
                        success: function(response) {
                            if (response.success) {
                                $('#otpModal').modal('show');
                                $('#hidden_disnomini_id').val(disnominiId);
                                $('#otpForm').data({
                                    votepositiontype: votepositiontype,
                                    votetype: votetype,
                                    votingdate: votingdate,
                                    country: country,
                                    district: district,
                                    tehsil: tehsil
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
                }
            },
            error: function(xhr, status, error) {
                console.error('Check Vote Error:', error);
                alert('Failed to check vote. Please try again.');
            }
        });
    });

    $('#otpForm').on('submit', function(e) {
        e.preventDefault();

        var otp = $('#otp').val();
        var disnominiId = $('#hidden_disnomini_id').val();
        var data = $(this).data();

        $.ajax({
            url: '{{ route('verify.otp') }}',
            method: 'POST',
            data: {
                otp: otp,
                disnomini_id: disnominiId
            },
            success: function(response) {
                if (response.success) {
                    $.ajax({
                        url: '{{ route('store.vote.data') }}',
                        method: 'POST', 
                        data: {
                            _token: '{{ csrf_token() }}',
                            disnomini_id: disnominiId,
                            votepositiontype: data.votepositiontype,
                            votetype: data.votetype,
                            votingdate: data.votingdate,
                            country: data.country,
                            district: data.district,
                            tehsil: data.tehsil,
                            user_id: '{{ Auth::id() }}'
                        },
                        success: function(storeResponse) {
                            if (storeResponse.success) {
                                $('#otpModal').modal('hide');
                                $('#voteSuccess').modal('show');
                            } else {
                                alert('Failed to cast vote. Please try again.');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Store Vote Data Error:', error);
                            alert('Failed to cast vote. Please try again.');
                        }
                    });
                } else {
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


