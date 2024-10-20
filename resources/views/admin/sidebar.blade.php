
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="admin/assets/images/faces/20.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Almaldin yousif</h5>
              <span>مشرف النظام</span>
            </div>
          </div>
          <a href="{{ url('showdoctor') }}" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="{{ url('showdoctor') }}"  class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                    <span class="text-primary">تحديث بيانات الدكاترة</span>

                </div>
              </div>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('Add_doctor_view') }}">
          <span class="menu-icon">
            <i class="mdi mdi-account-group"></i>
          </span>
          <span class="menu-title">Add Doctors</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('showappointment') }}">
          <span class="menu-icon">
            <i class="mdi mdi-calendar-check"></i> </i>
          </span>
          <span class="menu-title">Appointment</span>
        </a>

      </li>
 <li class="nav-item menu-items">
        <a class="nav-link">
            <span class="menu-icon">
                <i class="mdi mdi-account-group"></i>
            </span>
            <span >اجمالي المواعيد</span>
            @if(isset($opc) && !empty( $opc))
    <span style="margin-left: 20px;">{{ $opc}}</span>
@endif

        </a>


    </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('search') }}">
            <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">all doctors</span>
        </a>
    </li>

    <li class="nav-item menu-items">
        <a class="nav-link">
            <span class="menu-icon">
                <i class="mdi mdi-account-group"></i>
            </span>
            <span >العدد الكلي للدكاترة </span>
            @if(isset($d) && !empty($d))
    <span style="margin-left: 20px;">{{ $d }}</span>
@endif

        </a>


    </li>

    </ul>
  </nav>
