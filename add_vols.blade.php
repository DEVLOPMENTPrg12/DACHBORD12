<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }
    .cc{
        background: #252930;
        padding: 15px;
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.5)
    }
    select{
        margin: 5px;
        width: 50%
    }

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

            <form action="{{url('store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="cc">


               <div class="row">
                <div style="padding: 15px;" class="form-group row col-6 ">
                    <label class="col-sm-2 col-form-label col-form-label-lg" for="">N°vol</label>
                    <div class="col-sm-10">
                    <input class="form-control form-control-lg"  type="text" name="nvol" required='' style="color: black;" placeholder="Write the Numero">
                </div>
                </div>
                <div style="padding: 15px;"  class="form-group row col-6"  >
                    <label  class="col-sm-2 col-form-label col-form-label-lg"  for=""> Type</label>
                    <div class="col-sm-10">
                    <input class="form-control form-control-lg" type="text" name="type" required='' style="color: black;" placeholder="Write the  type">
                </div>
                </div>
                <div style="padding: 15px;" class="form-group row col-6"  >
                    <label for="" class="col-sm-2 col-form-label col-form-label-lg" > Provenance</label>
                    <div class="col-sm-10">
                    <input class="form-control form-control-lg"  type="text" name="pv" required='' style="color: black;" placeholder="Write the provenance ">
                </div>
                </div>
                <div style="padding: 15px;" class="form-group row col-6" >
                    <label class="col-sm-2 col-form-label col-form-label-lg"  for=""> Arrive</label>
                    <div class="col-sm-10">
                    <input  class="form-control form-control-lg"   type="datetime-local" name="arrive" required='' style="color: black;" placeholder="Write the arrive">
                </div>
                </div>
                <div style="padding: 15px;"  class="form-group row col-6"  >
                    <label for="" class="col-sm-2 col-form-label col-form-label-lg"  > Depart</label>
                    <div class="col-sm-10">
                    <input  class="form-control form-control-lg"  type="datetime-local" name="depart" required='' style="color: black;" placeholder="Write the depart">
                </div>
                </div>
                <div style="padding: 15px;"  class="form-group row col-6" >
                    <label for="" class="col-sm-2 col-form-label col-form-label-lg"> Destination</label>
                    <div class="col-sm-10">
                    <input  class="form-control form-control-lg"   type="text" name="ds" required='' style="color: black;" placeholder="Write the  Destination">
                </div>

                </div>

                    <div class=" form-group row col-6">
                    <label for="" class="col-sm-2 col-form-label col-form-label-lg">Airlines</label>


                    <select name="ar" class=" text-dark form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                        <option value="" selected>--airlines--</option>

                        @foreach ($airlines as $ar )

                        <option style="color: black;"  value="{{$ar->id}}"> {{$ar->cie}} </option>
                       @endforeach
                    </select>
                    </div>


                    <div class=" form-group row col-6">

                    <label for="" class="col-sm-2 col-form-label col-form-label-lg">Days</label>

                     <select class=" text-dark form-select form-select-lg mb-3" aria-label=".form-select-lg example"  name="days" >
                        <option  value="" selected>--jours--</option>
                        @foreach ($days as $day )
                         <option class="text-dark" value="{{$day->id}}"> {{$day->days}} </option>
                        @endforeach








                    </select>
                    </div>


               </div>
                </div>

                <div style="padding: 15px;">

                    <button type="submit" class="btn btn-primary">Add Vols</button>
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
