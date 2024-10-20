<div class="page-section">
    <div class="container">


        <style>
            .custom-title {
                font-size: 2.5rem; /* حجم الخط */
                color: #4a4a4a; /* لون النص */
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); /* ظل النص */
                margin-bottom: 30px; /* المسافة السفلية */
                transition: color 0.3s ease; /* تأثير انتقال اللون */
                padding: 10px; /* مساحة داخلية */
                border: 2px solid #007bff; /* إطار */
                border-radius: 10px; /* زوايا دائرية للإطار */
                background-color: rgba(255, 255, 255, 0.8); /* خلفية بيضاء هادئة مع شفافية */
            }

            .custom-title:hover {
                color: #007bff; /* تغيير اللون عند التمرير */
            }
        </style>

        <h1 class="text-center custom-title wow fadeInUp">
            وقت الاطباء
        </h1>




      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ($D_doctor as $D_doctor )

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" src="doctorimage/{{$D_doctor->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{ $D_doctor->name }}</p>
              <span class="text-sm text-grey">{{ $D_doctor->hire_date }}</span>
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>
