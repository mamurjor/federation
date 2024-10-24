@extends('backend.dash')

@section('main-content')
    <div class="card m-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>User List</h5>
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


                                    <form action="{{ route('matromonial.approve', $singlevalue->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button class="btn btn-primary" type="submit"> <a class=""
                                                href=""></a><i class="ti ti-pencil me-2"></i>Approve</button>
                                    </form>
                                    <a class="btn btn-danger mt-2"
                                        href="{{ route('matromonial.delete', $singlevalue->id) }}"
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
