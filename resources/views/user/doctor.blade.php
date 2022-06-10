<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp display-4">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach($doctor as $doctors)



        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
            </div>
            <div class="py-3">
            <center><a href="{{'appointdr'}}" class="btn btn-primary">Create Appointment</a></center>
            </div>
            
          </div>
        </div>

      @endforeach

        
      </div>
    </div>
  </div>