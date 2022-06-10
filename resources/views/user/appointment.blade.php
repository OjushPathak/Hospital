<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp display-4">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="post">
        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow">
            <input type="text" class="form-control" placeholder="Full name" name="name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow">
            <input type="text" class="form-control" placeholder="Email address.." name="email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow " data-wow-delay="300ms">
            <input type="date" class="form-control"  name="date"> 
          </div>
          <div class="col-12 col-sm-6 py-2 wow " data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

            <option value="doctor">Doctors</option>
            @foreach($doctor as $doctors)
              
              <option value="{{$doctors->name}}">{{$doctors->name}}-{{$doctors->speciality}}</option>
            @endforeach
              
            </select>
          </div>
          <div class="col-12 py-2 wow " data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number.." name="number">
          </div>
          <div class="col-12 py-2 wow " data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" style="" class="btn btn-primary visible">Submit Request</button>
        
        </div>
      </form>
    </div>
  </div> <!-- .page-section -->
  

 