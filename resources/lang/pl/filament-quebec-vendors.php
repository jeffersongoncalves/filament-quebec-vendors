<?php

return [
    'resource' => [
        'label' => 'Dostawca',
        'plural_label' => 'Dostawcy',
    ],

    'fields' => [
        'name' => 'Nazwa',
        'document' => 'Numer rejestracyjny (NEQ)',
        'role' => 'Rola',
        'risk' => 'Ryzyko',
        'services' => 'Usługi',
        'data_categories' => 'Przekazywane informacje',
        'location' => 'Lokalizacja (prowincja lub kraj)',
        'pia_completed_at' => 'Ocena skutków dla prywatności wykonana dnia',
        'pia_reference' => 'Sygnatura oceny',
        'contact' => 'Kontakt',
        'dpa_signed_at' => 'Umowa podpisana',
        'dpa_expires_at' => 'Umowa wygasa',
        'dpa_checklist' => 'Umowa obejmuje',
        'notes' => 'Notatki',
        'issues' => 'Braki',
        'no_issues' => 'Brak',
        'next_review' => 'Następny przegląd',
    ],

    'sections' => [
        'agreement' => 'Zlecenie lub umowa o świadczenie usług (art. 18.3)',
    ],

    'help' => [
        'location' => 'QC, inna prowincja (ON, BC...) lub kraj. Poza Quebekiem najpierw oceń czynniki prywatności (art. 17).',
        'agreement' => 'Usługodawca otrzymuje informacje osobowe bez zgody wyłącznie na podstawie pisemnej umowy (art. 18.3).',
        'terminate' => 'Dostawca będzie wtedy zobowiązany do zniszczenia lub zwrotu informacji.',
    ],

    'filters' => [
        'active' => 'Aktywni',
    ],

    'roles' => [
        'service_provider' => 'Usługodawca',
        'third_party' => 'Strona trzecia',
    ],

    'risks' => [
        'low' => 'Niskie',
        'medium' => 'Średnie',
        'high' => 'Wysokie',
    ],

    'issues' => [
        'agreement_missing' => 'Brak pisemnej umowy',
        'agreement_expired' => 'Umowa wygasła',
        'agreement_incomplete' => 'Umowa niekompletna',
        'assessment_missing' => 'Brak oceny skutków dla prywatności',
        'review_due' => 'Wymagany przegląd',
        'data_return_pending' => 'Zniszczenie lub zwrot w toku',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Środki ochrony poufności informacji (art. 18.3)',
        'mandate_only' => 'Informacje są wykorzystywane wyłącznie do wykonania zlecenia lub umowy (art. 18.3)',
        'no_retention' => 'Informacje nie są przechowywane po zakończeniu umowy (art. 18.3)',
        'incident_notice' => 'Niezwłocznie powiadamia naszą osobę odpowiedzialną o każdym naruszeniu lub próbie naruszenia poufności (art. 18.3)',
        'verification' => 'Pozwala nam weryfikować przestrzeganie poufności (art. 18.3)',
        'outside_quebec_protection' => 'Poza Quebekiem: odpowiednia ochrona, zgodnie z oceną skutków dla prywatności (art. 17)',
    ],

    'actions' => [
        'review' => 'Oznacz jako sprawdzony',
        'terminate' => 'Zakończ współpracę',
        'data_returned' => 'Informacje zniszczone lub zwrócone',
    ],

    'notifications' => [
        'reviewed' => 'Dostawca sprawdzony',
    ],
];
