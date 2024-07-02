<div id="header_topbar" class="header_topbar">
    <!-- place navbar here -->
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-5 col-md-6 col-sm-5 col-lg-5">
                <div class="social_icon">
                    <a href="#" class="bg-white p-2 rounded-circle fw-normal me-2"><i class="<?php
                    
                    if (config('settings.ficon') != null) {
                        echo config('settings.ficon');
                    } else {
                        echo 'fa-brands fa-facebook';
                    }
                    ?>">

                        </i></a>
                    <a href="#" class="bg-white p-2 rounded-circle fw-normal me-2"><i
                            class="<?php
                            
                            if (config('settings.ticon') != null) {
                                echo config('settings.ticon');
                            } else {
                                echo 'fa-brands fa-twitter';
                            }
                            ?>"></i></a>

                    <a href="#" class="bg-white p-2 rounded-circle fw-normal me-2"><i
                            class=" <?php
                            
                            if (config('settings.licon') != null) {
                                echo config('settings.licon');
                            } else {
                                echo 'fa-brands fa-linkedin-in';
                            }
                            ?>"></i></a>

                    <a href="#" class="bg-white p-2 rounded-circle fw-normal"><i
                            class="<?php
                            
                            if (config('settings.yicon') != null) {
                                echo config('settings.yicon');
                            } else {
                                echo 'fa-brands fa-youtube';
                            }
                            ?>"></i></a>
                </div>
            </div>


            <div class="col-md-6 col-sm-7 col-lg-7 d-flex gap-5 justify-content-end align-items-center">
                {{-- 
                <div class="dropdown">
                    <a class="dropdown-toggle" type="button" id="country" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="fa-solid fa-earth-asia text-white me-1 all_flag"></span>
                        <span class="flag_Text">Country</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="country">
                        @foreach ($countries as $index => $singlevalue)
                            <li>
                                <span class="flag_Text_dropdown dropdown-item" data-value="{{ $singlevalue->name }}">{{ $singlevalue->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <span class="text-white">|</span>
                <div class="dropdown">
                    <a class="dropdown-toggle" type="button" id="district" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="flag_Text">District</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="district">
                        <li>
                            <span class="flag_Text_dropdown dropdown-item">No data found</span>
                        </li>
                    </ul>
                </div>
                <span class="text-white">|</span>
                <div class="dropdown">
                    <a class="dropdown-toggle" type="button" id="tehsil" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="flag_Text">Tehsil</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="tehsil">
                        <li>
                            <span class="flag_Text_dropdown dropdown-item">No data found</span>
                        </li>
                    </ul>
                </div> --}}

                <div>
                    {{-- <label for="country">Country:</label> --}}
                    @php
                        // $countries = Country::all();
                        $countries = DB::table('countries')->get();
                        
                    @endphp
                    <select class="dropdown_style" id="country">
                        <option value="">Country</option>
                        @foreach ($countries as $index => $singlevalue)
                            <option value="{{ $singlevalue->name }}">{{ $singlevalue->name }}</option>
                        @endforeach
                    </select>
                </div>
                <span class="text-white">|</span>
                <div>
                    {{-- <label for="district">District:</label> --}}
                    <select class="dropdown_style" id="district">
                        <option value="">District</option>
                    </select>
                </div>
                <span class="text-white">|</span>
                <div>
                    {{-- <label for="tehsil">Tehsil:</label> --}}
                    <select class="dropdown_style" id="tehsil">
                        <option value="">Tehsil</option>
                    </select>
                </div>



                <span class="text-white">|</span>
                <div class="dropdown">
                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false"><span class="flag-icon flag-icon-us me-1 all_flag"></span> <span
                            class="flag_Text">English</span></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item active" href="#"><span
                                    class="flag-icon flag-icon-us me-1 all_flag"></span> <span
                                    class="flag_Text_dropdown">English</span></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><span
                                    class="flag-icon flag-icon-fr me-1 all_flag"></span>
                                <span class="flag_Text_dropdown">French</span></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><span
                                    class="flag-icon flag-icon-es me-1 all_flag"></span>
                                <span class="flag_Text_dropdown">Spanich</span></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><span
                                    class="flag-icon flag-icon-sa me-1 all_flag"></span>
                                <span class="flag_Text_dropdown">Arabic</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light py-4">
                <div class="container-fluid">
                    <img class="header_logo" src="{{ config('settings.hlogo') }}" alt="logo" style="width: 8%;">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link" href="{{ route('about.us') }}">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item ms-2">
                                <a class="nav-link" aria-current="page" href="{{ route('member') }}"> Members</a>
                            </li>

                            <li class="nav-item ms-2">
                                <a class="nav-link" aria-current="page" href="#">Wings</a>
                            </li>

                            <li class="nav-item dropdown ms-2">
                                <a class="nav-link" href="{{ route('matromonial') }}" id="" role="button">
                                    Matrimonial
                                </a>
                            </li>

                            <li class="nav-item ms-2">
                                <a class="nav-link" href="{{ route('classified') }}">ClassifiedAds</a>
                            </li>

                            <li class="nav-item ms-2">
                                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                            </li>

                            <li class="nav-item ms-2">
                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                        @guest
                            <div class="common_button">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="Matrimonial" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-user me-2"></i>Account</a>


                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item jut_login mb-2" href="{{ route('login') }}">Login</a>
                                        </li>
                                        <hr class="my-1">
                                        <li><a class="dropdown-item jut_login"
                                                href="{{ route('user.register') }}">Registration</a>
                                        </li>
                                    </ul>
                                </li>

                            </div>
                        @endguest


                        @auth
                            <div class="common_button">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="Matrimonial" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-user me-2"></i>Account</a>


                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item mb-3 jut_login"
                                                href="{{ auth()->user()->role_id == 1 ? route('admin.dashboard') : route('client.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li><a class="dropdown-item" href="">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button class="nav-link jut_login dropdown-item"
                                                        type="submit">Logout</button>
                                                </form>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </div>

                        @endauth
                    </div>

                </div>
            </nav>

        </div>
    </div>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // When a country is selected
        $("#country").change(function() {
            var country = $(this).val();

            $.ajax({
                url: '{{ route('tehsil.getdistrict', ':country') }}'.replace(':country',
                    country),
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#district').empty().append(
                        '<option value="">Select a district</option>');
                    $('#tehsil').empty().append(
                    '<option value="">Select a tehsil</option>'); // Clear tehsil dropdown

                    if ($.isEmptyObject(response)) {
                        $('#district').append('<option value="">No data found</option>');
                    } else {
                        $.each(response, function(id, data) {
                            $('#district').append('<option value="' + data.name +
                                '">' + data.name + '</option>');
                        });
                    }
                }
            });
        });

        // When a district is selected
        $("#district").change(function() {
            var district = $(this).val();

            $.ajax({
                url: '{{ route('tehsil.gettehsil', ':district') }}'.replace(':district',
                    district),
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#tehsil').empty().append(
                    '<option value="">Select a tehsil</option>');

                    if ($.isEmptyObject(response)) {
                        $('#tehsil').append('<option value="">No data found</option>');
                    } else {
                        $.each(response, function(id, data) {
                            $('#tehsil').append('<option value="' + data.name +
                                '">' + data.name + '</option>');
                        });
                    }
                }
            });
        });

        $("#tehsil").change(function() {
        var tehsil = $(this).val();
        // alert(tehsil)
        if (tehsil) {
            window.location.href = '{{ route('tehsil.show', ':tehsil') }}'.replace(':tehsil', tehsil);
        }
    });
    });
</script>
