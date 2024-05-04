@extends('backend.client')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><a href=""> Add classified </a></h5>
                    <h5 class="mb-0"><a href="{{ route('classified.index') }}"> Classified list </a></h5>

                </div>
                <div class="card-body">
                    <form action="{{ route('classified.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Ad ID. <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="adid"
                                            class="form-control py-3 input_color" placeholder="Enter Id">
                                        @error('adid')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Title <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="title"
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
                                        <input type="text" value="" name="description"
                                            class="form-control py-3 input_color" placeholder="Enter description">
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
                                            @foreach ($category as $data)
                                                <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach

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
                                        <input type="text" value="" name="price"
                                            class="form-control py-3 input_color" placeholder="Enter price">
                                        @error('price')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">country<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="country"
                                            class="form-control py-3 input_color" placeholder="Enter price">
                                        @error('country')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Location <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="location"
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
                                        <input type="email" value="" name="email"
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
                                        <input type="text" value="" name="dateposted"
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
                                        <input type="text" value="" name="expirationdate"
                                            class="form-control py-3 input_color" placeholder="Enter expiration date">
                                        @error('expirationdate')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Image<span
                                                class="text-danger">*</span></label>
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
                                        <input type="text" value="" name="condition"
                                            class="form-control py-3 input_color" placeholder="Enter condition">
                                        @error('condition')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Keywords<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="keywords"
                                            class="form-control py-3 input_color" placeholder="Enter keywords">
                                        @error('keywords')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <button type="submit"
                                            class="py-4 w-100 border-0 resgiter_button rounded">Create<i
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
