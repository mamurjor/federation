@extends('backend.dash')

@section('main-content')
    <main>
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4">{{ $title }}</h4>

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Header</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.header') }}" method="POST"
                                    enctype="multipart/form-data" id="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Facebook icon</label>
                                        <input type="text" value="{{ config('settings.ficon')}}" class="form-control"
                                            id="icon" name="ficon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Facebook Url</label>
                                        <input type="text" value="{{ config('settings.furl')}}" class="form-control"
                                            id="icon" name="furl">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Twitter icon</label>
                                        <input type="text" value="{{ config('settings.ticon')}}" class="form-control"
                                            id="icon" name="ticon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Twitter Url</label>
                                        <input type="text" value="{{ config('settings.turl')}}" class="form-control"
                                            id="icon" name="turl">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Linkedin icon</label>
                                        <input type="text" value="{{ config('settings.licon')}}" class="form-control"
                                            id="icon" name="licon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Linkedin Url</label>
                                        <input type="text" value="{{ config('settings.lurl')}}" class="form-control"
                                            id="icon" name="hlogo">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Youtube icon</label>
                                        <input type="text" value="{{ config('settings.yicon')}}" class="form-control"
                                            id="icon" name="yicon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Youtube Url</label>
                                        <input type="text" value="{{ config('settings.yurl')}}" class="form-control"
                                            id="icon" name="yurl">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Header logo</label>
                                        <img width="100" height="100" src="{{ url('/') . config('settings.hlogo')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.hlogo')}}" class="form-control"
                                            id="icon" name="hlogo">

                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>

                                </form>

                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">page setting</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.save') }}" method="POST" id="myForm"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Blog title</label>
                                        <input type="text" value="{{ config('settings.blogtitle')}}" class="form-control"
                                            name="blogtitle" id="icon" name="hlogo">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Blog slogan</label>
                                        <input type="text" value="{{ config('settings.blogslogan')}}" class="form-control"
                                            id="icon" name="blogslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Cast title</label>
                                        <input type="text" value="{{ config('settings.casttitle')}}" class="form-control"
                                            id="icon" name="casttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Cast slogan</label>
                                        <input type="text" value="{{ config('settings.castslogan')}}" class="form-control"
                                            id="icon" name="castslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial title</label>
                                        <input type="text" value="{{ config('settings.matromonialtitle')}}" class="form-control"
                                            id="icon" name="matromonialtitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial slogan</label>
                                        <input type="text" value="{{ config('settings.matromonialslogan')}}" class="form-control"
                                            id="icon" name="matromonialslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Division title</label>
                                        <input type="text" value="{{ config('settings.Divisiontitle')}}" class="form-control"
                                            id="icon" name="Divisiontitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Division slogan</label>
                                        <input type="text" value="{{ config('settings.Divisionslogan')}}" class="form-control"
                                            id="icon" name="Divisionslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Tehsil title</label>
                                        <input type="text" value="{{ config('settings.tehsiltitle')}}" class="form-control"
                                            id="icon" name="tehsiltitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Tehsil slogan</label>
                                        <input type="text" value="{{ config('settings.tehsilslogan')}}" class="form-control"
                                            id="icon" name="tehsilslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">District title</label>
                                        <input type="text" value="{{ config('settings.districttitle')}}" class="form-control"
                                            id="icon" name="districttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">District slogan</label>
                                        <input type="text" value="{{ config('settings.districtslogan')}}" class="form-control"
                                            id="icon" name="districtslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Contact title</label>
                                        <input type="text" value="{{ config('settings.contacttitle')}}" class="form-control"
                                            id="icon" name="contacttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Contact slogan</label>
                                        <input type="text" value="{{ config('settings.contactslogan')}}" class="form-control"
                                            id="icon" name="contactslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">About us title</label>
                                        <input type="text" value="{{ config('settings.abouttitle')}}" class="form-control"
                                            id="icon" name="abouttitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">About us slogan</label>
                                        <input type="text" value="{{ config('settings.aboutslogan')}}" class="form-control"
                                            id="icon" name="aboutslogan">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Wings title</label>
                                        <input type="text" value="{{ config('settings.wingstitle')}}" class="form-control"
                                            id="icon" name="wingstitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Wings slogan</label>
                                        <input type="text" value="{{ config('settings.wingsslogan')}}" class="form-control"
                                            id="icon" name="wingsslogan">

                                    </div>



                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit </button>

                                </form>

                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">President</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.president') }}" method="POST"
                                    enctype="multipart/form-data" id="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Title</label>
                                        <input type="text" value="{{ config('settings.ptitle')}}" class="form-control"
                                            id="icon" name="ptitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Sub Title</label>
                                        <input type="text" value="{{ config('settings.psubtitle')}}" class="form-control"
                                            id="icon" name="psubtitle">

                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>

                                </form>

                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Blog</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.blog') }}" method="POST"
                                    enctype="multipart/form-data" id="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Blog Title</label>
                                        <input type="text" value="{{ config('settings.btitle')}}" class="form-control"
                                            id="icon" name="btitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Blog button icon</label>
                                        <input type="text" value="{{ config('settings.bicon')}}" class="form-control"
                                            id="icon" name="bicon">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Blog button text</label>
                                        <input type="text" value="{{ config('settings.btext')}}" class="form-control"
                                            id="icon" name="btext">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Blog button url</label>
                                        <input type="text" value="{{ config('settings.burl')}}" class="form-control"
                                            id="icon" name="burl">

                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>

                                </form>

                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Join Us</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.joinus') }}" method="POST"
                                    enctype="multipart/form-data" id="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Join us Title</label>
                                        <input type="text" value="{{ config('settings.jtitle')}}" class="form-control"
                                            id="icon" name="jtitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Join us sub Title</label>
                                        <input type="text" value="{{ config('settings.jsubtitle')}}" class="form-control"
                                            id="icon" name="jsubtitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">join us button icon</label>
                                        <input type="text" value="{{ config('settings.jicon')}}" class="form-control"
                                            id="icon" name="jicon">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Join us button text</label>
                                        <input type="text" value="{{ config('settings.jtext')}}" class="form-control"
                                            id="icon" name="jtext">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Join us button url</label>
                                        <input type="text" value="{{ config('settings.jurl')}}" class="form-control"
                                            id="icon" name="jurl">

                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>

                                </form>

                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">FAQ</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.faq') }}" method="POST"
                                    enctype="multipart/form-data" id="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">FAQ Title</label>
                                        <input type="text" value="{{ config('settings.ftitle')}}" class="form-control"
                                            id="icon" name="ftitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">FAQ Sub Title</label>
                                        <input type="text" value="{{ config('settings.fsubtitle')}}" class="form-control"
                                            id="icon" name="fsubtitle">

                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>

                                </form>

                            </div>
                        </div>

                   

                    </div>


                    <div class="col-xl">
                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Footer</h5>
                                <small class="text-muted float-end">Merged input group</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.footer') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Footer logo</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.flogo')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.flogo')}}" class="form-control"
                                            id="icon" name="flogo">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Footer Description</label>
                                        <input type="text" value="{{ config('settings.footerdescription')}}" class="form-control"
                                            id="" name="footerdescription">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Footer tel number</label>
                                        <input type="text" value="{{ config('settings.footertelnumber')}}" class="form-control"
                                            id="" name="footertelnumber">

                                    </div>



                                    <div class="form-group mt-3">
                                        <label for="field1">Footer gmail</label>
                                        <input type="email" value="{{ config('settings.footeremail')}}" class="form-control"
                                            id="" name="footeremail">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Footer address</label>
                                        <input type="text" value="{{ config('settings.footeraddress')}}" class="form-control"
                                            id="" name="footeraddress">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Home Url</label>
                                        <input type="text" value="{{ config('settings.homeurl')}}" class="form-control"
                                            id="" name="homeurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">About Us Url</label>
                                        <input type="text" value="{{ config('settings.abouturl')}}" class="form-control"
                                            id="" name="abouturl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Services Url</label>
                                        <input type="text" value="{{ config('settings.serviceurl')}}" class="form-control"
                                            id="" name="serviceurl">he
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Contact us Url</label>
                                        <input type="text" value="{{ config('settings.contacturl')}}" class="form-control"
                                            id="" name="contacturl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Help center Url</label>
                                        <input type="text" value="{{ config('settings.helpcenterurl')}}" class="form-control"
                                            id="" name="helpcenterurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">How it works Url</label>
                                        <input type="text" value="{{ config('settings.howitworksurl')}}" class="form-control"
                                            id="" name="howitworksurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">registration url</label>
                                        <input type="text" value="{{ config('settings.registrationurl')}}" class="form-control"
                                            id="" name="registrationurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Login url</label>
                                        <input type="text" value="{{ config('settings.loginurl')}}" class="form-control"
                                            id="" name="loginurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">privacy policy url</label>
                                        <input type="text" value="{{ config('settings.privacyurl')}}" class="form-control"
                                            id="" name="privacyurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Terms and conditions url</label>
                                        <input type="text" value="{{ config('settings.termsconditionurl')}}" class="form-control"
                                            id="" name="termsconditionurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">profession url</label>
                                        <input type="text" value="{{ config('settings.professionurl')}}" class="form-control"
                                            id="" name="professionurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Division page url</label>
                                        <input type="text" value="{{ config('settings.Divisionpageurl')}}" class="form-control"
                                            id="" name="Divisionpageurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">All tehsil url</label>
                                        <input type="text" value="{{ config('settings.tehsilurl')}}" class="form-control"
                                            id="" name="tehsilurl">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">footer last section text</label>
                                        <input type="text" value="{{ config('settings.footerlastsectiontext')}}" class="form-control"
                                            id="" name="footerlastsectiontext">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Payment method logo</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.paymentmethod')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.paymentmethod')}}" class="form-control"
                                            id="icon" name="paymentmethod">

                                    </div>
                                    {{-- <div class="form-group mt-3">
                                        <label for="field1">visa</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.visa')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.visa')}}" class="form-control"
                                            id="icon" name="visa">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">mastercard</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.mastercard')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.mastercard')}}" class="form-control"
                                            id="icon" name="mastercard">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">discover</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.discover')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.discover')}}" class="form-control"
                                            id="icon" name="discover">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">american</label>

                                        <img width="100" height="100" src="{{ url('/') . config('settings.american')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.american')}}" class="form-control"
                                            id="icon" name="american">

                                    </div> --}}

                                    <div class="form-group mt-3">
                                        <label for="field1">copyright</label>
                                        <input type="text" class="form-control" value="{{ config('settings.copyright')}}"
                                            id="" name="copyright">

                                    </div>


                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>


                                </form>
                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Contact</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.contact') }}" method="POST"
                                    enctype="multipart/form-data" id="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Title</label>
                                        <input type="text" value="{{ config('settings.title')}}" class="form-control"
                                            id="icon" name="title">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Sub Title</label>
                                        <input type="text" value="{{ config('settings.subtitle')}}" class="form-control"
                                            id="icon" name="subtitle">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Phone Number</label>
                                        <input type="text" value="{{ config('settings.phone')}}" class="form-control"
                                            id="icon" name="phone">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Email</label>
                                        <input type="email" value="{{ config('settings.email')}}" class="form-control"
                                            id="icon" name="email">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Location</label>
                                        <input type="text" value="{{ config('settings.location')}}" class="form-control"
                                            id="icon" name="location">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Map Iframe</label>
                                        <input type="text" value="{{ config('settings.map')}}" class="form-control"
                                            id="icon" name="map">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Facebook icon</label>
                                        <input type="text" value="{{ config('settings.ficon')}}" class="form-control"
                                            id="icon" name="ficon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Facebook Url</label>
                                        <input type="text" value="{{ config('settings.furl')}}" class="form-control"
                                            id="icon" name="furl">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Twitter icon</label>
                                        <input type="text" value="{{ config('settings.ticon')}}" class="form-control"
                                            id="icon" name="ticon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Twitter Url</label>
                                        <input type="text" value="{{ config('settings.turl')}}" class="form-control"
                                            id="icon" name="turl">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">LinkedIn icon</label>
                                        <input type="text" value="{{ config('settings.licon')}}" class="form-control"
                                            id="icon" name="licon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">LinkedIn Url</label>
                                        <input type="text" value="{{ config('settings.lurl')}}" class="form-control"
                                            id="icon" name="lurl">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Youtube icon</label>
                                        <input type="text" value="{{ config('settings.yicon')}}" class="form-control"
                                            id="icon" name="yicon">

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="field1">Youtube Url</label>
                                        <input type="text" value="{{ config('settings.yurl')}}" class="form-control"
                                            id="icon" name="yurl">

                                    </div>

                               

                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>

                                </form>

                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Classified</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.classified') }}" method="POST"
                                    enctype="multipart/form-data" id="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Classified logo</label>
                                        <img width="100" height="100" src="{{ url('/') . config('settings.clogo')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.clogo')}}" class="form-control"
                                            id="icon" name="clogo">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Classified Title</label>
                                        <input type="text" value="{{ config('settings.ctitle')}}" class="form-control"
                                            id="icon" name="ctitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Classified sub Title</label>
                                        <input type="text" value="{{ config('settings.msubtitle')}}" class="form-control"
                                            id="icon" name="csubtitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Classified button icon</label>
                                        <input type="text" value="{{ config('settings.cicon')}}" class="form-control"
                                            id="icon" name="cicon">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Classified button text</label>
                                        <input type="text" value="{{ config('settings.ctext')}}" class="form-control"
                                            id="icon" name="ctext">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Classified button url</label>
                                        <input type="text" value="{{ config('settings.curl')}}" class="form-control"
                                            id="icon" name="curl">

                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>

                                </form>

                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Matromonial</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('company.setting.matro') }}" method="POST"
                                    enctype="multipart/form-data" id="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial logo</label>
                                        <img width="100" height="100" src="{{ url('/') . config('settings.mlogo')}}" alt="tst">
                                        <input type="file" value="{{ config('settings.mlogo')}}" class="form-control"
                                            id="icon" name="mlogo">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial Title</label>
                                        <input type="text" value="{{ config('settings.mtitle')}}" class="form-control"
                                            id="icon" name="mtitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial sub Title</label>
                                        <input type="text" value="{{ config('settings.msubtitle')}}" class="form-control"
                                            id="icon" name="msubtitle">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial button icon</label>
                                        <input type="text" value="{{ config('settings.micon')}}" class="form-control"
                                            id="icon" name="micon">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial button text</label>
                                        <input type="text" value="{{ config('settings.mtext')}}" class="form-control"
                                            id="icon" name="mtext">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="field1">Matromonial button url</label>
                                        <input type="text" value="{{ config('settings.murl')}}" class="form-control"
                                            id="icon" name="murl">

                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>








                <!-- Form Alignment -->

            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl">
                    <div
                        class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                        <div>
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2024
                            , made with ❤️ by
                            <a href="https://pixinvent.com" target="_blank"
                                class="footer-link text-primary fw-medium">Pixinvent</a>
                        </div>
                        <div class="d-none d-lg-inline-block">
                            <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                target="_blank">License</a>
                            <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                class="footer-link me-4">More Themes</a>

                            <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank"
                                class="footer-link me-4">Documentation</a>

                            <a href="https://pixinvent.ticksy.com/" target="_blank"
                                class="footer-link d-none d-sm-inline-block">Support</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
        </div>
    @endsection


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".approve-btn").click(function() {
                var userid = $(this).attr('data-userid');
                $.ajax({
                    url: '{{ route('user.approved', ':userid') }}'.replace(':userid', userid),
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $.each(response, function(id, data) {

                            window.location()


                        });

                    }
                });

            });

            $(".cancel-btn").click(function() {
                var userid = $(this).attr('data-userid');
                $.ajax({
                    url: '{{ route('user.cancel', ':userid') }}'.replace(':userid', userid),
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $.each(response, function(id, data) {

                            window.location()


                        });

                    }
                });

            });
            //var value = $('#dropDownId').val();

        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var counter = 2; // Start counter at 2 for the first additional field

            $('#addMore').click(function() {
                var newField = '<div class="form-group"><label for="field">Social Media Icon: :</label>' +
                    '<input type="text" class="form-control" id="icon" name="icon[]">' +
                    '</div>';
                var ns = '<div class="form-group"><label for="field">Social Media URL: </label>' +
                    '<input type="text" class="form-control" id="url" name="url[]">' +
                    '</div>';
                $('#extraFields').append(newField + ns);
                counter++;
            });

            $('#myForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission for demo
                // Here you can handle form submission
                alert('Form submitted!');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var counter = 2; // Start counter at 2 for the first additional field

            $('#addMore').click(function() {
                var newField = '<div class="form-group"><label for="field">Social Media Icon: :</label>' +
                    '<input type="text" class="form-control" id="icon" name="icon[]">' +
                    '</div>';
                var ns = '<div class="form-group"><label for="field">Social Media URL: </label>' +
                    '<input type="text" class="form-control" id="url" name="url[]">' +
                    '</div>';
                $('#extraFields').append(newField + ns);
                counter++;
            });

            $('#myForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission for demo
                // Here you can handle form submission
                alert('Form submitted!');
            });
        });
    </script>
