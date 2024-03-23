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
    <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top:100px;">
            <table class="table table-striped table-dark">
                <tr style="background-color: black;">
                    <th style="padding: 10px;">Name</th>
                    <th style="padding: 10px;"> Email</th>
                    <th style="padding: 10px;"> Service</th>

                    <th style="padding: 10px;">Delete</th>
                    <th style="padding: 10px;">Update</th>

                </tr>
                 @foreach ($employe as $emp )


             <tr  align='center' style="background-color: skyblue">
                <td>{{$emp->name}}</td>
                <td>{{$emp->email}}</td>
                <td > {{$emp->service->name}} </td>

                <td><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href="{{url('deleteemploye',$emp->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updateemploye',$emp->id)}}">Update</a></td>

             </tr>
                @endforeach

                </table>
                {{$employe->links()}}
        </div>

    </div>




    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
        </div>
    <!-- End custom js for this page -->
  </body>
</html>
