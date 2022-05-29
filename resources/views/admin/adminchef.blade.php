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
     <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
     @csrf
        <div>
        <label>Name</label>
        <input style="color:blue" type="text" name="name" required="" placeholder="Enter name">
        </div>

        <div>
        <label>speciality</label>
        <input style="color:blue" type="text" name="speciality" required="" placeholder="Enter speciality">
        </div>

        <div>
        <input type="file" name="image" required="">
        </div>

        <div>
        <input type="submit" value="save">
        </div>
     </form>
   
      </div>
          
    <!-- plugins:js -->
  @include("admin.adminscript")

    
  </body>
</html>
