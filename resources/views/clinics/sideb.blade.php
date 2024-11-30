<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <title>Sidebar</title>
    @include('Aldahmani.css')


</head>
<body>
    <nav class="sidebar">
        <div class="sidebar-brand">
            <a href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" class="img-fluid" /></a>
        </div>
        <div class="profile-desc d-flex align-items-center">
            <div class="profile-pic">
                <img class="img-xs rounded-circle" src="admin/assets/images/faces/face18.jpg" alt="">
            </div>
            <div>
                <h5 class="mb-0">مشرف عيادات الوقائي</h5>

            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_algalb') }}">
                    <span class="menu-icon"><i class="mdi mdi-heart"></i></span>
                    <span>عيادة القلب</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_alazam') }}">
                    <span class="menu-icon"><i class="mdi mdi-bone"></i></span>
                    <span>عيادة العظام</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_sadrya') }}">
                    <span class="menu-icon"><i class="mdi mdi-lungs"></i></span>
                    <span>عيادة الصدرية</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_aljehazh') }}">
                    <span class="menu-icon"><i class="mdi mdi-scalpel"></i></span>
                    <span>عيادة الجراحة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_aoayadmoya') }}">
                    <span class="menu-icon"><i class="mdi mdi-vessel"></i></span>
                    <span>أوعية دموية</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_bpholter') }}">
                    <span class="menu-icon"><i class="mdi mdi-heart-pulse"></i></span>
                    <span>عيادة BP holter</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_children') }}">
                    <span class="menu-icon"><i class="mdi mdi-baby-face"></i></span>
                    <span>عيادة الاطفال</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_ecg') }}">
                    <span class="menu-icon"><i class="mdi mdi-heart-outline"></i></span>
                    <span>E C G</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_Ent') }}">
                    <span class="menu-icon"><i class="mdi mdi-ear-hearing"></i></span>
                    <span>الاذن و الانف و الحنجرة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_eyes') }}">
                    <span class="menu-icon"><i class="mdi mdi-eye"></i></span>
                    <span>عيادة العيون</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_gayene') }}">
                    <span class="menu-icon"><i class="mdi mdi-woman"></i></span>
                    <span>النساء و الولادة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_hadesealwlada') }}">
                    <span class="menu-icon"><i class="mdi mdi-baby-carriage"></i></span>
                    <span>عيادة حديثي الولادة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_jerahachildren') }}">
                    <span class="menu-icon"><i class="mdi mdi-child"></i></span>
                    <span>عيادة جراحة الاطفال</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_jraha_g') }}">
                    <span class="menu-icon"><i class="mdi mdi-surgery"></i></span>
                    <span>الجراحة العامة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_jerahtalsamna') }}">
                    <span class="menu-icon"><i class="mdi mdi-weight-lifter"></i></span>
                    <span>جراحة السمنة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_mnazeratfal') }}">
                    <span class="menu-icon"><i class="mdi mdi-video"></i></span>
                    <span>مناظير الاطفال</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_msalik') }}">
                    <span class="menu-icon"><i class="mdi mdi-bone"></i></span>
                    <span>مسالك بولية</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_mnazer') }}">
                    <span class="menu-icon"><i class="mdi mdi-video"></i></span>
                    <span>مناظير </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_jerah_msalik') }}">
                    <span class="menu-icon"><i class="mdi mdi-surgery"></i></span>
                    <span>جراحة المسالك</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('w_majhod') }}">
                    <span class="menu-icon"><i class="mdi mdi-heart-pulse"></i></span>
                    <span>عيادة الجهد</span>
                </a>
            </li>
        </ul>

    </nav>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
