<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">


    </style>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')

     <div class="container-fluid page-body-wrapper" >
        <div align="center" style="padding-top:100px; ">
            <table class="table table-striped table-dark">
                <tr style="background-color: black;">
                    <th style="padding: 10px;">Country Name</th>
                    <th style="padding: 10px;"> Prix</th>
                    <th style="padding: 10px;">Number Days</th>
                    <th style="padding: 10px;">Number Star</th>
                    <th style="padding: 10px;">Transportation</th>
                    <th style="padding: 10px;">Food</th>
                    <th style="padding: 10px;">Review</th>
                    <th style="padding: 10px;">Image</th>
                    <th style="padding: 10px;">Delete</th>
                    <th style="padding: 10px;">Update</th>

                </tr>
                @foreach ($data as $package )


             <tr  align='center' style="background-color: skyblue">
                <td> {{$package->name}} </td>
                <td> {{$package->prix}} </td>
                <td>{{$package->days}}</td>
                <td>{{$package->star}}</td>
                <td>{{$package->transportation}}</td>
                <td>{{$package->food}}</td>
                <td>{{$package->review}}</td>
                <td><img height="100" width="100" src="packageimage/{{$package->image}}" alt=""></td>
                <td><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href="{{url('deletepackage',$package->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updatepackage',$package->id)}}">Update</a></td>

             </tr>
                @endforeach

                </table>
                {{$data->links()}}
        </div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    </div>
    <!-- End custom js for this page -->
  </body>
</html>
