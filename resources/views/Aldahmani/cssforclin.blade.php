<style>
    body {
      background-color: rgb(250, 252, 253);
    }

    .card {
      border-radius: 15px; /* زوايا دائرية للبطاقة */
      position: relative; /* لجعل الزر يظهر بشكل صحيح */
    }

    .card-header {
      background-color: #6b8893; /* لون خلفية رأس البطاقة */
      padding: 20px; /* إضافة حشو للبطاقة */
      position: relative;
    }

    .back-button {
      position: absolute; /* جعل الزر في وضع مطلق */
      right: 20px; /* تحريك الزر نحو الناحية اليمنى */
      bottom: 10px; /* تحريك الزر لأسفل */
      padding: 12px 25px; /* زيادة الحشو */
      background-color: #007bff;
      color: white;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s; /* تأثير الانتقال عند التمرير */
    }

    .back-button:hover {
      background-color: #0056b3; /* تغيير اللون عند التمرير */
    }

    /* إعدادات لشاشات الحواسيب الكبيرة */
    @media (min-width: 992px) {
      .back-button {
        bottom: -50px; /* تعديل المسافة أسفل البطاقة */
      }
    }

    @media (max-width: 576px) {
      .back-button {
        font-size: 0.9rem; /* تصغير حجم الخط في الهواتف */
        bottom: -10px; /* تعديل المسافة لأسفل على الشاشات الصغيرة */
      }
    }
  </style>
