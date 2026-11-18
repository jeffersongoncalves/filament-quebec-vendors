<?php

return [
    'resource' => [
        'label' => 'Prestataire',
        'plural_label' => 'Prestataires',
    ],

    'fields' => [
        'name' => 'Nom',
        'document' => 'Numéro d\'entreprise (NEQ)',
        'role' => 'Rôle',
        'risk' => 'Risque',
        'services' => 'Services',
        'data_categories' => 'Renseignements communiqués',
        'location' => 'Emplacement (province ou pays)',
        'pia_completed_at' => 'Évaluation des facteurs relatifs à la vie privée faite le',
        'pia_reference' => 'Référence de l\'évaluation',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contrat signé le',
        'dpa_expires_at' => 'Contrat expire le',
        'dpa_checklist' => 'Le contrat couvre',
        'notes' => 'Notes',
        'issues' => 'Points en suspens',
        'no_issues' => 'Aucun',
        'next_review' => 'Prochaine revue',
    ],

    'sections' => [
        'agreement' => 'Mandat ou contrat de service (art. 18.3)',
    ],

    'help' => [
        'location' => 'QC, une autre province (ON, BC...) ou un pays. Hors Québec, évaluez d\'abord les facteurs relatifs à la vie privée (art. 17).',
        'agreement' => 'Un fournisseur de services reçoit des renseignements personnels sans consentement uniquement en vertu d\'un contrat écrit (art. 18.3).',
        'terminate' => 'Le fournisseur devra alors détruire ou restituer les renseignements.',
    ],

    'filters' => [
        'active' => 'Actifs',
    ],

    'roles' => [
        'service_provider' => 'Fournisseur de services',
        'third_party' => 'Tiers',
    ],

    'risks' => [
        'low' => 'Faible',
        'medium' => 'Moyen',
        'high' => 'Élevé',
    ],

    'issues' => [
        'agreement_missing' => 'Aucun contrat écrit',
        'agreement_expired' => 'Contrat expiré',
        'agreement_incomplete' => 'Contrat incomplet',
        'assessment_missing' => 'Aucune évaluation des facteurs relatifs à la vie privée',
        'review_due' => 'Revue à faire',
        'data_return_pending' => 'Destruction ou restitution en attente',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Mesures pour protéger le caractère confidentiel des renseignements (art. 18.3)',
        'mandate_only' => 'Les renseignements ne sont utilisés que pour l\'exécution du mandat ou du contrat (art. 18.3)',
        'no_retention' => 'Les renseignements ne sont pas conservés après la fin du contrat (art. 18.3)',
        'incident_notice' => 'Avise sans délai notre personne responsable de toute violation, ou tentative de violation, de la confidentialité (art. 18.3)',
        'verification' => 'Nous permet de vérifier le respect de la confidentialité (art. 18.3)',
        'outside_quebec_protection' => 'Hors Québec : une protection adéquate, comme l\'exige l\'évaluation des facteurs relatifs à la vie privée (art. 17)',
    ],

    'actions' => [
        'review' => 'Marquer comme revu',
        'terminate' => 'Mettre fin à la relation',
        'data_returned' => 'Renseignements détruits ou restitués',
    ],

    'notifications' => [
        'reviewed' => 'Prestataire revu',
    ],
];
