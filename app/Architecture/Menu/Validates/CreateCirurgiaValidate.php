<?php

namespace Modules\FilaCirurgica\Architecture\Cirurgia\Validates;

use App\Architecture\Validates;

class CreateCirurgiaValidate extends Validates
{

    protected $rules = [
        'aghu_md_specialty' => 'required|integer',
        'aghu_md_record' => 'required|integer',
        'aghu_doctor_id' => 'required|integer',
        'malignant_disease_id' => 'required|integer',
        'referral_id' => 'required|integer',
        'status_id' => 'required|integer',
        'surgery_risk_id' => 'required|integer',
        'surgery_site_id' => 'required|integer',
        'surgery_size_id' => 'required|integer',
        'symptomatology_id' => 'required|integer',
        'transoperatory_exams_id' => 'required|integer',
        'surgery_type' => 'required|boolean',
        'oncological_treatment' => 'nullable|string|max:1',
        'platelets' => 'nullable|numeric',
        'plasma' => 'nullable|numeric',
        'cryoprecipitate' => 'nullable|numeric',
        'red_cell_concentration' => 'nullable|numeric',
        'observations' => 'nullable|string',
        'surgery_weight' => 'nullable|numeric',
        'created_at' => 'nullable|timestamp',
        'updated_at' => 'nullable|timestamp',
        'deleted_at' => 'nullable|timestamp',
        'swalis_id' => 'required|integer',
        'comorbidity_id' => 'nullable|integer',
        'surgery_priority' => 'nullable|integer',
    ];
    protected $messages = [
        'required' => 'O campo :attribute é obrigatório.',
        'integer' => 'O campo :attribute é permitido apenas caracteres numéricos.',
        'boolean' => 'O campo :attribute é permitido apenas valores booleanos.',
        'string' => 'O campo :attribute é permitido apenas caracteres.',
        'max' => 'O campo :attribute deve ter no máximo :max caracteres.',
        'numeric' => 'O campo :attribute é permitido apenas valores numéricos.',
        'timestamp' => 'O campo :attribute deve ser uma data válida no formato timestamp.',
    ];

}
