<?php

return [
    'resource' => [
        'label' => 'Proveedor',
        'plural_label' => 'Proveedores',
    ],

    'fields' => [
        'name' => 'Nombre',
        'document' => 'Número de registro (NEQ)',
        'role' => 'Rol',
        'risk' => 'Riesgo',
        'services' => 'Servicios',
        'data_categories' => 'Información comunicada',
        'location' => 'Ubicación (provincia o país)',
        'pia_completed_at' => 'Evaluación de impacto en la privacidad realizada el',
        'pia_reference' => 'Referencia de la evaluación',
        'contact' => 'Contacto',
        'dpa_signed_at' => 'Contrato firmado el',
        'dpa_expires_at' => 'Contrato vence el',
        'dpa_checklist' => 'El contrato cubre',
        'notes' => 'Notas',
        'issues' => 'Pendientes',
        'no_issues' => 'Ninguno',
        'next_review' => 'Próxima revisión',
    ],

    'sections' => [
        'agreement' => 'Mandato o contrato de servicios (art. 18.3)',
    ],

    'help' => [
        'location' => 'QC, otra provincia (ON, BC...) o un país. Fuera de Quebec, evalúe primero los factores de privacidad (art. 17).',
        'agreement' => 'Un proveedor de servicios recibe información personal sin consentimiento solo mediante un contrato escrito (art. 18.3).',
        'terminate' => 'El proveedor deberá entonces destruir o devolver la información.',
    ],

    'filters' => [
        'active' => 'Activos',
    ],

    'roles' => [
        'service_provider' => 'Proveedor de servicios',
        'third_party' => 'Tercero',
    ],

    'risks' => [
        'low' => 'Bajo',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'issues' => [
        'agreement_missing' => 'Sin contrato escrito',
        'agreement_expired' => 'Contrato vencido',
        'agreement_incomplete' => 'Contrato incompleto',
        'assessment_missing' => 'Sin evaluación de impacto en la privacidad',
        'review_due' => 'Revisión pendiente',
        'data_return_pending' => 'Destrucción o devolución pendiente',
    ],

    'checklist' => [
        'confidentiality_measures' => 'Medidas para proteger la confidencialidad de la información (art. 18.3)',
        'mandate_only' => 'La información se usa solo para ejecutar el mandato o el contrato (art. 18.3)',
        'no_retention' => 'La información no se conserva tras finalizar el contrato (art. 18.3)',
        'incident_notice' => 'Notifica sin demora a nuestro responsable cualquier violación, o intento de violación, de la confidencialidad (art. 18.3)',
        'verification' => 'Nos permite verificar el cumplimiento de la confidencialidad (art. 18.3)',
        'outside_quebec_protection' => 'Fuera de Quebec: protección adecuada, según exige la evaluación de impacto en la privacidad (art. 17)',
    ],

    'actions' => [
        'review' => 'Marcar como revisado',
        'terminate' => 'Terminar relación',
        'data_returned' => 'Información destruida o devuelta',
    ],

    'notifications' => [
        'reviewed' => 'Proveedor revisado',
    ],
];
