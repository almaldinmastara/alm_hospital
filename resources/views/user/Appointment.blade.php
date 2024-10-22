<div class="page-section">
  <div class="container">
    <h1 class="text-center wow fadeInUp">إنشاء موعد مع طبيب</h1>

    <form class="main-form" action="{{ url('appoinment') }}" method="POST">
      @csrf

      <div class="row mt-5">
        <!-- Input for name -->
        <div class="col-md-6 col-12 py-2 wow fadeInLeft">
          <input type="text" name="name" class="form-control" placeholder="اسمك رباعي" required>
        </div>

        <!-- Dropdown for age -->
        <div class="col-md-6 col-12 py-2 wow fadeInRight">
          <select name="phone" class="custom-select" required>
            <option value="" selected>اختار عمرك حسب الفئة</option>
            @for ($i = 1; $i <= 100; $i += 5)
              <option value="{{ $i }}-{{ $i+4 }}">{{ $i }}-{{ $i+4 }} years</option>
            @endfor
          </select>
        </div>

        <!-- Input for date -->
        <div class="col-md-6 col-12 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input type="date" name="date" class="form-control" required>
        </div>

        <!-- Dropdown for doctor -->
        <div class="col-md-6 col-12 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="doctor" id="departement" class="custom-select" required>
            <option value="" selected>اختار طبيبك</option>
            @foreach ($doctor as $doctors)
              <option value="{{ $doctors->name }}">
                {{ $doctors->name }} - يتخصص في {{ $doctors->specialty }}
              </option>
            @endforeach
          </select>
        </div>

        <!-- Input for email -->
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <input type="text" name="email" class="form-control" placeholder="الجوال" required>
        </div>

        <!-- Textarea for message -->
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="بماذا تشعر.." required></textarea>
        </div>
      </div>

      <!-- Submit button -->
      <div class="text-center">
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">إرسال</button>
      </div>
    </form>
  </div>
</div> <!-- .page-section -->
