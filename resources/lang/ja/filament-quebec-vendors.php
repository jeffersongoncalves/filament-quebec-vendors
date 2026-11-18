<?php

return [
    'resource' => [
        'label' => '委託先',
        'plural_label' => '委託先',
    ],

    'fields' => [
        'name' => '名称',
        'document' => '登録番号（NEQ）',
        'role' => '役割',
        'risk' => 'リスク',
        'services' => 'サービス',
        'data_categories' => '提供する情報',
        'location' => '所在地（州または国）',
        'pia_completed_at' => 'プライバシー影響評価の実施日',
        'pia_reference' => '評価の参照番号',
        'contact' => '連絡先',
        'dpa_signed_at' => '契約締結日',
        'dpa_expires_at' => '契約満了日',
        'dpa_checklist' => '契約の対象',
        'notes' => 'メモ',
        'issues' => '課題',
        'no_issues' => 'なし',
        'next_review' => '次回レビュー',
    ],

    'sections' => [
        'agreement' => '委任または役務契約（第18.3条）',
    ],

    'help' => [
        'location' => 'QC、他の州（ON、BC…）または国。ケベック州外の場合は、まずプライバシー要因を評価してください（第17条）。',
        'agreement' => 'サービス提供者は、書面による契約がある場合にのみ同意なく個人情報を受け取れます（第18.3条）。',
        'terminate' => '以後、ベンダーは情報の破棄または返却が必要になります。',
    ],

    'filters' => [
        'active' => '有効',
    ],

    'roles' => [
        'service_provider' => 'サービス提供者',
        'third_party' => '第三者',
    ],

    'risks' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'issues' => [
        'agreement_missing' => '書面契約なし',
        'agreement_expired' => '契約期限切れ',
        'agreement_incomplete' => '契約が不完全',
        'assessment_missing' => 'プライバシー影響評価なし',
        'review_due' => 'レビュー期限',
        'data_return_pending' => '破棄または返却待ち',
    ],

    'checklist' => [
        'confidentiality_measures' => '情報の機密性を保護する措置（第18.3条）',
        'mandate_only' => '情報は委任または契約の履行のためにのみ利用されます（第18.3条）',
        'no_retention' => '契約終了後は情報を保持しません（第18.3条）',
        'incident_notice' => '機密性の侵害または侵害の試みがあれば、当社の責任者に遅滞なく通知します（第18.3条）',
        'verification' => '機密性の遵守状況を当社が確認できるようにします（第18.3条）',
        'outside_quebec_protection' => 'ケベック州外：プライバシー影響評価が求める適切な保護（第17条）',
    ],

    'actions' => [
        'review' => 'レビュー済みにする',
        'terminate' => '取引を終了',
        'data_returned' => '情報を破棄または返却済み',
    ],

    'notifications' => [
        'reviewed' => '委託先をレビューしました',
    ],
];
