<div class="page-section">
    <div class="container-fluid"> <!-- استخدام container-fluid -->

@include('Aldahmani.dctor_css')

        <h1 class="text-center custom-title wow fadeInUp">
            وقت الاطباء
        </h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach ($doctors as $doctors )
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="doctorimage/{{$doctors->image}}" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{ $doctors->name }}</p>
                        <span class="text-sm text-grey">{{ $doctors->hire_date }}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
