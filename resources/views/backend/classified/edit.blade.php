@extends('backend.client')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Edit Classified</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('classified.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        {{-- <label for="form-label" class="form-label">Ad ID. <span class="text-danger">*</span></label> --}}
                                        <input type="hidden" value="{{ $classified->adid }}" name="adid"
                                            class="form-control py-3 input_color" placeholder="Enter Id">
                                        @error('adid')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="hidden" value="{{ $classified->id }}" name="id"
                                            class="form-control py-3 input_color" placeholder="Enter Id">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Title <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $classified->title }}" name="title"
                                            class="form-control py-3 input_color" placeholder="Enter title">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Description <span
                                                class="text-danger">*</span></label>
                                        <input type="text"
                                            value="{{ $classified->description ? $classified->description : 'no data' }}"
                                            name="description" class="form-control py-3 input_color"
                                            placeholder="Enter description">
                                        @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Category <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control py-3 input_color" name="category" id="">
                                            <option value="{{ $classified->category }}" selected>dfgdg</option>
                                            <option value="fgfd">dfgdg</option>
                                            <option value="fgfd">dfgdg</option>
                                        </select>
                                        @error('category')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Price <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $classified->price }}" name="price"
                                            class="form-control py-3 input_color" placeholder="Enter price">
                                        @error('price')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Location <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $classified->location }}" name="location"
                                            class="form-control py-3 input_color" placeholder="Enter location">
                                        @error('location')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Video url <span
                                                class="text-danger">*</span></label>
                                        <input type="text"
                                            value="{{ $classified->video ? $classified->video : 'no data' }}"
                                            name="video" class="form-control py-3 input_color"
                                            placeholder="Enter video url">
                                        @error('video')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" value="{{ $classified->email }}" name="email"
                                            class="form-control py-3 input_color" placeholder="Enter email">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Date posted <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $classified->dateposted }}" name="dateposted"
                                            class="form-control py-3 input_color" placeholder="Enter dateposted">
                                        @error('dateposted')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Expiration Date<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $classified->expiredate }}"
                                            name="expirationdate" class="form-control py-3 input_color"
                                            placeholder="Enter expiration date">
                                        @error('expiredate')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Image<span
                                                class="text-danger">*</span></label>
                                        <img height="100" width="100" src="<?php echo url('/') . $classified->image; ?>" alt="">
                                        <input type="file" value="" name="classifiedimage"
                                            class="form-control py-3 input_color" placeholder="Enter ">
                                        @error('classifiedimage')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Multiple Image for singlaAds page<span
                                                class="text-danger">*</span></label>
                                        {{-- @php
                                            $classified->multipleimage = json_decode($classified->multipleimage);
                                        @endphp

                                        {{ $classified->multipleimage }}
                                        <div>
                                            <img src=" {{ $classified->multipleimage[0] }}">
                                            <img src=" {{ $classified->multipleimage[1] }}">
                                            <img src=" {{ $classified->multipleimage[2] }}">
                                            <img src=" {{ $classified->multipleimage[3] }}">
                                            <img src=" {{ $classified->multipleimage[4] }}">
                                        </div> --}}

                                        <input type="file" multiple value="" name="classifiedimages[]"
                                            class="form-control py-3 input_color" placeholder="Enter ">
                                        @error('classifiedimage')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Condition<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $classified->condition }}" name="condition"
                                            class="form-control py-3 input_color" placeholder="Enter condition">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Keywords<span
                                                class="text-danger">*</span></label>
                                        <input type="text"
                                            value="{{ $classified->keyword ? $classified->keyword : 'no data' }}"
                                            name="keywords" class="form-control py-3 input_color"
                                            placeholder="Enter keywords">
                                        @error('keywords')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="mt-3 text-end">
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
