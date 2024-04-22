@extends('backend.client')

@section('main-content')





   <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Basic Layout</h5>
          <small class="text-muted float-end">Default label
            {{-- {{ 
                var_dump($user) }} --}}
          </small>
        </div>
        <div class="card-body">
         <form action="{{ route('user.register.update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">CNIC No. <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $user->cnic_no }}" name="cnic_no" class="form-control py-3 input_color" placeholder="35220 - 1506373 -1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">First Name <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $user->fname }}" name="fname" class="form-control py-3 input_color" placeholder="Write your First name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Middle Name <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $user->mname }}" name="mname" class="form-control py-3 input_color" placeholder="Write your Middle Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $user->lname }}" name="lname" class="form-control py-3 input_color" placeholder="Write your last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Select District <span class="text-danger">*</span></label>
                                            <select name="select_district" id="select_district" class="form-control input_color py-3">
                                                <option value="{{ $user->district }}" selected> {{ $user->district }}</option>
                                                <option value="dis"> District</option>
                                                <option value="dis"> District</option>
                                                <option value="dis"> District</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Select Tehsil  <span class="text-danger">*</span></label>
                                            <select name="select_tehsil" id="select_tehsil" class="form-control input_color py-3">
                                                <option value="{{ $user->tehsil }}" selected>{{ $user->tehsil }}</option>
                                             
                                                <option value="tehsil"> Tehsil</option>
                                                <option value="tehsil"> Tehsil</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">CAST <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $user->cast }}" name="cast" class="form-control py-3 input_color" placeholder="CAST">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Gender <span class="text-danger">*</span></label>
                                            <select name="gender" id="select_gender" class="form-control input_color py-3">
                                                <option value="{{ $user->gender }}" selected>{{ $user->gender }}</option>
                                                <option value="male"> Male</option>
                                                <option value="female"> Female</option>
                                                <option value="other"> Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Your Profession <span class="text-danger">*</span></label>
                                            <select name="profession" id="your_profession" class="form-control input_color py-3">
                                                <option value="{{ $user->profession }}" selected>{{ $user->profession }}</option>
                                                <option value="tgerg"> Profession</option>
                                                <option value="tretert"> Profession</option>
                                                <option value="tgrgg"> Profession</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Country Of Residence <span class="text-danger">*</span></label>
                                            <select name="country_residence" id="country_residence" class="form-control input_color py-3">
                                                <option value="{{ $user->country_residence }}" selected>{{ $user->country_residence }}</option>
                                                <option value="gedgh"> Pakistan</option>
                                                <option value="gergherg"> bangladeshi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $user->address_one }}" name="address_one" class="form-control py-3 input_color" placeholder="Address Line 1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Address Line 2 <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $user->address_two }}" name="address_two" class="form-control py-3 input_color" placeholder="Address Line 2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Your City <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $user->city }}" name="your_city" class="form-control py-3 input_color" placeholder="Your City">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Phone No <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $user->phone }}" name="phone" class="form-control py-3 input_color" placeholder="Phone No">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $user->email }}" name="email" class="form-control py-3 input_color" placeholder="Write your Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-12">
                                    <div class="form-group">
                                       
                                       
                                        <label for="form-label" class="form-label"> User Image Upload  <span class="text-danger">*</span></label>
                                        <input type="file"  name="userimage" class="form-control py-3 input_color" placeholder="Enter button Two url">
                                    </div>
                                </div>
                             
                               
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <button type="submit" class="py-4 w-100 border-0 resgiter_button rounded">Update<i class="fa-solid fa-circle-plus ms-2"></i></button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
        </div>
      </div>
    </div>
  
  </div>
@endsection
