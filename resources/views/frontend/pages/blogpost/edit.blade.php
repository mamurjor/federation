@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Add Blog Post</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('blogpost.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Category. <span
                                                class="text-danger">*</span></label>
                                        <select name="category_id" id="" class="form-select">
                                            
                                            <option value="">Select Categoy</option>
                                            
                                            @foreach ($categorys as $data)
                                                <option value="{{ $data->id }}" {{ $data->id == $blogpost->category_id ? 'selected' : '' }} >{{ $data->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('category_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Title. <span
                                                class="text-danger">*</span></label>
                                        <input type="hidden" value="{{ $blogpost->id }}" name="id"
                                            class="form-control py-3 input_color" placeholder="Enter title">
                                        <input type="text" value="{{ $blogpost->title }}" name="title"
                                            class="form-control py-3 input_color" placeholder="Enter title">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Description. <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $blogpost->description }}" name="description"
                                            class="form-control py-3 input_color" placeholder="Enter description">
                                        @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Content. <span
                                                class="text-danger">*</span></label>
                                        <textarea name="content" id="summernote">{{ $blogpost->content }}</textarea>
                                    </div>
                                </div>


                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Image. <span
                                                class="text-danger">*</span></label>
                                        <img height="100" width="100" class="m-1" src="{{ $blogpost->image }}" alt="">
                                        <input type="file" value="" name="blogimage"
                                            class="form-control py-3 input_color" placeholder="Enter Image">
                                        @error('blogimage')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>




                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Status<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control py-3 input_color" name="status" id="">
                                            <option value="0" {{ $blogpost->status == 0 ? 'selected' : '' }} >Pending</option>
                                            <option value="1" {{ $blogpost->status == 1 ? 'selected' : '' }}>Active</option>
                                        </select>
                                        @error('status')
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
