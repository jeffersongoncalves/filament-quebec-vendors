<?php

return [
    'resource' => [
        'label' => 'Fornecedor',
        'plural_label' => 'Fornecedores',
    ],

    'fields' => [
        'name' => 'Nome',
        'document' => 'Número de registo (NEQ)',
        'role' => 'Papel',
        'risk' => 'Risco',
        'services' => 'Serviços',
        'data_categories' => 'Informações comunicadas',
        'location' => 'Localização (província ou país)',
        'pia_completed_at' => 'Avaliação de impacto na privacidade feita em',
        'pia_reference' => 'Referência da avaliação',
        'contact' => 'Contacto',
        'dpa_signed_at' => 'Contrato assinado em',
        'dpa_expires_at' => 'Contrato expira em',
        'dpa_checklist' => 'O contrato abrange',
        'notes' => 'Notas',
        'issues' => 'Pendências',
        'no_issues' => 'Nenhuma',
        'next_review' => 'Próxima revisão',
    ],

    'sections' => [
        'agreement' => 'Mandato ou contrato de prestação de serviços (art. 18.3)',
    ],

    'help' => [
        'location' => 'QC, outra província (ON, BC...) ou um país. Fora do Quebeque, avalie primeiro os fatores de privacidade (art. 17).',
        'agreement' => 'Um prestador de serviços recebe informações pessoais sem consentimento apenas mediante contrato escrito (art. 18.3).',
        'terminate' => 'O fornecedor passará a dever a destruição ou devolução das informações.',
    ],

    'filters' => [
        'active' => 'Ativos',
    ],

    'roles' => [
        'service_provider' => 'Prestador de serviços',
        'third_party' => 'Terceiro',
    ],

    'risks' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'issues' => [
        'agreement_missing' => 'Sem contrato escrito',
        'agreement_expired' => 'Contrato expirado',
        'agreement_incomplete' => 'Contrato incompleto',
        'assessment_missing' => 'Sem avaliação de impacto na privacidade',
        'review_due' => 'Revisão em falta',
        'data_return_pending' => 'Destruição ou devolução pendente',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Medidas para proteger a confidencialidade das informações (art. 18.3)',
        'mandate_only' => 'As informações são utilizadas apenas para executar o mandato ou o contrato (art. 18.3)',
        'no_retention' => 'As informações não são conservadas após o fim do contrato (art. 18.3)',
        'incident_notice' => 'Notifica sem demora o nosso responsável de qualquer violação, ou tentativa de violação, da confidencialidade (art. 18.3)',
        'verification' => 'Permite-nos verificar o cumprimento da confidencialidade (art. 18.3)',
        'outside_quebec_protection' => 'Fora do Quebeque: proteção adequada, conforme exige a avaliação de impacto na privacidade (art. 17)',
    ],

    'actions' => [
        'review' => 'Marcar como revisto',
        'terminate' => 'Terminar relação',
        'data_returned' => 'Informações destruídas ou devolvidas',
    ],

    'notifications' => [
        'reviewed' => 'Fornecedor revisto',
    ],
];
