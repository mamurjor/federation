@extends('backend.dash')

@section('main-content')
    <div class="card m-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Matromonial List</h5>
            <h5><a class="btn btn-primary waves-effect waves-light" href="{{ route('matromonial.create') }}"> Add New </a></h5>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL No. </th>
                        <th>name</th>
                        <th>date of birth</th>
                        <th>Image </th>
                        <th>Action </th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($matromonial as $index => $singlevalue)
                        <tr>
                            <td>
                               <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                            </td>
                            <td>{{ $singlevalue->name }}</td>
                            <td>{{ $singlevalue->dateofbirth }}</td>

                            <td>
                                <img width="100" height="100" src=" <?php echo url('/') . $singlevalue['matromonialimage']; ?>" alt="tst">
                            </td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>

                                    <a class="btn btn-primary" href="{{ route('matromonial.edit', $singlevalue->id) }}"><i
                                            class="ti ti-pencil me-2"></i> Edit</a>
                                    <a class="btn btn-danger" href="{{ route('matromonial.delete', $singlevalue->id) }}"
                                        onclick="return confirm('Are Your Suere')"> Delete</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
