<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    table{
        margin: 0px;
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

                    <th style="padding: 10px;">Days</th>
                    <th style="padding: 10px;"> Cie</th>
                    <th style="padding: 10px;">N°vol</th>
                    <th style="padding: 10px;">Type</th>
                    <th style="padding: 10px;">Prevenance</th>
                    <th style="padding: 10px;">Arrive</th>
                    <th style="padding: 10px;">Depart</th>
                    <th style="padding: 10px;">Destination</th>
                    <th style="padding: 10px;">Delete</th>
                    <th style="padding: 10px;">Update</th>

                </tr>
                 @foreach ($vols as $vol )


             <tr  align='center' style="background-color: skyblue">
                <td > {{$vol->day->days}} </td>
                 <td> {{ $vol->airline->cie }} </td>
                <td>{{$vol->N°vol}}</td>
                <td>{{$vol->type}}</td>
                <td>{{$vol->provenance}}</td>
                <td>{{$vol->arrive}}</td>
                <td>{{$vol->depart}}</td>
                <td>{{$vol->destination}}</td>

                <td><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href="{{url('deletevol',$vol->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updatevol',$vol->id)}}">Update</a></td>

             </tr>
                @endforeach

                </table>
                {{$vols->links()}}
        </div>
    </div>







    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
        </div>
    <!-- End custom js for this page -->
  </body>
</html>
