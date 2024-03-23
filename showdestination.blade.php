
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    table{
        margin: 100px;
        text-align: center;
        justify-content: center;
        align-items: flex-start;
    }

    </style>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
  <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top:100px;">
            <table class="table table-striped table-dark">

                <tr style="background-color: black;">

                    <th scope="col" style="padding: 10px;">Country Name</th>
                    <th scope="col" style="padding: 10px;"> NumberTours</th>
                    <th scope="col" style="padding: 10px;">Number Place</th>
                    <th scope="col" style="padding: 10px;">Image</th>
                    <th scope="col" style="padding: 10px;">Delete</th>

                    <th style="padding: 10px;">Update</th>

                </tr>
                @foreach ($data as $destination )


             <tr  align='center' style="background-color: skyblue">

                <td scope="col" > {{$destination->name}} </td>
                <td scope="col">{{$destination->tours}}</td>
                <td scope="col">{{$destination->place}}</td>
                <td scope="col"><img height="100" width="100" src="destinationimage/{{$destination->image}}" alt=""></td>
                <td scope="col"><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href="{{url('deletedestination',$destination->id)}}">Delete</a></td>
                <td scope="col"><a class="btn btn-primary" href="{{url('updatedestination',$destination->id)}}">Update</a></td>

             </tr>
                @endforeach

                </table>
        </div>
    </div>


                <div class="">
                    {{$data->links()}}
                </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </div>

    <!-- End custom js for this page -->
  </body>
</html>
