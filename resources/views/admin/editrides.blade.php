
@extends('layouts.adminlayout')
@section('body')


    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">Add Your Ride</h6>


                    <form action="{{route('update.rides',$vendor)}}" method="post" id="login_form" class="form_class" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="oname" name="oname"  value="{{$vendor->oname}}">
                                    <label for="name">Owner Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="oid" name="oid" value="{{$vendor->oid}}">
                                    <label for="email">Owner Nid</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="dname"  name="dname" value="{{$vendor->dname}}">
                                    <label for="name">Driver Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="did" name="did" value="{{$vendor->did}}" >
                                    <label for="email">Driver Nid</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="dcontact" name="dcontact" value="{{$vendor->dcontact}}">
                                    <label for="name">Driver Contact</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="ocontact"  name="ocontact" value="{{$vendor->ocontact}}">
                                    <label for="email">Owner Contact </label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="dlicense" name="dlicense" value="{{$vendor->dlicense}}" >
                                    <label for="message">Drivers Driving License</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="vreg" name="vreg" value="{{$vendor->vreg}}">
                                    <label for="message">Vehicle Registration </label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0 bg-light" id="dlv" name="dlv"  value="{{$vendor->dlv}}">
                                    <label for="message">Driving License Validation</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0 bg-light" id="vlv" name="vlv" value="{{$vendor->vlv}}"  >
                                    <label for="message">Vehicle Registration Validation</label>
                                </div>
                            </div>
                            <hr>
                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="cmodel" name="cmodel" value="{{$vendor->cmodel}}"  >
                                    <label for="message">Car Model</label>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="fee" name="fee" value="{{$vendor->fee}}">
                                    <label for="message">Car Fee</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="cdetails" name="cdetails" value="{{$vendor->cdetails}}">
                                    <label for="message">Car details</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="status" name="status" value="{{$vendor->status}}">
                                    <label for="message">Status</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0 bg-light" id="avat" name="avat" value="{{$vendor->avat}}">
                                    <label for="message">Available at</label>
                                </div>
                            </div>

{{--                            <div class="col-12">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <input type="file" class="form-control border-0 bg-light" id="image"  name="image" value="{{$vendor->image}}">--}}
{{--                                    <label for="message">Car Image</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="col-12">
                                <div class="col-sm-12">
                                    <div class="form-group">

                                        @if ($vendor->image)
                                            <br>
                                            <img src="{{$vendor->image}}" width="75px" height="auto"
                                                 alt="">
                                            <br>
                                        @endif
                                        <input type="file" id="image" name="image"
                                               class="form-control">

                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Post Your Ride</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
