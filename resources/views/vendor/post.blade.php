
@extends('layouts.userlayout')
@section('body')


    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">Add Your Ride</h6>


                        <form action="{{route('vendor.store')}}" method="post" id="login_form" class="form_class" enctype="multipart/form-data">
                            @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="oname" name="oname" value={{Auth::user()->name}} >
                                    <label for="name">Owner Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="oid" name="oid" required>
                                    <label for="email">Owner Nid</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="dname"  name="dname" required>
                                    <label for="name">Driver Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="did" name="did" required >
                                    <label for="email">Driver Nid</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="dcontact" name="dcontact" required>
                                    <label for="name">Driver Contact</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="ocontact"  name="ocontact" value={{Auth::user()->email}}>
                                    <label for="email">Owner Contact </label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="dlicense" name="dlicense" required>
                                    <label for="message">Drivers Driving License</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="vreg" name="vreg" required>
                                    <label for="message">Vehicle Registration </label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0 bg-light" id="dlv" name="dlv" required>
                                    <label for="message">Driving License Validation</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0 bg-light" id="vlv" name="vlv" required >
                                    <label for="message">Vehicle Registration Validation</label>
                                </div>
                            </div>
<hr>
                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="cmodel" name="cmodel"required >
                                    <label for="message">Car Model</label>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="fee" name="fee"required >
                                    <label for="message">Car Fee</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="cdetails" name="cdetails" required>
                                    <label for="message">Car details</label>
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control border-0 bg-light" id="image"  name="image">
                                    <label for="message">Car Image</label>
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
