@extends('backend.dash')

@section('main-content')
    <div class="card m-3">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Nomini List</h5>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL No. </th>
                        <th>Name</th>
                        <th>Vote type</th>
                        <th>Vote position type</th>
                        <th>Charge</th>
                        <th>payment type</th>
                        <th>Endorsment</th>
                        <th>status</th>
                        <th>Action </th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">



                    @foreach ($allnomini as $index => $singlevalue)
                        <tr>
                            <td>
                                <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                            </td>
                            <td>{{ $singlevalue->user->fname }}</td>
                            <td>{{ $singlevalue->votetype }}</td>
                            <td>{{ $singlevalue->votepositiontype }}</td>
                            <td>{{ $singlevalue->charge }}</td>

                            <td><span>{{ $singlevalue->payment_type }}</span></td>
                            <td><span>2</span></td>

                            <td>
                                @if ($singlevalue->status == 1)
                                    <span class="badge bg-label-danger me-1">Active</span>
                                @else
                                    <span class="badge bg-label-success me-1">Pending</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">


                                    @if ($singlevalue->status == 0)
                                        <form action="{{ route('nomini.approve', $singlevalue->id) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <button class="btn btn-primary" type="submit"> <a class=""
                                                    href=""></a><i class="fa fa-check me-2"></i>Approve</button>
                                        </form>
                                    @else
                                        <form action="{{ route('nomini.declined', $singlevalue->id) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <button class="btn btn-primary" type="submit"> <a class=""
                                                    href=""></a><i class="fa fa-ban me-2"></i>Declined</button>
                                        </form>
                                    @endif

                                    <a class="btn btn-danger mt-1" href="{{ route('nomini.delete', $singlevalue->id) }}"
                                        onclick="return confirm('Are Your Suere')"><i class="fa fa-trash me-2"></i>
                                        Delete</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
