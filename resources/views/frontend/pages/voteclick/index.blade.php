@extends('backend.dash')

@section('main-content')
<div class="card m-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>All Vote</h5>
    </div>

    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>SL No.</th>
                    <th>Total Vote</th>
                    <th>Nomini Name</th>
                    <th>Vote type</th>
                    <th>Vote position type</th>
                    <th>Tehsil</th>
                    <th>Status</th>
                    <th>Action</th>
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
                        <td>{{ $singlevalue->status }}</td>
                        <td>
                            @if ($singlevalue->status == 0 && !$hasSelectedNomini)
                                <form action="{{ route('nomini.select', $singlevalue->nomini_id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-check me-2"></i>Select</button>
                                </form>
                            @elseif ($singlevalue->status == 1)
                                <form action="{{ route('nomini.cancel', $singlevalue->nomini_id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-times me-2"></i>Cancel</button>
                                </form>
                            @else
                                <button class="btn btn-secondary" type="button" onclick="alert('You are already selected one Nomini')">
                                    <i class="fa fa-check me-2"></i>Select
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card m-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>All Wings Vote</h5>
    </div>

    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead class="table-success">
                <tr>
                    <th>SL No.</th>
                    <th>Total Vote</th>
                    <th>Nomini Name</th>
                    <th>Vote type</th>
                    <th>Vote position type</th>
                    <th>Profession</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($wingsvoteclick as $index => $singlevalue)
                    <tr>
                        <td>
                            <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                        </td>
                        <td>{{ $singlevalue->vote_count }}</td>
                        <td>{{ $singlevalue->fname }}</td>
                        <td>{{ $singlevalue->votetype }}</td>
                        <td>{{ $singlevalue->votepositiontype }}</td>
                        <td>{{ $singlevalue->profession_name }}</td>
                        <td>{{ $singlevalue->status }}</td>
                        <td>
                            @if ($singlevalue->status == 0 && !$hasSelectedWingsNomini)
                                <form action="{{ route('wingsnomini.select', $singlevalue->Wingsnomini_id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-check me-2"></i>Select</button>
                                </form>
                            @elseif ($singlevalue->status == 1)
                                <form action="{{ route('wingsnomini.cancel', $singlevalue->Wingsnomini_id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-times me-2"></i>Cancel</button>
                                </form>
                            @else
                                <button class="btn btn-secondary" type="button" onclick="alert('You are already selected one Nomini')">
                                    <i class="fa fa-check me-2"></i>Select
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
