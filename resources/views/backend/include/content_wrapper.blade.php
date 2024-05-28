@extends('backend.client_main')
@section('main-content')
    <style>
        .apply_form_border {
            border-bottom: 1px solid #ddd;
            padding-bottom: 30px;
        }

        .apply_input_color {
            background: #dddddd40;

            padding: 10px 10px;
            margin-top: 10px
        }
    </style>

    <div class="content-wrapper">
        {{-- {{ $filters }} --}}
        <!-- Content -->

        <div class="card m-4">
            <div class="card-header d-flex justify-content-between align-items-center border-1 pb-0">
                <h4 class="fw-600"> All District Vote</h4>
            </div>
            <div class="p-2 table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-primary table-border-bottom-0">
                        <tr>
                            <th> <input type="checkbox" class="client_checkbx"></th>
                            <th>SL No.</th>
                            <th>District Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Vote Type</th>
                            <th>Action </th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($disvote as $index => $singledis)
                            <tr>
                                <td>
                                    <input type="checkbox" name="checkbox">
                                </td>
                                <td>
                                    <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                                </td>
                                <td><i class="fa-solid fa-location-dot text-primary me-1"></i>{{ $singledis->district }}
                                </td>
                                <td><i class="fa-solid fa-calendar-days text-warning me-1"></i>{{ $singledis->votingdate }}
                                </td>
                                <td><i class="fa-solid fa-clock text-danger me-1"></i>{{ $singledis->tehsil }}</td>

                                <td><i class="fa-solid fa-trophy text-success me-1"></i><span
                                        class="badge bg-label-success me-1"> {{ $singledis->votetype }}</span></td>
                                <td>
                                    <div class="dropdown">

                                        {{-- <a class="btn btn-primary"
                                            href="{{ route('nomini.form', $singlevalue->id) }}"><i class=" me-2"></i>
                                            Apply</a> --}}
                                        <a href="{{ route('disvote.details') }}">
                                            <h4 class="mt-3 btn btn-primary">Vote now</h4>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card m-4">
            <div class="card-header d-flex justify-content-between align-items-center border-1 pb-0">
                <h4 class="fw-600"> All Vote</h4>
            </div>
            <div class="p-2 table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-primary table-border-bottom-0">
                        <tr>
                            <th> <input type="checkbox" class="client_checkbx"></th>
                            <th>SL No.</th>
                            <th>Tehsil Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Vote Type</th>
                            <th>Action </th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($vote as $index => $singlevalue)
                            <tr>
                                <td>
                                    <input type="checkbox" name="checkbox">
                                </td>
                                <td>
                                    <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                                </td>
                                <td><i class="fa-solid fa-location-dot text-primary me-1"></i>{{ $singlevalue->tehsil }}
                                </td>
                                <td><i class="fa-solid fa-calendar-days text-warning me-1"></i>{{ $singlevalue->tehsil }}
                                </td>
                                <td><i class="fa-solid fa-clock text-danger me-1"></i>{{ $singlevalue->tehsil }}</td>

                                <td><i class="fa-solid fa-trophy text-success me-1"></i><span
                                        class="badge bg-label-success me-1"> {{ $singlevalue->votetype }}</span></td>
                                <td>
                                    <div class="dropdown">

                                        {{-- <a class="btn btn-primary"
                                            href="{{ route('nomini.form', $singlevalue->id) }}"><i class=" me-2"></i>
                                            Apply</a> --}}
                                        <a href="{{ route('vote.details') }}">
                                            <h4 class="mt-3 btn btn-primary">Vote now</h4>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card m-4">
            <div class="card-header d-flex justify-content-between align-items-center border-1 pb-0">
                <h4 class="fw-600"> All Wings Vote</h4>
            </div>
            <div class="p-2 table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-primary table-border-bottom-0">
                        <tr>
                            <th> <input type="checkbox" class="client_checkbx"></th>
                            <th>SL No.</th>
                            <th>Type Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Vote Type</th>
                            <th>Action </th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($wingsvote as $index => $singlewings)
                            <tr>
                                <td>
                                    <input type="checkbox" name="checkbox">
                                </td>
                                <td>
                                    <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                                </td>
                                <td><i class="fa-solid fa-location-dot text-primary me-1"></i>{{ $singlewings->type }}
                                </td>
                                <td><i class="fa-solid fa-calendar-days text-warning me-1"></i>{{ $singlewings->votingdate }}
                                </td>
                                <td><i class="fa-solid fa-clock text-danger me-1"></i>{{ $singlewings->tehsil }}</td>

                                <td><i class="fa-solid fa-trophy text-success me-1"></i><span
                                        class="badge bg-label-success me-1"> {{ $singlewings->votetype }}</span></td>
                                <td>
                                    <div class="dropdown">

                                        {{-- <a class="btn btn-primary"
                                            href="{{ route('nomini.form', $singlevalue->id) }}"><i class=" me-2"></i>
                                            Apply</a> --}}
                                        <a href="{{ route('wingsvote.details') }}">
                                            <h4 class="mt-3 btn btn-primary">Vote now</h4>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        {{-- <div class="m-4">
            <h5>Voting system</h5>
        </div> --}}


        <!-- / Content -->
        @include('backend.applymodal.apply')
        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
                <div
                    class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                    <div>
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by
                        <a href="https://pixinvent.com" target="_blank"
                            class="footer-link text-primary fw-medium">Pixinvent</a>
                    </div>
                    <div class="d-none d-lg-inline-block">
                        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                            target="_blank">License</a>
                        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More
                            Themes</a>

                        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank"
                            class="footer-link me-4">Documentation</a>

                        <a href="https://pixinvent.ticksy.com/" target="_blank"
                            class="footer-link d-none d-sm-inline-block">Support</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection
