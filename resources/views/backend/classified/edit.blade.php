@extends('backend.client')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><a href=""> Edit classified </a></h5>
                    <h5 class="mb-0"><a href="{{ route('classified.index') }}"> Classified list </a></h5>

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
                                        <img height="150" width="150" src="<?php echo url('/') . $classified->image; ?>" alt="">
                                        <input type="file" value="" name="classifiedimage"
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
                                    <div class="mb-3">
                                        <button type="submit"
                                            class="py-4 w-100 border-0 resgiter_button rounded">Update<i
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
