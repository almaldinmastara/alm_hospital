<style>
    body {
        display: flex;
        height: 100vh;
        overflow: hidden;
        font-size: 1.2rem; /* زيادة حجم الخط */
    }

    .sidebar {
        width: 250px; /* عرض الشريط الجانبي */
        height: 100vh; /* ملء الشاشة عموديًا */
        background-color: #d1e7ff; /* لون خلفية الشريط الجانبي (سماوي فاتح) */
        color: black; /* لون النص داخل الشريط الجانبي */
        transition: width 0.3s;
        padding-top: 20px; /* زيادة المسافة من الأعلى */
        position: fixed; /* جعل الشريط الجانبي ثابت */
        overflow-y: auto; /* إضافة شريط تمرير عمودي */
    }

    .sidebar a {
        color: black; /* تغيير لون الروابط إلى الأسود */
        text-decoration: none;
        padding: 10px 15px; /* زيادة المسافة من حول النص */
        display: flex;
        align-items: center;
    }

    .sidebar a:hover {
        background-color: #495057; /* تغيير اللون عند المرور */
    }

    .sidebar-brand {
        padding: 1rem;
        text-align: center;
    }

    .profile-desc {
        padding: 1rem;
        display: flex;
        align-items: center;
    }

    .profile-pic {
        margin-right: 10px;
    }

    .menu-icon {
        margin-right: 10px; /* مسافة بين الأيقونة والنص */
    }

    .content {
        flex: 1;
        padding: 20px;
        margin-left: 250px; /* تباعد المحتوى عن الشريط الجانبي */
        width: calc(100% - 250px); /* لضمان عدم تداخل المحتوى مع الشريط الجانبي */
        overflow-y: auto; /* إضافة شريط تمرير عمودي للمحتوى */
    }

    .profile-desc h5,
    .profile-desc span {
        color: black; /* لون النص داخل قسم الملف الشخصي */
    }
</style>
