@extends('layouts.front')
@section('title', 'Singlecast')
@section('content')

<main>
    <!-- breadcrumd section start -->
    <section id="breadcrumd_section" class="breadcrumd_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumd_heading text-center">
                        <h2 class="fw-bold">Rajput</h2>
                        <span><a href="#" class="text-black">Home</a> / <a href="#" class="text-black">Cast List</a> / Rajput</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumd section end -->
    <!-- Cast single section start -->
    <section id="cast_single_section" class="cast_single_section">
        <div class="container">
            
            {!!$singlecast->content!!}
            
        </div>
    </section>
    <!-- Cast single section end -->
   </main>


@endsection