@extends('backend.client')
@section('main-content')
    <div class="m-5">
        @foreach ($nomini_list as $nomini)
            {{-- <p>{{ $nomini->votepositiontype }}</p> --}}


            {{-- <button type="button" class="btn btn-primary"> {{ $nomini->total_votes }}</button> --}}

            <div class="d-flex ms-5">
                <button type="button" value="{{ $nomini->votepositiontype }}"
                    class="btn btn-primary getnomini">{{ $nomini->votepositiontype }}
                </button>

                
            </div>
            {{-- <ul id="nominilist">

            </ul> --}}
            <form action="{{ route('voteresult.store') }}" method="post">
                @csrf
                <div id="nominilist">

                </div>
                <div>
                    <input type="hidden" name="positiontype" value="{{ $nomini->votepositiontype }}">
                </div>
                <button type="submit">Vote</button>
            </form>
            {{-- <button type="button" class="btn btn-primary">Right</button> --}}
        @endforeach
    </div>
    {{-- <div class="mx-5 my-2">
        @foreach ($nomini_list as $nomini)
            <p>{{ $nomini->votetype }}</p>
        @endforeach
    </div> --}}
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $(".getnomini").click(function() {

            var nomini = $(this).val();
            // alert(nomini)

            $.ajax({
                url: '{{ route('vote.nomini', ':nomini') }}'.replace(':nomini',
                    nomini),
                type: 'GET',
                dataType: 'json',
                success: function(response) {

                    console.log(response);
                    $("#nominilist").empty();

                    $.each(response, function(id, data) {
                        var li = "<input name='vote' type='radio' value='" + data.nomini_id + "'>" +
                            data
                            .votepositiontype + "</input>";
                            // var radio = ""
                        $("#nominilist").append(li);
                    });

                }
            });

        });

    });
</script>
