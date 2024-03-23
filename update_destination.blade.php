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

        <form action="{{url('editdestination',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px;">
                <label for="">Country Name</label>
                <input value="{{$data->name}}" type="text" name="name" required='' style="color: black;" placeholder="Write the name">
            </div>
            <div style="padding: 15px;">
                <label for=""> Tours</label>
                <input value="{{$data->tours}}" type="number" name="nt" required='' style="color: black;" placeholder="Write the  tours">
            </div>
            <div style="padding: 15px;">
                <label for=""> Place</label>
                <input value="{{$data->place}}" type="number" name="np" required='' style="color: black;" placeholder="Write the  place">
            </div>
            <div style="padding: 15px;">
                <label for="">Image </label>
                <img height="150" width="150" src="destinationimage/{{$data->image}}" alt="">
            </div>
            <div style="padding: 15px;">
                <label for="">Change Image </label>
                 <input type="file" name="file">
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

