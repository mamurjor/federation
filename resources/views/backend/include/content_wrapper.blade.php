@extends('backend.client_main')
@section('main-content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="card m-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mt-3"> All Vote</h4>
            </div>
            <div class="p-2 table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL No. </th>
                            <th>Tehsil Name</th>
                            <th>Votetype</th>
                            <th>Action </th>
    
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
    
    
    
                        @foreach ($vote as $index => $singlevalue)
                            <tr>
                                <td>
    
                                    <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                                </td>
                                <td>{{ $singlevalue->tehsil }}</td>
    
                                <td><span class="badge bg-label-success me-1">{{ $singlevalue->votetype }}</span></td>
                                <td>
                                    <div class="dropdown">
                                       
                                        <a class="btn btn-primary" href="{{ route('nomini.form',$singlevalue->id) }}"><i
                                                class="ti ti-pencil me-2"></i> Apply</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
       
        <!-- / Content -->

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
