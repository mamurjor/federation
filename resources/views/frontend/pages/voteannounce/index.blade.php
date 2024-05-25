@extends('backend.dash')

@section('main-content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Tehsil Vote announce List</h5>
            <h5><a class="btn btn-success waves-effect waves-light" href="{{ route('voteannounce.create') }}"> Add New </a>
            </h5>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL No. </th>
                        <th>votetype</th>
                        <th>position</th>
                        <th>Action </th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">



                    @foreach ($voteannounce as $index => $singlevalue)
                        <tr>
                            <td>

                                <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                            </td>
                            <td>{{ $singlevalue->votetype }}</td>

                            <td>


                                @php
                                    $positionlist = unserialize($singlevalue->votepositiontype);
                                @endphp

                                @foreach ($positionlist as $key => $position)
                                    <input type='radio' class="childChk" value="{{ $position }}" checked readonly/>
                                    {{ $position }}
                                @endforeach


                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>

                                    <a class="btn btn-primary" href="{{ route('voteannounce.edit', $singlevalue->id) }}"><i
                                            class="ti ti-pencil me-2"></i> Edit</a>
                                    <a class="btn btn-danger" href="{{ route('voteannounce.delete', $singlevalue->id) }}"
                                        onclick="return confirm('Are Your Suere')"> Delete</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="card mt-5">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Wings Vote announce List</h5>
            <h5><a class="btn btn-warning waves-effect waves-light" href="{{ route('wingsvoteannounce.create') }}"> Add New </a>
            </h5>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL No. </th>
                        <th>Type</th>
                        <th>Profession</th>
                        <th>votetype</th>
                        <th>position</th>
                        <th>Action </th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">



                    @foreach ($wingsvoteannounce as $index => $singlevalue)
                        <tr>
                            <td>

                                <span class="fw-medium ms-2">{{ $index + 1 }}</span>
                            </td>
                            <td>{{ $singlevalue->type }}</td>
                            <td>{{ $singlevalue->profession_name }}</td>
                            <td>{{ $singlevalue->votetype }}</td>

                            <td>


                                @php
                                    $positionlist = unserialize($singlevalue->votepositiontype);
                                @endphp

                                @foreach ($positionlist as $key => $position)
                                    <input type='radio' readonly class="childChk" value="{{ $position }}" checked/>
                                    {{ $position }}
                                @endforeach

                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>

                                    <a class="btn btn-primary" href="{{ route('wingsvoteannounce.edit', $singlevalue->id) }}"><i
                                            class="ti ti-pencil me-2"></i> Edit</a>
                                    <a class="btn btn-danger" href="{{ route('wingsvoteannounce.delete', $singlevalue->id) }}"
                                        onclick="return confirm('Are Your Suere')"> Delete</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    </div>
@endsection
