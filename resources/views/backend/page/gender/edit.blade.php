@extends('backend.dash')

@section('main-content')

@php




@endphp

    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><a href="{{ route('Division.index') }}"> List </a></h5>


                </div>
                <div class="card-body">
                    <form action="{{ route('gender.update') }}" method="POST">
                        @csrf
                       
                        @php
                            $data = json_decode($genders, true);                           

                        @endphp
                     

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Name. <span
                                                class="text-danger">*</span></label>
                                                <input type="hidden" value="{{ $data['id']  }}" name="id"
                                            class="form-control py-3 input_color" placeholder="35220 - 1506373 -1">
                                        <input type="text" value="{{ $data['name']  }}" name="name"
                                            class="form-control py-3 input_color" placeholder="35220 - 1506373 -1">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Code <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $data['code']  }}" name="code"
                                            class="form-control py-3 input_color" placeholder="35220 - 1506373 -1">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update<i
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
