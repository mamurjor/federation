{{-- @extends('backend.client')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Add Matromonial</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('matromonial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                               
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">matromonialID.<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="matromonialid"
                                            class="form-control py-3 input_color" placeholder="Enter Id">
                                            @error('matromonialid')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="name"
                                            class="form-control py-3 input_color" placeholder="Enter name">
                                        @error('name')
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
                                        <label for="form-label" class="form-label">gender <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control py-3 input_color" name="gender" id="">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                        @error('gender')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">religion <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control py-3 input_color" name="religion" id="">
                                            @foreach ($religion as $data)
                                                <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('religion')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Marital status <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control py-3 input_color" name="marital" id="">
                                            @foreach ($marital as $data)
                                                <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('marital')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Cast <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control py-3 input_color" name="caste" id="">
                                            @foreach ($cast as $data)
                                                <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('caste')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">height <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="height"
                                            class="form-control py-3 input_color" placeholder="Enter height">
                                        @error('height')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Education <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="education"
                                            class="form-control py-3 input_color" placeholder="Enter Education">
                                        @error('education')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Family details <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="familydetails"
                                            class="form-control py-3 input_color" placeholder="Enter familydetails">
                                        @error('familydetails')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">About me <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control py-3 input_color" name="aboutme" id="" cols="30" rows="10"></textarea>
                                        @error('aboutme')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Buisness desription<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control py-3 input_color" name="buisness_des" id="" cols="30" rows="10"></textarea>
                                        @error('buisness_des')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Partner requirment text<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control py-3 input_color" name="requirment_text" id="" cols="30"
                                            rows="10"></textarea>
                                        @error('requirment_text')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Date of birth <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="dateofbirth"
                                            class="form-control py-3 input_color" placeholder="Enter date of birth">
                                        @error('dateofbirth')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Image<span
                                                class="text-danger">*</span></label>
                                        <input type="file" value="" name="matromonialimage"
                                            class="form-control py-3 input_color" placeholder="Enter ">
                                        @error('matromonialimage')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">occupation<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control py-3 input_color" name="occupation" id="">
                                            @foreach ($occupation as $data)
                                                <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('occupation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Income<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="income"
                                            class="form-control py-3 input_color" placeholder="Enter income">
                                        @error('income')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Age<span
                                                class="text-danger">*</span></label>
                                        <input type="number" value="" name="age"
                                            class="form-control py-3 input_color" placeholder="Enter age">
                                        @error('age')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Partner age range<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="partnerage"
                                            class="form-control py-3 input_color" placeholder="Enter age">
                                        @error('partnerage')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Partner location<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="partnerlocation"
                                            class="form-control py-3 input_color" placeholder="Enter age">
                                        @error('partnerlocation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Partner communication<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="partnercommunication"
                                            class="form-control py-3 input_color" placeholder="Enter age">
                                        @error('partnercommunication')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Partner compatibility<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="" name="partnercompatibility"
                                            class="form-control py-3 input_color" placeholder="Enter age">
                                        @error('partnercompatibility')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Email<span
                                                class="text-danger">*</span></label>
                                        <input type="email" value="" name="email"
                                            class="form-control py-3 input_color" placeholder="Enter email">
                                        @error('email')
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
@endsection --}}
