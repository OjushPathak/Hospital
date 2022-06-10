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



    <div class="container py-5" >
     
     <table class="table table-striped"  >
       <thead>
         <tr align="center">
           <th style="color:white; font-weight: bold">Customer Name</th>
           <th style="color:white; font-weight: bold">Customer Email</th>
           <th style="color:white; font-weight: bold">Customer Phone</th>
           <th style="color:white; font-weight: bold">Doctor Name</th>
           <th style="color:white; font-weight: bold">Date</th>
           <th style="color:white; font-weight: bold">Message</th>
           <th style="color:white; font-weight: bold">Status</th>
           <th style="color:white; font-weight: bold">Approve</th>
           <th style="color:white; font-weight: bold">Cancel</th>
         </tr>
       </thead>
   
       
        @foreach ($data as $app)
       <tbody>
         <tr align="center" style="color:white">
           <td style="color:white">{{$app->name}}</td>
           <td style="color:white">{{$app->email}}</td>
           <td style="color:white">{{$app->phone}}</td>
           <td style="color:white">{{$app->doctor}}</td> 
           <td style="color:white">{{$app->date}}</td>  
           <td style="color:white">{{$app->message}}</td> 
           <td style="color:white">{{$app->status}}</td> 
           <td style="color:white"><a href="{{url('approved',$app->id)}}" class="btn btn-success">Approve</a></td>
           <td style="color:white"><a href="{{url('canceled',$app->id)}}" class="btn btn-danger">Cancel</a></td>  
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