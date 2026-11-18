<?php

return [
    'resource' => [
        'label' => 'Leverancier',
        'plural_label' => 'Leveranciers',
    ],

    'fields' => [
        'name' => 'Naam',
        'document' => 'Registratienummer (NEQ)',
        'role' => 'Rol',
        'risk' => 'Risico',
        'services' => 'Diensten',
        'data_categories' => 'Verstrekte informatie',
        'location' => 'Locatie (provincie of land)',
        'pia_completed_at' => 'Privacy-effectbeoordeling uitgevoerd op',
        'pia_reference' => 'Referentie van de beoordeling',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contract getekend op',
        'dpa_expires_at' => 'Contract verloopt op',
        'dpa_checklist' => 'Het contract omvat',
        'notes' => 'Notities',
        'issues' => 'Openstaande punten',
        'no_issues' => 'Geen',
        'next_review' => 'Volgende beoordeling',
    ],

    'sections' => [
        'agreement' => 'Mandaat of dienstverleningsovereenkomst (art. 18.3)',
    ],

    'help' => [
        'location' => 'QC, een andere provincie (ON, BC...) of een land. Buiten Quebec eerst de privacyfactoren beoordelen (art. 17).',
        'agreement' => 'Een dienstverlener ontvangt persoonlijke informatie zonder toestemming alleen op grond van een schriftelijke overeenkomst (art. 18.3).',
        'terminate' => 'De leverancier moet de informatie dan vernietigen of teruggeven.',
    ],

    'filters' => [
        'active' => 'Actief',
    ],

    'roles' => [
        'service_provider' => 'Dienstverlener',
        'third_party' => 'Derde',
    ],

    'risks' => [
        'low' => 'Laag',
        'medium' => 'Gemiddeld',
        'high' => 'Hoog',
    ],

    'issues' => [
        'agreement_missing' => 'Geen schriftelijke overeenkomst',
        'agreement_expired' => 'Contract verlopen',
        'agreement_incomplete' => 'Contract onvolledig',
        'assessment_missing' => 'Geen privacy-effectbeoordeling',
        'review_due' => 'Beoordeling nodig',
        'data_return_pending' => 'Vernietiging of teruggave openstaand',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Maatregelen ter bescherming van de vertrouwelijkheid van de informatie (art. 18.3)',
        'mandate_only' => 'De informatie wordt alleen gebruikt om het mandaat of de overeenkomst uit te voeren (art. 18.3)',
        'no_retention' => 'De informatie wordt na afloop van de overeenkomst niet bewaard (art. 18.3)',
        'incident_notice' => 'Meldt elke schending of poging tot schending van de vertrouwelijkheid onverwijld aan onze verantwoordelijke persoon (art. 18.3)',
        'verification' => 'Staat ons toe de naleving van de vertrouwelijkheid te controleren (art. 18.3)',
        'outside_quebec_protection' => 'Buiten Quebec: passende bescherming, zoals de privacy-effectbeoordeling vereist (art. 17)',
    ],

    'actions' => [
        'review' => 'Markeren als beoordeeld',
        'terminate' => 'Relatie beëindigen',
        'data_returned' => 'Informatie vernietigd of teruggegeven',
    ],

    'notifications' => [
        'reviewed' => 'Leverancier beoordeeld',
    ],
];
