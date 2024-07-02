@extends('backend.dash')

@section('main-content')
    <div class="card m-3 ">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Wings List</h5>
            <h5><a class="btn btn-primary waves-effect waves-light" href="{{ route('wings.create') }}"> Add New </a></h5>
        </div>
        <table class="table-responsive table table-bordered" >
            <thead>
                <tr>
                    <th>SL No. </th>
                    <th>Wings Type</th>
                    <th>Wings Type Name</th>
                    <th>Profession Name</th>
                    <th>Action </th>

                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($wings as $index => $singlevalue)
                    <tr>
                        <td>

                            <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                        </td>
                        <td>{{ $singlevalue->wings_type }}</td>
                        <td>{{ $singlevalue->wings_type_name }}</td>

                        <td><span class="badge bg-label-success me-1">{{ $singlevalue->profession_name }}</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>

                                <a class="btn btn-primary" href="{{ route('wings.edit', $singlevalue->id) }}"><i
                                        class="ti ti-pencil me-2"></i> Edit</a>
                                <a class="btn btn-danger" href="{{ route('wings.delete', $singlevalue->id) }}"
                                    onclick="return confirm('Are Your Suere')"> Delete</a>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- excel --}}

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card my-5 mx-3">

        <div class="card-header font-weight-bold">
            <h2 class="float-left">Import Excel</h2>
        </div>

        <div class="card-body">

            <form id="excel-csv-import-form" method="POST" action="{{ url('import-excel-csv-file-country') }}"
                accept-charset="utf-8" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group my-2">
                            <input class="form-control" type="file" name="file" placeholder="Choose file">
                        </div>
                        @error('file')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>

    </div>

    </div>
@endsection
