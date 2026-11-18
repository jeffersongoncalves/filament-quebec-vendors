<?php

return [
    'resource' => [
        'label' => 'Dienstleister',
        'plural_label' => 'Dienstleister',
    ],

    'fields' => [
        'name' => 'Name',
        'document' => 'Registrierungsnummer (NEQ)',
        'role' => 'Rolle',
        'risk' => 'Risiko',
        'services' => 'Leistungen',
        'data_categories' => 'Übermittelte Informationen',
        'location' => 'Standort (Provinz oder Land)',
        'pia_completed_at' => 'Datenschutz-Folgenabschätzung durchgeführt am',
        'pia_reference' => 'Referenz der Abschätzung',
        'contact' => 'Kontakt',
        'dpa_signed_at' => 'Vertrag unterzeichnet am',
        'dpa_expires_at' => 'Vertrag läuft ab am',
        'dpa_checklist' => 'Der Vertrag umfasst',
        'notes' => 'Notizen',
        'issues' => 'Mängel',
        'no_issues' => 'Keine',
        'next_review' => 'Nächste Prüfung',
    ],

    'sections' => [
        'agreement' => 'Auftrag oder Dienstleistungsvertrag (Art. 18.3)',
    ],

    'help' => [
        'location' => 'QC, eine andere Provinz (ON, BC...) oder ein Land. Außerhalb Quebecs zuerst die Datenschutzfaktoren bewerten (Art. 17).',
        'agreement' => 'Ein Dienstleister erhält personenbezogene Informationen ohne Einwilligung nur auf Grundlage eines schriftlichen Vertrags (Art. 18.3).',
        'terminate' => 'Der Anbieter schuldet dann die Vernichtung oder Rückgabe der Informationen.',
    ],

    'filters' => [
        'active' => 'Aktiv',
    ],

    'roles' => [
        'service_provider' => 'Dienstleister',
        'third_party' => 'Dritter',
    ],

    'risks' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
    ],

    'issues' => [
        'agreement_missing' => 'Kein schriftlicher Vertrag',
        'agreement_expired' => 'Vertrag abgelaufen',
        'agreement_incomplete' => 'Vertrag unvollständig',
        'assessment_missing' => 'Keine Datenschutz-Folgenabschätzung',
        'review_due' => 'Prüfung fällig',
        'data_return_pending' => 'Vernichtung oder Rückgabe ausstehend',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Maßnahmen zum Schutz der Vertraulichkeit der Informationen (Art. 18.3)',
        'mandate_only' => 'Die Informationen werden nur zur Ausführung des Auftrags oder Vertrags verwendet (Art. 18.3)',
        'no_retention' => 'Die Informationen werden nach Vertragsende nicht aufbewahrt (Art. 18.3)',
        'incident_notice' => 'Meldet unserer verantwortlichen Person unverzüglich jede Verletzung oder versuchte Verletzung der Vertraulichkeit (Art. 18.3)',
        'verification' => 'Erlaubt uns, die Einhaltung der Vertraulichkeit zu überprüfen (Art. 18.3)',
        'outside_quebec_protection' => 'Außerhalb Quebecs: angemessener Schutz, wie es die Datenschutz-Folgenabschätzung verlangt (Art. 17)',
    ],

    'actions' => [
        'review' => 'Als geprüft markieren',
        'terminate' => 'Beziehung beenden',
        'data_returned' => 'Informationen vernichtet oder zurückgegeben',
    ],

    'notifications' => [
        'reviewed' => 'Dienstleister geprüft',
    ],
];
