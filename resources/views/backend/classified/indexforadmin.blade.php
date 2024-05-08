@extends('backend.dash')

@section('main-content')
    <div class="card m-3">
        <h5 class="card-header m-1"> Classified list </h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL No. </th>
                        <th>Title</th>
                        <th>price</th>
                        <th>Expire date</th>
                        <th>Image </th>
                        <th>Action </th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($classified as $index => $singlevalue)
                        <tr>
                            <td>
                               <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                            </td>
                            <td>{{ $singlevalue->title }}</td>
                            <td>{{ $singlevalue->price }}</td>
                            <td>{{ $singlevalue->expiredate }}</td>

                            <td>
                                <img width="100" height="100" src=" <?php echo url('/') . $singlevalue['image']; ?>" alt="tst">
                            </td>

                            <td>
                                <div class="dropdown">
                                 

                                    <form action="{{ route('classified.approve', $singlevalue->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                       <button class="btn btn-primary" type="submit"> <a class="" href=""></a><i
                                        class="ti ti-pencil me-2"></i>Approve</button>
                                    </form>

                                    {{-- <a class="btn btn-primary" href="{{ route('classified.approve', $singlevalue->id) }}"><i
                                            class="ti ti-pencil me-2"></i> Approve</a> --}}
                                    <a class="btn btn-danger mt-2" href="{{ route('classified.delete', $singlevalue->id) }}"
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
