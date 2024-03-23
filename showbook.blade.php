<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    table{
        margin: 50px;
        text-align: center;
        justify-content: center;
    }

    </style>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper ">
        <div align="center"  style="padding-top:100px; overflow-x: auto">
            <table class="table table-striped table-dark">

                <tr style="background-color: black;">

                    <th scope="col" style="padding: 10px;"> Name</th>
                    <th scope="col" style="padding: 10px;"> Email</th>
                    <th scope="col" style="padding: 10px;">Phone</th>
                    <th scope="col" style="padding: 10px;">Address</th>
                    <th scope="col" style="padding: 10px;">Where to</th>
                    <th scope="col" style="padding: 10px;">How many</th>
                    <th scope="col" style="padding: 10px;">Arrivals</th>
                     <th scope="col" style="padding: 10px;">Leaving</th>
                    <th scope="col" style="padding: 10px;">Delete</th>




                </tr>
                @foreach ($data as $book )


             <tr  align='center' style="background-color: skyblue">

                <td scope="col" > {{$book->name}} </td>
                <td scope="col">{{$book->email}}</td>
                <td scope="col">{{$book->phone}}</td>
                <td scope="col">{{$book->address}}</td>
                <td scope="col">{{$book->where_to}}</td>
                <td scope="col">{{$book->how_many}}</td>
                <td scope="col">{{$book->arrivals}}</td>
                 <td scope="col">{{$book->leaving}}</td>
                <td scope="col"><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href="{{url('deletebook',$book->id)}}">Delete</a></td>

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
