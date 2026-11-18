<?php

return [
    'resource' => [
        'label' => 'Təchizatçı',
        'plural_label' => 'Təchizatçılar',
    ],

    'fields' => [
        'name' => 'Ad',
        'document' => 'Qeydiyyat nömrəsi (NEQ)',
        'role' => 'Rol',
        'risk' => 'Risk',
        'services' => 'Xidmətlər',
        'data_categories' => 'Ötürülən məlumatlar',
        'location' => 'Yer (əyalət və ya ölkə)',
        'pia_completed_at' => 'Məxfiliyə təsirin qiymətləndirilməsi tarixi',
        'pia_reference' => 'Qiymətləndirmə istinadı',
        'contact' => 'Əlaqə',
        'dpa_signed_at' => 'Müqavilə imzalanıb',
        'dpa_expires_at' => 'Müqavilənin bitmə tarixi',
        'dpa_checklist' => 'Müqavilə əhatə edir',
        'notes' => 'Qeydlər',
        'issues' => 'Problemlər',
        'no_issues' => 'Yoxdur',
        'next_review' => 'Növbəti yoxlama',
    ],

    'sections' => [
        'agreement' => 'Tapşırıq və ya xidmət müqaviləsi (maddə 18.3)',
    ],

    'help' => [
        'location' => 'QC, başqa əyalət (ON, BC...) və ya ölkə. Kvebekdən kənarda əvvəlcə məxfilik amillərini qiymətləndirin (maddə 17).',
        'agreement' => 'Xidmət təminatçısı şəxsi məlumatları razılıq olmadan yalnız yazılı müqavilə əsasında alır (maddə 18.3).',
        'terminate' => 'Bundan sonra təchizatçı məlumatların məhv edilməsini və ya qaytarılmasını təmin etməlidir.',
    ],

    'filters' => [
        'active' => 'Aktiv',
    ],

    'roles' => [
        'service_provider' => 'Xidmət təminatçısı',
        'third_party' => 'Üçüncü tərəf',
    ],

    'risks' => [
        'low' => 'Aşağı',
        'medium' => 'Orta',
        'high' => 'Yüksək',
    ],

    'issues' => [
        'agreement_missing' => 'Yazılı müqavilə yoxdur',
        'agreement_expired' => 'Müqavilənin müddəti bitib',
        'agreement_incomplete' => 'Müqavilə natamamdır',
        'assessment_missing' => 'Məxfiliyə təsirin qiymətləndirilməsi yoxdur',
        'review_due' => 'Yoxlama vaxtı çatıb',
        'data_return_pending' => 'Məhv edilmə və ya qaytarılma gözləyir',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Məlumatların məxfiliyini qorumaq üçün tədbirlər (maddə 18.3)',
        'mandate_only' => 'Məlumatlar yalnız tapşırığı və ya müqaviləni icra etmək üçün istifadə olunur (maddə 18.3)',
        'no_retention' => 'Müqavilə bitdikdən sonra məlumatlar saxlanmır (maddə 18.3)',
        'incident_notice' => 'Məxfiliyin hər hansı pozulması və ya pozulma cəhdi barədə cavabdeh şəxsimizə dərhal bildirir (maddə 18.3)',
        'verification' => 'Məxfiliyə riayəti yoxlamağımıza imkan verir (maddə 18.3)',
        'outside_quebec_protection' => 'Kvebekdən kənarda: məxfiliyə təsirin qiymətləndirilməsinin tələb etdiyi adekvat qoruma (maddə 17)',
    ],

    'actions' => [
        'review' => 'Yoxlanılmış kimi qeyd et',
        'terminate' => 'Əlaqəni bitir',
        'data_returned' => 'Məlumatlar məhv edildi və ya qaytarıldı',
    ],

    'notifications' => [
        'reviewed' => 'Təchizatçı yoxlanıldı',
    ],
];
