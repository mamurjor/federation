@extends('backend.client')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Add Classified</h5>
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
                                {{-- <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Division<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="Division"
                                            class="form-control py-3 input_color" placeholder="Enter price">
                                        @error('Division')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div> --}}
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
                                        <label for="form-label" class="form-label">Video url <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="video"
                                            class="form-control py-3 input_color" placeholder="Enter video url">
                                        @error('video')
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
                                        <label for="form-label" class="form-label">Multiple Image for singlaAds page<span
                                                class="text-danger">*</span></label>
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
                                    <div class="mt-3 text-end">
                                        <button type="submit"
                                            class="btn btn-primary waves-effect waves-light">Create<i
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
