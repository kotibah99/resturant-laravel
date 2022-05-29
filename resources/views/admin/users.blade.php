<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<x-app-layout>
    
  
    </x-app-layout>

    <!DOCTYPE html>
    <html lang="en">
      <head>
      @include("admin.admincss") 
      </head>
      <body>
      <div class="container-scroller">

          @include("admin.navbar")
          
          <div style="position:relative; top:60px; right:-150px">
              <table bgcolor="grey" border="3px">

                  <tr>
                      <th style="padding:30px">Name</th>
                      <th style="padding:30px">Email</th>
                      <th style="padding:30px">Action</th>
                  </tr>
                @foreach($data as $data)
                  <tr align="center">
                      <td>{{$data->name}}</td>
                      <td>{{$data->email}}</td>
                      @if($data->name=="admin")
                      <td><a>Not Allowed</a></td>
                      @else
                      <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>

                      @endif
                  </tr>
                  @endforeach

              </table>
          </div>




</div>
       
          
              
        <!-- plugins:js -->
      @include("admin.adminscript")
    
        
      </body>
    </html>
    
</body>
</html>