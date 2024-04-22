@extends('backend.dash')

@section('main-content')

<div class="card">
    <h5 class="card-header"> <a href="{{ route('sliersection.create') }}"> Add New</a>  </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>SL No. </th>
            <th>Title</th>
            <th>Slogan</th>
            <th>Image </th>
            <th>Action </th>
            
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($sliersections as  $index=>$singlevalue )              
           
            <tr>
              <td>
                
                <span class="fw-medium">{{ $index+1 }}</span>
            </td>
            <td>{{ $singlevalue->title }}</td>
         
            <td><span class="badge bg-label-success me-1">{{ $singlevalue->slogan }}</span></td>
            <td>
              <img width="150" height="150" src=" <?php echo url('/').$singlevalue['imageurl'];?>" alt="tst">
            </td>
            
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="ti ti-dots-vertical"></i>
                </button>
                
                <a class="btn btn-primary" href="{{ route('sliersection.edit',$singlevalue->id) }}"><i class="ti ti-pencil me-2"></i> Edit</a>
                  <a class="btn btn-danger" href="{{ route('sliersection.delete',$singlevalue->id)}}" onclick="return confirm('Are Your Suere')">  Delete</a>
                
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection