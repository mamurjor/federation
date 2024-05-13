@extends('backend.dash')

@section('main-content')
    @php

    @endphp

    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Edit Cast</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('cast.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @php
                            $data = json_decode($cast, true);
                        @endphp



                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Name. <span
                                                class="text-danger">*</span></label>
                                        <input type="hidden" value="{{ $data['id'] }}" name="id"
                                            class="form-control py-3 input_color" placeholder="35220 - 1506373 -1">
                                        <input type="text" value="{{ $data['name'] }}" name="name"
                                            class="form-control py-3 input_color" placeholder="35220 - 1506373 -1">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Code <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $data['code'] }}" name="code"
                                            class="form-control py-3 input_color" placeholder="35220 - 1506373 -1">
                                        @error('code')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Content. <span
                                                class="text-danger">*</span></label>
                                        <textarea name="content" id="summernote">{{ $data['content'] }}</textarea>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Image <span
                                                class="text-danger">*</span></label>
                                        <img height="70" width="70" src="{{ $data['image'] }} " alt="">
                                        <input type="file" value="" name="castimage"
                                            class="form-control py-3 input_color" placeholder="Enter Code">
                                        @error('castimage')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="my-3">
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


@push('scripts')
    <script>
        $('#summernote').summernote({
            placeholder: 'Enter content',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
