
  



{{-- otp  modal --}}
<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="text-center otp_img">
            <img src="{{ asset('backend/assets/img/modallogo/key.png') }}" alt="">
          <h1 class="modal-title fs-5 text-dark mt-4" >We send OTP on your Email !</h1>
        </div>
        <div class="modal-body">
            <form id="otpForm" class="mb-5">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="form-label">OTP</label>
                                <input type="text" class="form-control" id="otp" name="otp" required>
                                <input type="hidden" id="hidden_nomini_id" name="nomini_id">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100">Submit OTP</button>
                    </div>
                </div>
            </form>
            <div class="otp_timer d-flex align-items-center gap-3">
                <div class="otp_icon">
                    <i class="fa-solid fa-clock text-danger"></i>
                </div>
                <div class="otp_heading">
                    <h5>Thursday. December 5      12:00pm    -    1:00pm</h5>
                    <p>Vote Type - Final </p>
                </div>
            </div>
        </div>
        
      </div>
    </div>
  </div>
<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="voteSuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content p-3 bg-white">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
            <div class="text-center otp_img mb-3">
                <img src="{{ asset('backend/assets/img/modallogo/alert_img.png') }}" alt="">
            </div>
            <div class="otp_heading text-center">
                <h5>Your Vote successfull.</h5>
                <a href="{{ route('client.dashboard') }}" class="btn btn-primary mt-3">Go to Home</a>
            </div>
            
        </div>
        
      </div>
    </div>
  </div>



  <div class="modal fade" id="voteOver" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content p-3 bg-white">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
            <div class="text-center otp_img mb-3">
                {{-- <img src="{{ asset('backend/assets/img/modallogo/alert_img.png') }}" alt=""> --}}
            </div>
            <div class="otp_heading text-center">
                <h5>Sorry. You have already voted for this nominee.</h5>
                {{-- <a href="{{ route('client.dashboard') }}" class="btn btn-primary mt-3">Go to Home</a> --}}
            </div>
            
        </div>
        
      </div>
    </div>
  </div>
  <div class="modal fade" id="voteFailed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content p-3 bg-white">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
            <div class="text-center otp_img mb-3">
                {{-- <img src="{{ asset('backend/assets/img/modallogo/alert_img.png') }}" alt=""> --}}
            </div>
            <div class="otp_heading text-center">
                <h5>Invalid OTP. Please input valid OTP.</h5>
                {{-- <a href="{{ route('client.dashboard') }}" class="btn btn-primary mt-3">Go to Home</a> --}}
            </div>
            
        </div>
        
      </div>
    </div>
  </div>
  

  

