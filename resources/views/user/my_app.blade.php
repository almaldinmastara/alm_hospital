<style>
    /* تمدد حقول الجدول حسب المحتوى */
    table {
      width: 100%;
      table-layout: auto; /* الاعتماد على المحتوى في تحديد عرض الأعمدة */
    }

    th, td {
      white-space: nowrap; /* منع النص من الانتقال إلى سطر جديد */
      text-align: center; /* تنسيق النص في الوسط */
      padding: 20px; /* مسافة إضافية بين النص وحدود الخلية */
    }

    /* لجعل الجدول يستجيب ويتمدّد عند الحاجة */
    .table-responsive {
      overflow-x: auto;
    }

    /* تخصيص لزيادة عرض الرأس */
    th {
      font-size: 20px;
      background-color: #778899;
      color: black;
    }
  </style>