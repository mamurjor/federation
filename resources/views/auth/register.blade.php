@extends('layouts.front')
@section('title', $title)
@section('content')

    <main>
        <section id="login_registration_section" class="registration_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="register_main_bg">
                            <div class="common_heading text-center">
                                <img src="./img/registration_page/res_logo.png" alt="">
                                <h2 class="fw-bold mb-3 mt-3 text-black">Create An Account</h2>
                                <div class="row align-items-center mb-5">
                                    <div class="col-md-4"><img src="{{ asset('../../../public/frontend/assets/img/home_page/our_misson_section/rightimg.png') }}" class="p_leftRight_image"
                                             alt=""></div>
                                             {{-- src="./img/home_page/our_misson_section/rightimg.png" --}}
                                    <div class="col-md-4">
                                        <p class="fw-normal text-black">Setup a new account in a minute.</p>
                                    </div>
                                    <div class="col-md-4"><img class="p_leftRight_image"
                                        src="{{ asset('../../../public/frontend/assets/img/home_page/our_misson_section/leftimg.png') }}" alt=""></div>
                                </div>
                            </div>


                            @if (Session::has('success'))
                                <div class="text-success fw-bold my-2 text-center">
                                    {{-- <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> --}}
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif


                            <form action="{{ route('user.register.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">CNIC No. <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="cnic_no" name="cnic_no"
                                                    class="form-control py-3 input_color" placeholder="35220 - 1506373 -1">
                                            </div>
                                            @error('cnic_no')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">First Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="fname" class="form-control py-3 input_color"
                                                    placeholder="Write your First name">
                                                @error('fname')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Middle Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="mname" class="form-control py-3 input_color"
                                                    placeholder="Write your Middle Name">
                                                @error('mname')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Last Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="lname" class="form-control py-3 input_color"
                                                    placeholder="Write your last name">
                                                @error('lname')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">District <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" readonly name="district" id="district" value=""
                                                    class="form-control dis py-3 input_color" placeholder="">
                                                @error('district')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Tehsil <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" readonly name="tehsil" id="tehsil" value=""
                                                    class="form-control teh py-3 input_color" placeholder="">
                                                @error('tehsil')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Gender <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" readonly name="gender" id="gender"
                                                    value="" class="form-control py-3 input_color" placeholder="">
                                                @error('gender')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">CAST <span
                                                        class="text-danger">*</span></label>
                                                <select name="cast" id=""
                                                    class="form-control input_color py-3">
                                                    <option value="">Select cast</option>
                                                    @foreach ($cast as $index => $singlevalue)
                                                        <option value="{{ $singlevalue->name }}"> {{ $singlevalue->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                @error('cast')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Your Profession <span
                                                        class="text-danger">*</span></label>
                                                <select name="profession" id="your_profession"
                                                    class="form-control input_color py-3">
                                                    <option value="">Select Profession</option>
                                                    @foreach ($professions as $index => $singlevalue)
                                                        <option value="{{ $singlevalue->name }}">
                                                            {{ $singlevalue->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('profession')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Division Of Residence <span
                                                        class="text-danger">*</span></label>

                                                <select name="division" id="division"
                                                    class="form-control input_color py-3">
                                                    <option value="">Select Division of Residence</option>
                                                    @foreach ($divisions as $index => $singlevalue)
                                                        <option value="{{ $singlevalue->name }}">
                                                            {{ $singlevalue->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                @error('division')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Address Line 1 <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="address_one"
                                                    class="form-control py-3 input_color" placeholder="Address Line 1">
                                                @error('address_one')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Address Line 2 <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="address_two"
                                                    class="form-control py-3 input_color" placeholder="Address Line 2">
                                                @error('address_two')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Your City <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="your_city"
                                                    class="form-control py-3 input_color" placeholder="Your City">
                                                @error('your_city')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Phone No <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="phone"
                                                    class="form-control py-3 input_color" placeholder="Phone No">
                                                @error('phone')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="email"
                                                    class="form-control py-3 input_color" placeholder="Write your Email">
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Password <span
                                                        class="text-danger">*</span></label>
                                                <input type="password" name="password"
                                                    class="form-control py-3 input_color" placeholder="#######">
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Confirm Password <span
                                                        class="text-danger">*</span></label>
                                                <input type="password" name="password_confirmation"
                                                    class="form-control py-3 input_color" placeholder="#######">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group align-items-center">
                                                <input name="agree" class="form-check-input p-3" type="checkbox"
                                                    value="" id="flexCheckChecked">
                                                <label class="form-check-label pt-2" for="flexCheckChecked">
                                                    I hereby accept the <span>Terms and conditions</span>
                                                </label>
                                                @error('agree')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Register<i
                                                    class="fa-solid fa-circle-plus ms-2"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <div class="row align-items-center mb-3 mt-4">
                                <div class="col-md-5"><img class="p_leftRight_image"
                                        src="./img/registration_page/res_right.png" alt=""></div>
                                <div class="col-md-2">
                                    <p class="fw-normal text-danger text-center img_mid_text">Or Login With</p>
                                </div>
                                <div class="col-md-5"><img class="p_leftRight_image"
                                        src="./img/registration_page/res_left.png" alt=""></div>
                            </div>
                            <h6 class="text-center have_account">Don't have an account? <a href="#">Login here</a>
                            </h6>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $("#cnic_no").on('input', function() {
            var cnic_no = $('#cnic_no').val();
            var length = cnic_no.length;

            // console.log(cnic_no);

            // Check for district code (length >= 2 because substr starts at index 1)
            if (length >= 2) {
                var districtcode = cnic_no.substr(1, 1);
                var url = '{{ route('getdistrictbycnic', ':cnic_no') }}';
                url = url.replace(':cnic_no', districtcode);

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('.dis').val(response.district);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            // Check for tehsil code (length >= 3 because substr starts at index 2)
            if (length >= 3) {
                var tehsilcode = cnic_no.substr(2, 1);
                var url = '{{ route('gettehsilbycnic', ':cnic_no') }}';
                url = url.replace(':cnic_no', tehsilcode);

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('.teh').val(response.tehsil);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            // Check for gender code (length is enough to determine gender)
            if (length >= 13) {
                var gendercode = cnic_no.substr(length - 1, 1);
                var url = '{{ route('getgenderbycnic', ':cnic_no') }}';
                url = url.replace(':cnic_no', gendercode);

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response);
                        $('#gender').val(response.gender);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
</script>
