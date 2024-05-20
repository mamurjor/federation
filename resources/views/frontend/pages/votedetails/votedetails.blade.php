@extends('backend.client')
@section('main-content')
    <div class="m-5 d-flex gap-5">
        @foreach ($nomini_list as $nomini)
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
                        data-country="{{ $nomini->country }}"
                        data-district="{{ $nomini->district }}"
                        data-tehsil="{{ $nomini->tehsil }}"
                    >Vote</button>
                </div>
            </div>
        @endforeach
    </div>

    <!-- OTP Modal -->
    <div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="otpModalLabel">Enter OTP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="otpForm">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="otp">OTP</label>
                            <input type="text" class="form-control" id="otp" name="otp" required>
                            <input type="hidden" id="hidden_nomini_id" name="nomini_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit OTP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

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
            var country = $(this).data('country');
            var district = $(this).data('district');
            var tehsil = $(this).data('tehsil');

            $.ajax({
                url: '{{ route('send.otp') }}',
                method: 'POST',
                data: {
                    nomini_id: nominiId,
                    email: email
                },
                success: function(response) {
                    console.log('Response:', response);
                    if (response.success) {
                        $('#otpModal').modal('show');
                        $('#hidden_nomini_id').val(nominiId);
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
                    console.log('Verify OTP Response:', response);
                    if (response.success) {
                        alert('OTP verified successfully!');
                        // Submit the data to store
                        $.ajax({
                            url: '{{ route('store.vote.data') }}',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                nomini_id: nominiId,
                                votepositiontype: data.votepositiontype,
                                votetype: data.votetype,
                                votingdate: data.votingdate,
                                country: data.country,
                                district: data.district,
                                tehsil: data.tehsil,
                                user_id: '{{ Auth::id() }}' // Add the user_id here
                            },
                            success: function(storeResponse) {
                                console.log('Store Vote Data Response:', storeResponse);
                                if (storeResponse.success) {
                                    alert('Vote cast successfully!');
                                    $('#otpModal').modal('hide');
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
                        alert('Invalid OTP. Please try again.');
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


