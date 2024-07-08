@extends('layouts.app')

@section('main-content')
    <div class="card m-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>User List</h5>
            <h5><a class="btn btn-primary waves-effect waves-light" href="{{ route('user.create') }}"> Add New </a></h5>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL No. </th>
                        <th>name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image </th>
                        <th>Status </th>
                        <th>Action </th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $index => $singlevalue)
                        <tr>
                            <td>
                               <span class="fw-medium ms-2">{{ $index+1}}</span>
                            </td>
                            <td>{{ $singlevalue->fname }}</td>
                            <td>{{ $singlevalue->email }}</td>
                            <td>{{ $singlevalue->phone }}</td>
                            <td>
                                <img width="100" height="100" src="{{ $singlevalue->userimage }}" alt="tst">
                            </td>
                            <td>
                                    @if ($singlevalue->status=="1")
                                        Active
                                    @elseif ($singlevalue->status=="3")
                                        Cancel
                                    @else
                                       Pending
                                    @endif
                               

                                
                            </td>
                            <td>
                                <div class="dropdown">

                                    @if ($singlevalue->status=="1")
                                    <a class="btn btn-danger" name="cancel" href="{{ route('user.cancel', $singlevalue->id) }}">
                                        Cancel</a>
                                    @elseif ($singlevalue->status=="3")
                                    <a class="btn btn-primary" name="active" href="{{ route('user.active', $singlevalue->id) }}">
                                        Active</a>
                                    @else  
                                    <a class="btn btn-danger" name="cancel" href="{{ route('user.cancel', $singlevalue->id) }}">
                                        Cancel</a>                                    
                                    <a class="btn btn-primary" name="active" href="{{ route('user.active', $singlevalue->id) }}">
                                        Active</a>
                                    @endif
                                    {{-- <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button> --}}
                                       
                                    
                                           
                                    {{-- <a class="btn btn-danger" href="{{ route('user.delete', $singlevalue->id) }}"
                                        onclick="return confirm('Are Your Suere')"> Delete</a> --}}

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 21df004003485600208a5533e74ae459d862c889
