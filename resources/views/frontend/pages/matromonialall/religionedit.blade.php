@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><a href="{{ route('matromonialreligion.index') }}"> List </a></h5>

                </div>
                <div class="card-body">
                    <form action="{{ route('matromonialreligion.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Name. <span
                                                class="text-danger">*</span></label>
                                        <input type="hidden" value="{{ $matromonialreligion->id }}" name="id"
                                            class="form-control py-3 input_color" placeholder="Enter Name">
                                        <input type="text" value="{{ $matromonialreligion->name }}" name="name"
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
                                        <input type="text" value="{{ $matromonialreligion->code }}" name="code"
                                            class="form-control py-3 input_color" placeholder="Enter Code">
                                            @error('code')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <button type="submit" class="py-4 w-100 border-0 resgiter_button rounded">Update<i
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