<div class="page-section">
    <div class="container-fluid"> <!-- استخدام container-fluid -->

@include('Aldahmani.dctor_css')

        <h1 class="text-center custom-title wow fadeInUp">
            وقت الاطباء
        </h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach ($D_doctor as $D_doctor )
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="doctorimage/{{$D_doctor->image}}" alt="">
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
