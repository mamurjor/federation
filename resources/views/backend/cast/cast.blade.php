@extends('layouts.front')
@section('title', 'cast')
@section('content')


    <main>
        <!-- breadcrumd section start -->
        <section id="breadcrumd_section" class="breadcrumd_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumd_heading text-center">
                            <h2 class="fw-bold">Cast List</h2>
                            <span><a href="#" class="text-black">Home</a> / Cast List</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumd section end -->
        <!-- member list section start -->
        <section id="member_list_section" class="member_list_section">
            <div class="container">
                <div class="row">

                    @foreach ($castpost as $cast)
                        <div class="col-md-4 col-sm-6 col-lg-4 col-xl-2 mb-4">
                            <div class="latest_member_box cast_boxs text-center">
                                <img class="mb-3" src="{{ $cast->image }}" alt="">
                                <h6 class="mb-2">{{ $cast->name }}</h6>
                                <a href="{{ route('cast.single', $cast->id) }}">Read More</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- member list section end -->
    </main>


@endsection
