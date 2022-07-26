
@extends('layouts.userlayout')
@section('body')


    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">Add Your Bookings</h6>

{{--                    <form action="{{route('vendor.store')}}" method="post" id="login_form" class="form_class" enctype="multipart/form-data">--}}
{{--                        @csrf--}}

                    <form action="{{route('booking.store')}}" method="post" id="login_form" class="form_class" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="name" name="name" value={{Auth::user()->name}} >
                                    <label for="name">Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="nid" name="nid" required>
                                    <label for="email">Nid</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="email"  name="email" value={{Auth::user()->email}}>
                                    <label for="name">Email</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="contact" name="contact" required >
                                    <label for="email">Contact</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="pickup" name="pickup" required>
                                    <label for="name">Pickup Point</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="destination"  name="destination" required>
                                    <label for="email">Destination </label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0 bg-light" id="bookfor" name="bookfor" required>
                                    <label for="message">Booking For</label>
                                </div>
                            </div>



                            <hr>
                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="cmodel" name="cmodel" value="{{$vendor->cmodel}}" >
                                    <label for="message">Car Model</label>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="fee" name="fee" value="{{$vendor->fee}}">
                                    <label for="message">Car Fee</label>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="oname" name="oname" value="{{$vendor->oname}}" >
                                    <label for="message">Owner Name </label>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="vreg" name="vreg" value="{{$vendor->vreg}}" >
                                    <label for="message">Vehicle registration</label>
                                </div>
                            </div>
<br>



                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Confirm Booking</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
