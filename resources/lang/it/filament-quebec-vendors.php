<?php

return [
    'resource' => [
        'label' => 'Fornitore',
        'plural_label' => 'Fornitori',
    ],

    'fields' => [
        'name' => 'Nome',
        'document' => 'Numero di registrazione (NEQ)',
        'role' => 'Ruolo',
        'risk' => 'Rischio',
        'services' => 'Servizi',
        'data_categories' => 'Informazioni comunicate',
        'location' => 'Sede (provincia o paese)',
        'pia_completed_at' => 'Valutazione d\'impatto sulla privacy effettuata il',
        'pia_reference' => 'Riferimento della valutazione',
        'contact' => 'Contatto',
        'dpa_signed_at' => 'Contratto firmato il',
        'dpa_expires_at' => 'Contratto scade il',
        'dpa_checklist' => 'Il contratto copre',
        'notes' => 'Note',
        'issues' => 'Criticità',
        'no_issues' => 'Nessuna',
        'next_review' => 'Prossima revisione',
    ],

    'sections' => [
        'agreement' => 'Mandato o contratto di servizio (art. 18.3)',
    ],

    'help' => [
        'location' => 'QC, un\'altra provincia (ON, BC...) o un paese. Fuori dal Québec, valuta prima i fattori di privacy (art. 17).',
        'agreement' => 'Un fornitore di servizi riceve informazioni personali senza consenso solo in base a un contratto scritto (art. 18.3).',
        'terminate' => 'Il fornitore dovrà quindi distruggere o restituire le informazioni.',
    ],

    'filters' => [
        'active' => 'Attivi',
    ],

    'roles' => [
        'service_provider' => 'Fornitore di servizi',
        'third_party' => 'Terza parte',
    ],

    'risks' => [
        'low' => 'Basso',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'issues' => [
        'agreement_missing' => 'Nessun contratto scritto',
        'agreement_expired' => 'Contratto scaduto',
        'agreement_incomplete' => 'Contratto incompleto',
        'assessment_missing' => 'Nessuna valutazione d\'impatto sulla privacy',
        'review_due' => 'Revisione da fare',
        'data_return_pending' => 'Distruzione o restituzione in sospeso',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Misure per proteggere la riservatezza delle informazioni (art. 18.3)',
        'mandate_only' => 'Le informazioni sono usate solo per eseguire il mandato o il contratto (art. 18.3)',
        'no_retention' => 'Le informazioni non sono conservate dopo la fine del contratto (art. 18.3)',
        'incident_notice' => 'Notifica senza ritardo al nostro responsabile qualsiasi violazione, o tentativo di violazione, della riservatezza (art. 18.3)',
        'verification' => 'Ci consente di verificare il rispetto della riservatezza (art. 18.3)',
        'outside_quebec_protection' => 'Fuori dal Québec: protezione adeguata, come richiede la valutazione d\'impatto sulla privacy (art. 17)',
    ],

    'actions' => [
        'review' => 'Segna come revisionato',
        'terminate' => 'Chiudi il rapporto',
        'data_returned' => 'Informazioni distrutte o restituite',
    ],

    'notifications' => [
        'reviewed' => 'Fornitore revisionato',
    ],
];
