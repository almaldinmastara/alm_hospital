<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">اطباءنا</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach ($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img class="img-fluid" height="300px" src="doctorimage/{{$doctors->image}}" alt="{{ $doctors->name }}">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body text-center">
              <p class="text-xl mb-0">{{ $doctors->name }}</p>
              <p class="text-xl mb-0">{{ $doctors->specialty }}</p>
              <span class="text-sm text-grey">وقت العمل: {{ $doctors->hire_date }}</span>
              <a class="btn btn-primary btn-md mt-3" href="{{ url('doctor_CV',$doctors->id) }}">السيرة الذاتية للطبيب</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
