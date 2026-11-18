<?php

return [
    'resource' => [
        'label' => 'Tedarikçi',
        'plural_label' => 'Tedarikçiler',
    ],

    'fields' => [
        'name' => 'Ad',
        'document' => 'Kayıt numarası (NEQ)',
        'role' => 'Rol',
        'risk' => 'Risk',
        'services' => 'Hizmetler',
        'data_categories' => 'Aktarılan bilgiler',
        'location' => 'Konum (eyalet veya ülke)',
        'pia_completed_at' => 'Gizlilik etki değerlendirmesi tarihi',
        'pia_reference' => 'Değerlendirme referansı',
        'contact' => 'İletişim',
        'dpa_signed_at' => 'Sözleşme imza tarihi',
        'dpa_expires_at' => 'Sözleşme bitiş tarihi',
        'dpa_checklist' => 'Sözleşme kapsamı',
        'notes' => 'Notlar',
        'issues' => 'Eksikler',
        'no_issues' => 'Yok',
        'next_review' => 'Sonraki inceleme',
    ],

    'sections' => [
        'agreement' => 'Vekalet veya hizmet sözleşmesi (md. 18.3)',
    ],

    'help' => [
        'location' => 'QC, başka bir eyalet (ON, BC...) veya bir ülke. Quebec dışında önce gizlilik etkenlerini değerlendirin (md. 17).',
        'agreement' => 'Hizmet sağlayıcı kişisel bilgileri rıza olmadan yalnızca yazılı bir sözleşmeyle alır (md. 18.3).',
        'terminate' => 'Tedarikçi bundan sonra bilgilerin imhası veya iadesiyle yükümlü olur.',
    ],

    'filters' => [
        'active' => 'Aktif',
    ],

    'roles' => [
        'service_provider' => 'Hizmet sağlayıcı',
        'third_party' => 'Üçüncü taraf',
    ],

    'risks' => [
        'low' => 'Düşük',
        'medium' => 'Orta',
        'high' => 'Yüksek',
    ],

    'issues' => [
        'agreement_missing' => 'Yazılı sözleşme yok',
        'agreement_expired' => 'Sözleşmenin süresi doldu',
        'agreement_incomplete' => 'Sözleşme eksik',
        'assessment_missing' => 'Gizlilik etki değerlendirmesi yok',
        'review_due' => 'İnceleme zamanı geldi',
        'data_return_pending' => 'İmha veya iade bekliyor',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Bilgilerin gizliliğini koruma önlemleri (md. 18.3)',
        'mandate_only' => 'Bilgiler yalnızca vekaletin veya sözleşmenin ifası için kullanılır (md. 18.3)',
        'no_retention' => 'Bilgiler sözleşme bittikten sonra saklanmaz (md. 18.3)',
        'incident_notice' => 'Gizliliğin her türlü ihlalini veya ihlal girişimini sorumlu kişimize gecikmeden bildirir (md. 18.3)',
        'verification' => 'Gizliliğe uyumu doğrulamamıza izin verir (md. 18.3)',
        'outside_quebec_protection' => 'Quebec dışında: gizlilik etki değerlendirmesinin gerektirdiği yeterli koruma (md. 17)',
    ],

    'actions' => [
        'review' => 'İncelendi olarak işaretle',
        'terminate' => 'İlişkiyi sonlandır',
        'data_returned' => 'Bilgiler imha edildi veya iade edildi',
    ],

    'notifications' => [
        'reviewed' => 'Tedarikçi incelendi',
    ],
];
