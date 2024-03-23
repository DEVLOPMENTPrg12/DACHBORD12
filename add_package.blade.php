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
            <form action="{{url('upload_package')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="cc">


                <div class="row">
                    <div style="padding: 15px;" class="form-group row col-6" >
                        <label for=""  class="col-sm-2 col-form-label col-form-label-lg" >Country Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg"  name="name" required='' style="color: black;" placeholder="Write the name">
                    </div>
                    </div>
                    <div style="padding: 15px;" class="form-group row col-6">
                        <label for="" class="col-sm-2 col-form-label col-form-label-lg">
                             Prix</label>
                             <div class="col-sm-10">
                        <input type="number" class="form-control form-control-lg" name="prix" required='' style="color: black;" placeholder="Write the  prix">
                    </div>
                    </div>
                    <div style="padding: 15px;"  class="form-group row col-6" >
                        <label for="" class="col-sm-2 col-form-label col-form-label-lg" > Days</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control form-control-lg" name="days" required='' style="color: black;" placeholder="Write the  days">
                    </div>
                    </div>
                    <div style="padding: 15px;"  class="form-group row col-6">
                        <label for=""  class="col-sm-2 col-form-label col-form-label-lg" > Star</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control form-control-lg"  name="star" required='' style="color: black;" placeholder="Write the  star">
                    </div>
                    </div>
                    <div style="padding: 15px;"  class="form-group row col-6" >
                        <label for="" class="col-sm-2 col-form-label col-form-label-lg " > Transportation</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg"  name="tr" required='' style="color: black;" placeholder="Write the  transportation">
                    </div></div>

                    <div style="padding: 15px;" class="form-group row col-6" >
                        <label for="" class="col-sm-2 col-form-label col-form-label-lg"> Food</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" name="food" required='' style="color: black;" placeholder="Write the  food">
                    </div>
                    </div>
                    <div style="padding: 15px;" class="form-group row col-6">
                        <label for="" class="col-sm-2 col-form-label col-form-label-lg"> Review</label>
                        <div class="col-sm-10">
                        <input type="number"  class="form-control form-control-lg"  name="rv" required='' style="color: black;" placeholder="Write the  review">
                    </div>
                    </div>



                    <div style="padding: 15px;" class="col-6">
                        <label for="">Image </label>
                        <input type="file" name="file" required='' style="color: black;" placeholder="Write the image">
                    </div>


                </div>
            </div>

                <div style="padding: 15px;">

                    <button type="submit" class="btn btn-primary">Add Package</button>
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
