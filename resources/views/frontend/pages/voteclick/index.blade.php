@extends('backend.dash')

@section('main-content')
    <div class="card m-3">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>All Vote</h5>
            </h5>
        </div>


        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="">
                    <tr>
                        <th>SL No. </th>
                        <th>Total Vote</th>
                        <th>Nomini Name</th>
                        <th>Vote type </th>
                        <th>Vote position type </th>
                        <th>Tehsil </th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($voteclick as $index => $singlevalue)
                        <tr>
                            <td>
                                <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                            </td>
                            <td>{{ $singlevalue->vote_count }}</td>
                            <td>{{ $singlevalue->fname }}</td>
                            <td>{{ $singlevalue->votetype }}</td>
                            <td>{{ $singlevalue->votepositiontype }}</td>
                            <td>{{ $singlevalue->tehsil }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
