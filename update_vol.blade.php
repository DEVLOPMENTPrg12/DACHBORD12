<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }

        </style>
        <base href="/public">

    </style>
    @include('admin.css');
      </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.navbar');
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
           <div class="container" align='center' style="padding-top: 100px;">
            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss='alert'>X</button>
                {{session()->get('message')}}

            </div>

            @endif
            <form action="{{url('editvol',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="d-flex">
                <label for="" class="col-sm-2 col-form-label col-form-label-lg">Airline</label>
                <select name="ar" class=" text-dark form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                    <option value="" selected>--airlines--</option>

                    @foreach ($airlines as $ar )

                    <option style="color: black;"  value="{{$ar->id}}"> {{$ar->cie}} </option>
                   @endforeach
                </select>
            </div>
            <div>

                 <label for="" class="col-sm-2 col-form-label col-form-label-lg">Days</label>

                 <select class=" text-dark form-select form-select-lg mb-3" aria-label=".form-select-lg example"  name="days" >
                    <option  value="" selected>--jours--</option>
                    @foreach ($days as $day )
                     <option class="text-dark" value="{{$day->id}}"> {{$day->days}} </option>
                    @endforeach
                </select>
            </div>

                <div style="padding: 15px;">
                    <label for=""> N°vol</label>
                    <input type="text" value="{{$data->N°vol}}" name="nv" required='' style="color: black;" placeholder="Write the  days">
                </div>
                <div style="padding: 15px;">
                    <label for=""> type</label>
                    <input type="text" value="{{$data->type}}" name="type" required='' style="color: black;" placeholder="Write the  star">
                </div>
                <div style="padding: 15px;">
                    <label for=""> Provenance</label>
                    <input type="text" name="pv" value="{{$data->provenance}}" required='' style="color: black;" placeholder="Write the  transportation">
                </div>
                <div style="padding: 15px;">
                    <label for="">Arrive </label>
                    <input type="text" name="arrive" value="{{$data->arrive}}" required='' style="color: black;" placeholder="Write the  food">
                </div>
                <div style="padding: 15px;">
                    <label for=""> Depart</label>
                    <input type="datetime-local" name="depart" value="{{$data->depart}}" required='' style="color: black;" placeholder="Write the  review">
                </div>
                <div style="padding: 15px;">
                    <label for=""> Destination</label>
                    <input type="text" name="ds" value="{{$data->destination}}" required='' style="color: black;" placeholder="Write the  review">
                </div>



                <div style="padding: 15px;">

                    <input type="submit" class="btn btn-success">
                </div>

            </form>

           </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>
