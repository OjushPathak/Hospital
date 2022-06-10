<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>

label{
    display: inline-block;
    width:200px;
}
</style>
        
  
  <base href="/public">
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


    <div class="container" align="center" style="padding-top:70px;">

            @if(session()->has('message'))

            <div class="alert alert-success">
            
            {{session()->get('message')}}<button type="button" class="close" data-dismiss="alert"> x </button>
            </div>

            @endif



    <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">

    @csrf
      

        <div style="padding:15px;" class="">

            <label for="">Doctor Name</label>
            <input class="rounded" type="text" name="name" style="color:black;" value="{{$data->name}}" placeholder="Doctor's name" required="">

        </div>

        <div style="padding:15px;" class="">

            <label for="">Phone</label>
            <input class="rounded" type="text" name="number" style="color:black;" value="{{$data->phone}}" placeholder="Doctor's Number" required="">

        </div>

        <div style="padding:15px;" class="">

            <label for="">Speciality</label>
            <select class="rounded" style="color:black; width:220px;" name="speciality" id="" required="">

            <option value="">{{$data->speciality}}</option>
            <option value="Skin Care">Skin Care</option>
            <option value="Dentist">Dentist</option>
            <option value="Cardiologist">Cardiologist</option>
            <option value="Eye Optometrisis">Eye Optometrisis</option>
            <option value="ENT">ENT</option>

            </select>

        </div>

        <div style="padding:15px;" class="">

            <label for="">Room Number</label>
            <input class="rounded" type="text" name="room" style="color:black;" value="{{$data->room}}" placeholder="Doctor's Room Number" required="">

        </div>

        <div style="padding:15px; margin-left:100px;" >

            <label for="">Old Image</label>
            <img src="doctorimage/{{$data->image}}" alt="">
            

        </div>

        <div class="">
            <label for="">Change Image</label>
            <input class="rounded" type="file" value="{{$data->image}}" name="file">
        </div>

        <div style="padding:15px;" class="">

            
            <button type="Submit" class="btn btn-success"> Submit</button>

        </div>

    </form>    
</div>


</div>












    </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>