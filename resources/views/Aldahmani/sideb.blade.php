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
                <img class="img-xs rounded-circle" src="admin/assets/images/faces/20.jpg" alt="">
            </div>
            <div>
                <h5 class="mb-0">علم الدين يوسف</h5>
                <span>مشرف العيادات</span>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_algalb') }}">
                    <span class="menu-icon"><i class="mdi mdi-heart"></i></span>
                    <span>القلب</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_alazam') }}">
                    <span class="menu-icon"><i class="mdi mdi-bone"></i></span>
                    <span>العظام</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_shuga') }}">
                    <span class="menu-icon"><i class="mdi mdi-cup"></i></span>
                    <span>عيادة السكر و الغدد</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_g_helth') }}">
                    <span class="menu-icon"><i class="mdi mdi-medical-bag"></i></span>
                    <span>الصحة العامة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_children') }}">
                    <span class="menu-icon"><i class="mdi mdi-baby-face"></i></span>
                    <span>عيادة الاطفال</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_skin') }}">
                    <span class="menu-icon"><i class="mdi mdi-skin"></i></span>
                    <span>عيادة الجلدية</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_gayene') }}">
                    <span class="menu-icon"><i class="mdi mdi-woman"></i></span>
                    <span>نساء و ولادة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_batna') }}">
                    <span class="menu-icon"><i class="mdi mdi-skin"></i></span>
                    <span>باطنة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_jraha_g') }}">
                    <span class="menu-icon"><i class="mdi mdi-surgery"></i></span>
                    <span>جراحة عامة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_msalik') }}">
                    <span class="menu-icon"><i class="mdi mdi-skin"></i></span>
                    <span>مسالك بولية</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_foot_h') }}">
                    <span class="menu-icon"><i class="mdi mdi-food"></i></span>
                    <span>تغذية عامة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_Ent') }}">
                    <span class="menu-icon"><i class="mdi mdi-ear-hearing"></i></span>
                    <span>اذن و انف و حنجرة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_eyes') }}">
                    <span class="menu-icon"><i class="mdi mdi-eye"></i></span>
                    <span>عيادة العيون</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_ashea') }}">
                    <span class="menu-icon"><i class="mdi mdi-radiology"></i></span>
                    <span>الاشعة</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('D_askhsayatfal') }}">
                    <span class="menu-icon"><i class="mdi mdi-baby-carriage"></i></span>
                    <span>اخصائي الاطفال</span>
                </a>
            </li>

            <!-- إضافة المزيد من العناصر هنا -->
        </ul>
    </nav>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
