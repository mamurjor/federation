@extends('backend.dash')

@section('main-content')




<div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"><a href="{{ route('missionsection.index') }}"> List </a></h5>
        
        </div>
        <div class="card-body">
         <form action="{{ route('sliersection.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">title. <span class="text-danger">*</span></label>
                                            <input type="text" value="" name="title" class="form-control py-3 input_color" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">slogan  <span class="text-danger">*</span></label>
                                            <input type="text" value="" name="slogan" class="form-control py-3 input_color" placeholder="Enter slogan">
                                        </div>
                                    </div>
                               
                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Button  Text <span class="text-danger">*</span></label>
                                            <input type="text" value="" name="button_text" class="form-control py-3 input_color" placeholder="Enter button one text">
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Button  Url  <span class="text-danger">*</span></label>
                                            <input type="text" value="" name="button_url" class="form-control py-3 input_color" placeholder="Enter button one url">
                                        </div>
                                    </div>

                                      
                                    <div class="mb-12">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label"> Slider Image Upload  <span class="text-danger">*</span></label>
                                            <input type="file" value="" name="sliderimage" class="form-control py-3 input_color" placeholder="Enter button Two url">
                                        </div>
                                    </div>

                                    
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <button type="submit" class="py-4 w-100 border-0 resgiter_button rounded">Create<i class="fa-solid fa-circle-plus ms-2"></i></button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
        </div>
      </div>
    </div>
  
  </div>

@endsection