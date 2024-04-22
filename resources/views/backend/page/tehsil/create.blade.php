@extends('backend.dash')

@section('main-content')




<div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"><a href="{{ route('tehsil.index') }}"> List </a></h5>
        
        </div>
        <div class="card-body">
         <form action="{{ route('tehsil.store') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Country Of Residence <span
                                         class="text-danger">*</span></label>

                                        <select name="country" id="country_residence"
                                            class="form-control input_color py-3">
                                            <option value="" selected>Select country of Residence</option>
                                            @foreach ($countries as $index => $singlevalue)
                                                <option value="{{ $singlevalue->name }}"> {{ $singlevalue->name }}
                                                </option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>

                             
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"> Select District <span
                                         class="text-danger">*</span></label>

                                         <select name="district" id="district"   class="form-control input_color py-3">
                                            <option value="">Select City</option>
                                        </select>

                                    </div>
                                </div>

                              

                                <div class="col-md-12">
                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Name. <span class="text-danger">*</span></label>
                                            <input type="text" value="" name="name" class="form-control py-3 input_color" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <div class="form-group">
                                            <label for="form-label" class="form-label">Code  <span class="text-danger">*</span></label>
                                            <input type="text" value="" name="code" class="form-control py-3 input_color" placeholder="Enter Code">
                                        </div>
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


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script >
   $(document).ready(function(){
  $("#country_residence").change(function(){
    var country = $('#country_residence').val();
   

        $.ajax({
                url: '{{ route("tehsil.getcountry", ":country") }}'.replace(':country', country),
                type: 'GET',
                dataType: 'json',
                success: function(response){
              
                      // Check if response is not empty
                    if ($.isEmptyObject(response)) {
                        $('#district').empty();
                        var option = "<option value='"+0+"'>"+'no data found'+"</option>";
                            $("#district").append(option); 
                        return;
                    }
                    
                    // Clear existing options
                    $('#district').empty();
                    
                    // Append new options
                    $.each(response, function(id, data) {
                        var option = "<option  value='"+data.name+"'>"+data.name+"</option>";
                            $("#district").append(option);                        
                    });

                }
            });
    
  });
  //var value = $('#dropDownId').val();

});
    $(".submit-form").click(function(e){
        e.preventDefault();
        var data = $('#form-data').serialize();
        $.ajax({
            type: 'post',
            url: "{{ route('tehsil.store') }}",
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function(){
                //before sending the request
            },
            success: function(response){
                //the request is success
            },
            complete: function(response){
                //the request is completed
            }
        });
	});
</script>
