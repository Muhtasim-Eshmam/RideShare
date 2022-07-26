@extends('layouts.adminlayout')
@section('body')


    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Welcome Admin</h6>
                <h1 class="display-6 mb-4">View All Bookings </h1>
            </div>



            <div class="row g-4 justify-content-center">

                @foreach($customer as $customer )
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">


                        <div class="courses-item d-flex flex-column bg-light overflow-hidden h-100">


                            <div class="text-center p-4 pt-0">


                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">{{$customer->fee}}</div>
                                <h5 class="mb-3">Book For : {{$customer->name}}</h5>
                                <br><br>

                                <p>Nid : {{$customer->nid}}</p>
                                <p>Contact : {{$customer->contact}}</p>
                                <p>Email: {{$customer->email}}</p>
                                <p>Pickup Point : {{$customer->pickup}}</p>
                                <p>Destination : {{$customer->destination}}</p>
                                <p>Booked For : {{date('d-m-Y', strtotime($customer->bookfor))}}</p>
                                <hr>
                                <a href="{{ URL::to('/bookings/' .  $customer->id) }}" class="btn btn-outline-danger border-2">
                                    Cancel Booking
                                </a>
                                <hr>

                                {{--                                <p>Vehicle registration validation : {{$vendor->vlv}}</p>--}}
                                {{--                                <p>Vehicle registration: {{$vendor->vreg}}</p>--}}


                                <h5 class="mb-3">Ride Details</h5>

                                <p>Name : {{$customer->oname}} </p>
                                <p>Car Registration : {{$customer->vreg}}</p>
                                <p>Car Model: {{$customer->cmodel}}</p>




                                {{--                            <ol class="breadcrumb justify-content-center mb-0">--}}
                                {{--                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>--}}
                                {{--                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>--}}
                                {{--                            </ol>--}}
                            </div>
                        </div>
                    </div>


                @endforeach

            </div>


        </div>
    </div>








@endsection
