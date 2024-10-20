<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">انشاء موعد مع طبيب</h1>

      <form class="main-form" action="{{('appoinment') }}" method="POST">
        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="اسمك رباعي">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
           <!-- <input type="text" name="phone" class="form-control" placeholder="age.."> -->
            <select name="phone" class="custom-select">
                <option value="">اختار عمرك حسب الفئة</option>
                <option value="1-5">1-5 years</option>
                <option value="6-10">6-10 years</option>
                <option value="11-15">11-15 years</option>
                <option value="16-20">16-20 years</option>
                <option value="21-25">21-25 years</option>
                <option value="26-30">26-30 years</option>
                <option value="31-35">31-35 years</option>
                <option value="36-40">36-40 years</option>
                <option value="41-45">41-45 years</option>
                <option value="46-50">46-50 years</option>
                <option value="51-55">51-55 years</option>
                <option value="56-60">56-60 years</option>
                <option value="61-65">61-65 years</option>
                <option value="66-70">66-70 years</option>
                <option value="71-75">71-75 years</option>
                <option value="76-80">76-80 years</option>
                <option value="81-85">81-85 years</option>
                <option value="86-90">86-90 years</option>
                <option value="91-95">91-95 years</option>
                <option value="96-100">96-100 years</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

               <option> اختار طبيبك</option>

            @foreach ($doctor as $doctors)
              <option value="{{$doctors->name}}">{{$doctors->name}}
                 _يتخصص في _                               {{$doctors->specialty}}
              </option>
             @endforeach
            </select>
          </div>

          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="email" class="form-control" placeholder="الجوال..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="بماذا تشعر.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">ارسال</button>
      </form>
    </div>
  </div> <!-- .page-section -->
