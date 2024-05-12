@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Edit Blog category</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('blogcategories.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Name. <span
                                                class="text-danger">*</span></label>
                                        <input type="hidden" value="{{ $blogcategory->id }}" name="id"
                                            class="form-control py-3 input_color" placeholder="Enter Name">
                                        <input type="text" value="{{ $blogcategory->name }}" name="name"
                                            class="form-control py-3 input_color" placeholder="Enter Name">
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Status. <span
                                                class="text-danger">*</span></label>
                                                <select class="form-select py-2 input_color" name="status" id="">
                                                    <option value="active" {{ $blogcategory->status == 'active' ? 'selected' : '' }}>Active</option>
                                                    <option value="pending"  {{ $blogcategory->status == 'pending' ? 'selected' : '' }}>Pending</option>
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
