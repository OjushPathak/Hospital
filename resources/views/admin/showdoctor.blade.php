<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
        
  @include('admin.css')<!-- Required meta tags -->
    
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- This is for the sidebar -->
      @include('admin.sidebar')

      <!-- This is for the navigation bar -->
      @include('admin.navbar')

      <!-- This is for the body part  -->
    <div class="container-fluid page-body">





    <div class="container py-5" align="left">
     
     <table class="table table-striped" align="left">
       <thead>
         <tr align="center">
           <th style="color:white; font-weight: bold">Doctor's Name</th>
           <th style="color:white; font-weight: bold">Doctor's Phone</th>
           <th style="color:white; font-weight: bold">Speciality</th>
           <th style="color:white; font-weight: bold">Room</th>
           <th style="color:white; font-weight: bold">Image</th>
           <th style="color:white; font-weight: bold">Update</th>
           <th style="color:white; font-weight: bold">Delete</th>
         </tr>
       </thead>
   
       
        @foreach ($data as $app)
       <tbody>
         <tr align="center" style="color:white">
           <td style="color:white">Dr. {{$app->name}}</td>
           <td style="color:white">{{$app->phone}}</td>
           <td style="color:white">{{$app->speciality}}</td>
           <td style="color:white">{{$app->room}}</td> 
           <td style="color:white"><img src="doctorimage/{{$app->image}}" alt=""></td>  

           <td><a href="{{url('updatedoctor',$app->id)}}" class="btn btn-success">Update</a></td>
           <td><a href="{{url('deletedoctor',$app->id)}}" onclick="return confirm('Are you sure to detele Doctor?')" class="btn btn-danger">Delete</a></td>
            
           </tr>
         
       </tbody>
       @endforeach
       
   
     </table>







    </div>







    </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>