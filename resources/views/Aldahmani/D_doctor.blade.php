<div class="page-section">
    <div class="container-fluid"> <!-- استخدام container-fluid -->

        @include('Aldahmani.dctor_css')

        @if (session()->has('error'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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

                        <a class="btn btn-primary btn-md mt-3" href="{{ route('doctor.cv',$D_doctor->id) }}" target="_blank">السيرة الذاتية للطبيب</a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
