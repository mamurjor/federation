@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Add District</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('district.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Name. <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="name"
                                            class="form-control py-3 input_color" placeholder="Enter Name">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Code <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="code"
                                            class="form-control py-3 input_color" placeholder="Enter Code">
                                        @error('code')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Division Of Residence <span
                                                class="text-danger">*</span></label>

                                        <select name="Division" id="division" class="form-control input_color py-3">
                                            <option value="" selected>Select Division of Residence</option>
                                            @foreach ($divisions as $index => $singlevalue)
                                                <option value="{{ $singlevalue->name }}"> {{ $singlevalue->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                        @error('Division')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>




                                <div class="col-md-12">
                                    <div class="mt-3 text-end">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Create<i
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
