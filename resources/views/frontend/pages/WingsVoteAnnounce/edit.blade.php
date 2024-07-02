@extends('backend.dash')

@section('main-content')
    <div class="row">
        <div class="col-xl">
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Edit Wings Vote announce</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('wingsvoteannounce.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="wings" class="form-label">Select Wings <span
                                                class="text-danger">*</span></label>
                                                <input type="hidden" name="id" value="{{ $voteannounce->id }}">
                                        <select name="wings" id="wings" class="form-control input_color py-3">
                                            <option value="">Select</option>
                                            @foreach ($allWings as $data)
                                                <option value="{{ $data->profession_name }}"
                                                    {{ $data->profession_name == $voteannounce->wings ? 'selected' : '' }}>
                                                    {{ $data->profession_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('wings')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Announcement<span
                                                class="text-danger">*</span></label>
                                        <textarea name="announce" class="form-control py-3 input_color" id="" cols="20" rows="10">{{ $voteannounce->announce }}</textarea>
                                        @error('announce')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"> Select vote type <span
                                                class="text-danger">*</span></label>
                                        <select name="votetype" id="" class="form-control input_color py-3">
                                            <option value="">Select</option>
                                            @foreach ($votetype as $data)
                                                <option value="{{ $data->name }}"
                                                    {{ $voteannounce->votetype == $data->name ? 'selected' : '' }}>
                                                    {{ $data->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('votetype')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label"> Select vote position type <span
                                                class="text-danger">*</span></label>
                                        <select name="votepositiontype[]" id="" multiple data-live-search="true"
                                            class="selectpicker form-control input_color py-3">

                                            @foreach ($votepositiontype as $data)
                                                <option value="{{ $data->name }}"
                                                    {{ in_array($data->name, $voteannounce->votepositiontype) ? 'selected' : '' }}>
                                                    {{ $data->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('votepositiontype')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>


                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="form-label" class="form-label">Voting Date<span
                                                class="text-danger">*</span></label>
                                        <input type="date" value="{{ $voteannounce->votingdate }}" name="date"
                                            class="form-control py-3 input_color" placeholder="Enter ">
                                        @error('date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mt-3 text-end">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update<i
                                                class="fa-solid fa-circle-plus ms-2"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
