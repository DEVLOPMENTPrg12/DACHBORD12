<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    .cc{
        background: #252930;
        padding: 15px;
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.5)
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
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Travel</p>
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
        <div class="container-fluid page-body-wrapper ">
           <div class="container " align='center' style="padding-top: 100px;">
            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss='alert'>X</button>
                {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('upload_destination')}}" class="book-form" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="cc">

                <div style="padding: 15px;" class="form-group row" >
                    <label for="" class="col-sm-2 col-form-label col-form-label-lg" >Country Name</label>

                <div class="col-sm-10">
                    <input class="form-control form-control-lg" type="text" name="name" required=''  placeholder="Write the name">
                </div>
            </div>


                <div style="padding: 15px;" class=" form-groub row">
                    <label for="" class="col-sm-2 col-form-label col-form-label-lg" > Tours</label>
                    <div class="col-sm-10">

                    <input type="number" class="form-control form-control-lg"
                    name="nt" required='' style="color: black;" placeholder="Write the  tours">
                </div>
                </div>
                <div style="padding: 15px;" class=" form-groub row">
                    <label for="" class="col-sm-2 col-form-label col-form-label-lg" > Place</label>
                    <div class="col-sm-10">

                    <input type="number" class="form-control  form-control-lg" name="np" required=''  placeholder="Write the  place">
                </div>
                </div>
                <div style="padding: 15px;" class=" form-groub ">
                    <label for="" >Image </label>
                    <input type="file" class="form-control-file" name="file" required=''  placeholder="Write the name">
                </div>
                <div style="padding: 15px;" class="inputBox">

                    <button type="submit" class="btn btn-primary" >Add Destination</button>
                </div>



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
