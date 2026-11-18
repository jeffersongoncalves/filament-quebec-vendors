<?php

return [
    'resource' => [
        'label' => 'Vendor',
        'plural_label' => 'Vendors',
    ],

    'fields' => [
        'name' => 'Name',
        'document' => 'Registration number (NEQ)',
        'role' => 'Role',
        'risk' => 'Risk',
        'services' => 'Services',
        'data_categories' => 'Information communicated',
        'location' => 'Location (province or country)',
        'pia_completed_at' => 'Privacy impact assessment done on',
        'pia_reference' => 'Assessment reference',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contract signed on',
        'dpa_expires_at' => 'Contract expires on',
        'dpa_checklist' => 'The contract covers',
        'notes' => 'Notes',
        'issues' => 'Issues',
        'no_issues' => 'None',
        'next_review' => 'Next review',
    ],

    'sections' => [
        'agreement' => 'Mandate or service contract (s. 18.3)',
    ],

    'help' => [
        'location' => 'QC, another province (ON, BC...) or a country. Outside Quebec, assess the privacy factors first (s. 17).',
        'agreement' => 'A service provider receives personal information without consent only under a written contract (s. 18.3).',
        'terminate' => 'The vendor will then owe the destruction or return of the information.',
    ],

    'filters' => [
        'active' => 'Active',
    ],

    'roles' => [
        'service_provider' => 'Service provider',
        'third_party' => 'Third party',
    ],

    'risks' => [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ],

    'issues' => [
        'agreement_missing' => 'No written contract',
        'agreement_expired' => 'Contract expired',
        'agreement_incomplete' => 'Contract incomplete',
        'assessment_missing' => 'No privacy impact assessment',
        'review_due' => 'Review due',
        'data_return_pending' => 'Destruction or return pending',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Measures to protect the confidentiality of the information (s. 18.3)',
        'mandate_only' => 'The information is used only to carry out the mandate or the contract (s. 18.3)',
        'no_retention' => 'The information is not kept after the contract ends (s. 18.3)',
        'incident_notice' => 'Notifies our person in charge without delay of any breach, or attempted breach, of confidentiality (s. 18.3)',
        'verification' => 'Allows us to verify compliance with confidentiality (s. 18.3)',
        'outside_quebec_protection' => 'Outside Quebec: adequate protection, as the privacy impact assessment requires (s. 17)',
    ],

    'actions' => [
        'review' => 'Mark as reviewed',
        'terminate' => 'End relationship',
        'data_returned' => 'Information destroyed or returned',
    ],

    'notifications' => [
        'reviewed' => 'Vendor reviewed',
    ],
];
