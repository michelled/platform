<?php

namespace App\Http\Requests;

use App\Enums\ConsultingService;
use App\Enums\ProvinceOrTerritory;
use CodeZero\UniqueTranslation\UniqueTranslationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Worksome\RequestFactories\Concerns\HasFactory;

class UpdateOrganizationRequest extends FormRequest
{
    use HasFactory;

    public function authorize(): bool
    {
        return $this->user()->can('update', $this->organization);
    }

    public function rules(): array
    {
        return [
            'name.*' => [
                'nullable',
                'string',
                'max:255',
                UniqueTranslationRule::for('organizations')->ignore($this->organization->id),
            ],
            'name.en' => 'required_without:name.fr',
            'name.fr' => 'required_without:name.en',
            'about.*' => 'nullable|string',
            'about.en' => 'required_without:about.fr',
            'about.fr' => 'required_without:about.en',
            'region' => [
                'required',
                new Enum(ProvinceOrTerritory::class),
            ],
            'locality' => 'required|string|max:255',
            'service_areas' => [
                'required',
                'array',
            ],
            'service_areas.*' => [
                new Enum(ProvinceOrTerritory::class),
            ],
            'working_languages' => 'required|array',
            'consulting_services' => [
                'nullable',
                'array',
                Rule::requiredIf(fn () => $this->organization->isConsultant()),
                Rule::excludeIf(fn () => ! $this->organization->isConsultant()),
            ],
            'consulting_services.*' => [
                new Enum(ConsultingService::class),
            ],
            'social_links.*' => 'nullable|active_url',
            'website_link' => 'nullable|active_url',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'social_links' => array_map('normalize_url', $this->social_links ?? []),
            'website_link' => normalize_url($this->website_link),
        ]);
    }

    public function attributes(): array
    {
        return [
            'about.fr' => __('"About your organization" (French)'),
            'about.en' => __('"About your organization" (English)'),
        ];
    }
}
