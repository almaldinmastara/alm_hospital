<style>
    .custom-title {
        font-size: 2.5rem; /* حجم الخط */
        color: #4a4a4a; /* لون النص */
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); /* ظل النص */
        margin-bottom: 30px; /* المسافة السفلية */
        transition: color 0.3s ease; /* تأثير انتقال اللون */
        padding: 10px; /* مساحة داخلية */
        border: 2px solid #007bff; /* إطار */
        border-radius: 10px; /* زوايا دائرية للإطار */
        background-color: rgba(255, 255, 255, 0.8); /* خلفية بيضاء هادئة مع شفافية */
        width: 100%; /* عرض كامل */
        text-align: center; /* توسيط النص */
    }

    .custom-title:hover {
        color: #007bff; /* تغيير اللون عند التمرير */
    }

    .card-doctor {
        margin: 20px; /* زيادة المسافة بين البطاقات */
        flex: 0 0 45%; /* عرض البطاقة ليكون 45% */
        max-width: 300px; /* تعيين عرض أقصى للبطاقة */
        height: auto; /* السماح للارتفاع بالتكيف مع المحتوى */
        transition: transform 0.3s; /* تأثير التحرك عند التمرير */
    }

    .card-doctor:hover {
        transform: scale(1.05); /* تكبير البطاقة عند التمرير */
    }

    .body {
        display: flex; /* استخدام Flexbox */
        flex-direction: column; /* ترتيب العناصر عمودياً */
        align-items: center; /* توسيط العناصر أفقياً */
        text-align: center; /* توسيط النص */
        padding: 10px; /* إضافة مساحة داخلية */
        width: 100%; /* عرض كامل */
    }

    .body p {
        font-size: 1.2rem; /* تعديل حجم الخط هنا */
        margin-bottom: 0; /* إزالة المسافة السفلية */
    }

    .body span {
        font-size: 1rem; /* تعديل حجم خط تاريخ التوظيف */
    }

    /* تحسين العرض في الشاشات الصغيرة */
    @media (max-width: 768px) {
        .custom-title {
            font-size: 2rem; /* تصغير حجم الخط في الشاشات الصغيرة */
        }

        .card-doctor {
            flex: 0 0 90%; /* عرض البطاقة ليكون 90% في الشاشات الصغيرة */
            max-width: 90%; /* تعيين عرض أقصى للبطاقة */
        }
    }

    @media (max-width: 576px) {
        .custom-title {
            font-size: 1.5rem; /* تصغير حجم الخط أكثر في الشاشات الصغيرة جداً */
        }

        .body p {
            font-size: 1rem; /* تصغير حجم الخط للنص في الشاشات الصغيرة جداً */
        }

        .body span {
            font-size: 0.9rem; /* تصغير حجم خط تاريخ التوظيف في الشاشات الصغيرة جداً */
        }
    }
</style>
