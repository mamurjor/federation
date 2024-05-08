@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Add Slider Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('sliersection.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf



                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">title. <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="title"
                                            class="form-control py-3 input_color" placeholder="Enter Name">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">slogan <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="slogan"
                                            class="form-control py-3 input_color" placeholder="Enter slogan">
                                        @error('slogan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Button Text <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="button_text"
                                            class="form-control py-3 input_color" placeholder="Enter button one text">
                                        @error('button_text')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Button Url <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="button_url"
                                            class="form-control py-3 input_color" placeholder="Enter button one url">
                                        @error('button_url')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-12">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"> Slider Image Upload <span
                                                class="text-danger">*</span></label>
                                        <input type="file" value="" name="sliderimage"
                                            class="form-control py-3 input_color" placeholder="Enter button Two url">
                                        @error('sliderimage')
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
