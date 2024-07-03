@extends('backend.dash')

@section('main-content')
    <div class="card m-3 ">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Country List</h5>
            <h5><a class="btn btn-primary waves-effect waves-light" href="{{ route('international.create') }}"> Add New </a>
            </h5>
        </div>
        <table class="table-responsive table table-bordered">
            <thead>
                <tr>
                    <th>SL No. </th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Action </th>

                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($international as $index => $singlevalue)
                    <tr>
                        <td>

                            <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                        </td>
                        <td>{{ $singlevalue->name }}</td>

                        <td><span class="badge bg-label-success me-1">{{ $singlevalue->code }}</span></td>
                        <td>

                            <a class="btn btn-primary" href="{{ route('international.edit', $singlevalue->id) }}"><i
                                    class="ti ti-pencil me-2"></i> Edit</a>
                            <a class="btn btn-danger" href="{{ route('international.delete', $singlevalue->id) }}"
                                onclick="return confirm('Are Your Suere')"> Delete</a>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
