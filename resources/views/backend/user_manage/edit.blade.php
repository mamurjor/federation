{{-- @extends('backend.client')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Edit Matromonial</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('matromonial.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="form-group">
                                      
                                        <input type="hidden" value="{{ $matromonial->user_id }}" name="userid"
                                            class="form-control py-3 input_color" placeholder="Enter Id">
                                        <input type="hidden" value="{{ $matromonial->id }}" name="id"
                                            class="form-control py-3 input_color" placeholder="Enter Id">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">matromonialID.<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->matromonialid }}" name="matromonialid"
                                            class="form-control py-3 input_color" placeholder="Enter Id">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->name }}" name="name"
                                            class="form-control py-3 input_color" placeholder="Enter name">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Location <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->location }}" name="location"
                                            class="form-control py-3 input_color" placeholder="Enter location">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">gender <span
                                                class="text-danger">*</span></label>
                                       
                                        <select class="form-control py-3 input_color" name="gender" id="">
                                            <option value="{{ $matromonial->gender }}" selected>{{ $matromonial->gender }}
                                            </option>

                                            <option value="fgfd">dfgdg</option>
                                            <option value="fgfd">dfgdg</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">religion <span
                                                class="text-danger">*</span></label>
                                        
                                        <select class="form-control py-3 input_color" name="religion" id="">
                                            <option value="{{ $matromonial->religion }}" selected>
                                                {{ $matromonial->religion }}</option>
                                            <option value="fgfd">dfgdg</option>
                                            <option value="fgfd">dfgdg</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Marital status <span
                                                class="text-danger">*</span></label>
                                       
                                        <select class="form-control py-3 input_color" name="marital" id="">
                                            <option value="{{ $matromonial->marital }}" selected>
                                                {{ $matromonial->gender }}</option>
                                            <option value="fgfd">dfgdg</option>
                                            <option value="fgfd">dfgdg</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Caste <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->caste }}" name="caste"
                                            class="form-control py-3 input_color" placeholder="Enter caste">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">height <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->height }}" name="height"
                                            class="form-control py-3 input_color" placeholder="Enter height">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Education <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->education }}" name="education"
                                            class="form-control py-3 input_color" placeholder="Enter Education">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Family details <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->familydetails }}"
                                            name="familydetails" class="form-control py-3 input_color"
                                            placeholder="Enter familydetails">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">About me <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control py-3 input_color" name="aboutme" id="" cols="30" rows="10">
                                                    {!! $matromonial->aboutme !!}
                                                </textarea>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Buisness description <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control py-3 input_color" name="buisness_des" id="" cols="30" rows="10">
                                                    {!! $matromonial->buisness_des !!}
                                                </textarea>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Partner requirment text<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control py-3 input_color" name="requirment_text" id="" cols="30"
                                            rows="10">
                                                    {!! $matromonial->partner_requirment_text !!}
                                                </textarea>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Date of birth <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->dateofbirth }}" name="dateofbirth"
                                            class="form-control py-3 input_color" placeholder="Enter dateposted">
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Image<span
                                                class="text-danger">*</span></label>
                                        <img height="150" width="150" src="<?php echo url('/') . $matromonial->matromonialimage; ?>" alt="">
                                        <input type="file" value="" name="matromonialimage"
                                            class="form-control py-3 input_color" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">occupation<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->occupation }}" name="occupation"
                                            class="form-control py-3 input_color" placeholder="Enter occupation">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Income<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->income }}" name="income"
                                            class="form-control py-3 input_color" placeholder="Enter income">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Age<span
                                                class="text-danger">*</span></label>
                                        <input type="number" value="{{ $matromonial->age }}" name="age"
                                            class="form-control py-3 input_color" placeholder="Enter age">
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Partner age range<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->partner_age_range }}"
                                            name="partnerage" class="form-control py-3 input_color"
                                            placeholder="Enter age">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Partner location<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->partner_location }}"
                                            name="partnerlocation" class="form-control py-3 input_color"
                                            placeholder="Enter age">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Partner communication<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->partner_communication }}"
                                            name="partnercommunication" class="form-control py-3 input_color"
                                            placeholder="Enter age">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Partner compatibility<span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ $matromonial->partner_compatibility }}"
                                            name="partnercompatibility" class="form-control py-3 input_color"
                                            placeholder="Enter age">
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Email<span
                                                class="text-danger">*</span></label>
                                        <input type="email" value="{{ $matromonial->email }}" name="email"
                                            class="form-control py-3 input_color" placeholder="Enter email">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="mt-3 text-end">
                                        <button type="submit"
                                            class="btn btn-primary waves-effect waves-light">Update<i
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
