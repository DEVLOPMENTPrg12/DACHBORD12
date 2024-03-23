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
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
        @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss='alert'>x</button>
            {{session()->get('message')}}

        </div>

        @endif
    <div class="container-fluid page-body-wrapper">
      <div class="container" align='center' style="padding: 100px;">

        <form action="{{url('editroom',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">


            <div style="padding: 15px;" class="form-group row col-6">
                <label for=""  class="col-sm-2 col-form-label col-form-label-lg" >Type</label>
                <input value="{{$data->type}}" type="text" name="type" required='' style="color: black;" placeholder="Write the type">
            </div>
            <div style="padding: 15px;"  class="form-group row col-6">
                <label for=""  class="col-sm-2 col-form-label col-form-label-lg" >Description</label>
                <input value="{{$data->description}}" type="text" name="description" required='' style="color: black;" placeholder="Write the type">
            </div>
            <div style="padding: 15px;"  class="form-group row col-6">
                <label for=""  class="col-sm-2 col-form-label col-form-label-lg" > Prix</label>
                <input value="{{$data->prix}}" type="number" name="prix" required='' style="color: black;" placeholder="Write the  prix">
            </div>
            <div style="padding: 15px;"  class="form-group row col-6">
                <label for=""  class="col-sm-2 col-form-label col-form-label-lg" > Number the Bath</label>
                <input value="{{$data->number_bath}}" type="number" name="bath" required='' style="color: black;" placeholder="Write the  number bath">
            </div>
            <div style="padding: 15px;"  class="form-group row col-6">
                <label for=""  class="col-sm-2 col-form-label col-form-label-lg" > Number the bed</label>
                <input value="{{$data->number_bed}}" type="number" name="bed" required='' style="color: black;" placeholder="Write the  number bed">
            </div>
            <div style="padding: 15px;"  class="form-group row col-6">
                <label for=""  class="col-sm-2 col-form-label col-form-label-lg" >Image </label>
                <img height="150" width="150" src="hotelimage/{{$data->image}}" alt="">
            </div>
            <div style="padding: 15px;"  class="form-group row col-12">
                <label for=""  class="col-sm-2 col-form-label col-form-label-lg" >Change Image </label>
                 <input type="file" name="file">
            </div>
            </div>
            <div style="padding: 15px;">

                <input type="submit" class="btn btn-success">
            </div>

        </form>
      </div>


    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    </div>
    <!-- End custom js for this page -->
  </body>
</html>

