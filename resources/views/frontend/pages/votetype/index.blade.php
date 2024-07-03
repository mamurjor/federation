@extends('backend.dash')

@section('main-content')
    <div class="card m-3">
    
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Vote type List</h5>
                <h5><a class="btn btn-primary waves-effect waves-light" href="{{ route('votetype.create') }}"> Add New </a>
                </h5>
            </div>


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



                    @foreach ($votetype as $index => $singlevalue)
                        <tr>
                            <td>

                                <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                            </td>
                            <td>{{ $singlevalue->name }}</td>

                            <td><span class="badge bg-label-success me-1">{{ $singlevalue->code }}</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>

                                    <a class="btn btn-primary" href="{{ route('votetype.edit', $singlevalue->id) }}"><i
                                            class="ti ti-pencil me-2"></i> Edit</a>
                                    <a class="btn btn-danger" href="{{ route('votetype.delete', $singlevalue->id) }}"
                                        onclick="return confirm('Are Your Suere')"> Delete</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- excel --}}

    {{-- @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card">

        <div class="card-header font-weight-bold">
            <h2 class="float-left">Import Export Excel</h2>
            <h2 class="float-right"><a href="{{ url('export-excel-csv-file/xlsx') }}" class="btn btn-success mr-1">Export
                    Excel</a><a href="{{ url('export-excel-csv-file/csv') }}" class="btn btn-success">Export CSV</a></h2>
        </div>

        <div class="card-body">

            <form id="excel-csv-import-form" method="POST" action="{{ url('import-excel-csv-file-Division') }}"
                accept-charset="utf-8" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="file" name="file" placeholder="Choose file">
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

    </div> --}}

    </div>
@endsection
