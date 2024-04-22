@extends('backend.dash')

@section('main-content')

<div class="card">
    <h5 class="card-header"> <a href="{{ route('district.create') }}"> Add New</a>  </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>SL No. </th>
            <th>Name</th>
            <th>Code</th>
            <th>Action </th>
            
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
         
            
         
          @foreach ($districts as  $index=>$singlevalue )
            
         
          <tr>
            <td>
              
              <span class="fw-medium">{{ $index+1 }}</span>
            </td>
            <td>{{ $singlevalue->name }}</td>
         
            <td><span class="badge bg-label-success me-1">{{ $singlevalue->code }}</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="ti ti-dots-vertical"></i>
                </button>
                
                <a class="btn btn-primary" href="{{ route('district.edit',$singlevalue->id) }}"><i class="ti ti-pencil me-2"></i> Edit</a>
                  <a class="btn btn-danger" href="{{ route('district.delete',$singlevalue->id)}}" onclick="return confirm('Are Your Suere')">  Delete</a>
                
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection