<?php

return [
    'resource' => [
        'label' => 'Yetkazib beruvchi',
        'plural_label' => 'Yetkazib beruvchilar',
    ],

    'fields' => [
        'name' => 'Nomi',
        'document' => 'Ro\'yxatga olish raqami (NEQ)',
        'role' => 'Rol',
        'risk' => 'Xavf',
        'services' => 'Xizmatlar',
        'data_categories' => 'Uzatiladigan axborot',
        'location' => 'Joylashuv (viloyat yoki mamlakat)',
        'pia_completed_at' => 'Maxfiylikka ta\'sirni baholash sanasi',
        'pia_reference' => 'Baholash havolasi',
        'contact' => 'Aloqa',
        'dpa_signed_at' => 'Shartnoma imzolangan',
        'dpa_expires_at' => 'Shartnoma tugaydi',
        'dpa_checklist' => 'Shartnoma qamrab oladi',
        'notes' => 'Izohlar',
        'issues' => 'Muammolar',
        'no_issues' => 'Yo\'q',
        'next_review' => 'Keyingi tekshiruv',
    ],

    'sections' => [
        'agreement' => 'Topshiriq yoki xizmat shartnomasi (18.3-modda)',
    ],

    'help' => [
        'location' => 'QC, boshqa viloyat (ON, BC...) yoki mamlakat. Kvebekdan tashqarida avval maxfiylik omillarini baholang (17-modda).',
        'agreement' => 'Xizmat ko\'rsatuvchi shaxsiy axborotni roziliksiz faqat yozma shartnoma asosida oladi (18.3-modda).',
        'terminate' => 'Shundan so\'ng yetkazib beruvchi axborotni yo\'q qilishi yoki qaytarishi kerak.',
    ],

    'filters' => [
        'active' => 'Faol',
    ],

    'roles' => [
        'service_provider' => 'Xizmat ko\'rsatuvchi',
        'third_party' => 'Uchinchi tomon',
    ],

    'risks' => [
        'low' => 'Past',
        'medium' => 'O\'rta',
        'high' => 'Yuqori',
    ],

    'issues' => [
        'agreement_missing' => 'Yozma shartnoma yo\'q',
        'agreement_expired' => 'Shartnoma muddati tugagan',
        'agreement_incomplete' => 'Shartnoma to\'liq emas',
        'assessment_missing' => 'Maxfiylikka ta\'sirni baholash yo\'q',
        'review_due' => 'Tekshiruv vaqti keldi',
        'data_return_pending' => 'Yo\'q qilish yoki qaytarish kutilmoqda',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Axborot maxfiyligini himoya qilish choralari (18.3-modda)',
        'mandate_only' => 'Axborot faqat topshiriq yoki shartnomani bajarish uchun ishlatiladi (18.3-modda)',
        'no_retention' => 'Shartnoma tugagach axborot saqlanmaydi (18.3-modda)',
        'incident_notice' => 'Maxfiylikning har qanday buzilishi yoki buzishga urinish haqida mas\'ul shaxsimizga kechiktirmay xabar beradi (18.3-modda)',
        'verification' => 'Maxfiylikka rioya qilinishini tekshirishimizga ruxsat beradi (18.3-modda)',
        'outside_quebec_protection' => 'Kvebekdan tashqarida: maxfiylikka ta\'sirni baholash talab qilganidek yetarli himoya (17-modda)',
    ],

    'actions' => [
        'review' => 'Tekshirilgan deb belgilash',
        'terminate' => 'Hamkorlikni tugatish',
        'data_returned' => 'Axborot yo\'q qilindi yoki qaytarildi',
    ],

    'notifications' => [
        'reviewed' => 'Yetkazib beruvchi tekshirildi',
    ],
];
