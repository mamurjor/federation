@extends('backend.dash')

@section('main-content')
    @php

    @endphp

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><a href="{{ route('missionsection.index') }}"> List </a></h5>


                </div>
                <div class="card-body">
                    <form action="{{ route('missionsection.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @php
                            $data = json_decode($missionSections, true);

                        @endphp


                        <div class="row">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">title. <span
                                                    class="text-danger">*</span></label>

                                            <input type="text" value="{{ $data['id'] }}" name="id"
                                                class="form-control py-3 input_color" placeholder="Enter Name">
                                            <input type="text" value="{{ $data['title'] }}" name="title"
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
                                            <input type="text" value="{{ $data['slogan'] }}" name="slogan"
                                                class="form-control py-3 input_color" placeholder="Enter slogan">
                                            @error('slogan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Button One Text <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" value="{{ $data['button_one_text'] }}"
                                                name="button_one_text" class="form-control py-3 input_color"
                                                placeholder="Enter button one text">
                                            @error('button_one_text')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Button One Url <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" value="{{ $data['button_one_url'] }}"
                                                name="button_one_url" class="form-control py-3 input_color"
                                                placeholder="Enter button one url">
                                            @error('button_one_url')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Button Two Text <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" value="{{ $data['button_two_text'] }}"
                                                name="button_two_text" class="form-control py-3 input_color"
                                                placeholder="Enter button Two text">
                                            @error('button_two_text')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Button Two Url <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" value="{{ $data['button_two_url'] }}"
                                                name="button_two_url" class="form-control py-3 input_color"
                                                placeholder="Enter button Two url">
                                            @error('button_two_url')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label"> description<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" value="{{ $data['description'] }}  " name="description"
                                                class="form-control py-3 input_color" placeholder="description">
                                            @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <div class="form-group">

                                            <img src=" <?php echo url('/') . $data['imageurl']; ?>" alt="tst">
                                            <label for="form-label" class="form-label"> Slider Image Upload <span
                                                    class="text-danger">*</span></label>
                                            <input type="file" name="sliderimage"
                                                class="form-control py-3 input_color" placeholder="Enter button Two url">
                                            @error('sliderimage')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                </div>
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
