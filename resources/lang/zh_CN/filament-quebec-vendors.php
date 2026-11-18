<?php

return [
    'resource' => [
        'label' => '供应商',
        'plural_label' => '供应商',
    ],

    'fields' => [
        'name' => '名称',
        'document' => '注册号（NEQ）',
        'role' => '角色',
        'risk' => '风险',
        'services' => '服务',
        'data_categories' => '提供的信息',
        'location' => '所在地（省份或国家）',
        'pia_completed_at' => '隐私影响评估完成日期',
        'pia_reference' => '评估编号',
        'contact' => '联系方式',
        'dpa_signed_at' => '合同签署日期',
        'dpa_expires_at' => '合同到期日期',
        'dpa_checklist' => '合同涵盖',
        'notes' => '备注',
        'issues' => '问题',
        'no_issues' => '无',
        'next_review' => '下次审查',
    ],

    'sections' => [
        'agreement' => '委托或服务合同（第18.3条）',
    ],

    'help' => [
        'location' => 'QC、其他省份（ON、BC……）或某个国家。在魁北克省外时，请先评估隐私因素（第17条）。',
        'agreement' => '服务提供方仅可依据书面合同在未经同意的情况下接收个人信息（第18.3条）。',
        'terminate' => '之后供应商须销毁或退还这些信息。',
    ],

    'filters' => [
        'active' => '有效',
    ],

    'roles' => [
        'service_provider' => '服务提供方',
        'third_party' => '第三方',
    ],

    'risks' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'issues' => [
        'agreement_missing' => '无书面合同',
        'agreement_expired' => '合同已过期',
        'agreement_incomplete' => '合同不完整',
        'assessment_missing' => '无隐私影响评估',
        'review_due' => '需要审查',
        'data_return_pending' => '待销毁或退还',
    ],

    'checklist' => [
        'confidentiality_measures' => '保护信息机密性的措施（第18.3条）',
        'mandate_only' => '信息仅用于履行委托或合同（第18.3条）',
        'no_retention' => '合同结束后不保留信息（第18.3条）',
        'incident_notice' => '如有任何违反或企图违反保密的情况，立即通知我方负责人（第18.3条）',
        'verification' => '允许我方核查保密义务的履行情况（第18.3条）',
        'outside_quebec_protection' => '魁北克省外：按隐私影响评估要求提供充分保护（第17条）',
    ],

    'actions' => [
        'review' => '标记为已审查',
        'terminate' => '终止合作',
        'data_returned' => '信息已销毁或退还',
    ],

    'notifications' => [
        'reviewed' => '供应商已审查',
    ],
];
