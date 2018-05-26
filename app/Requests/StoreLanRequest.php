<?php

namespace Zeropingheroes\Lanager\Requests;

use Zeropingheroes\Lanager\Lan;

class StoreLanRequest extends Request
{
    use LaravelValidation;

    /**
     * Validation rules for the Laravel validator
     *
     * @var array
     */
    protected $laravelValidationRules = [
        'name' => ['required', 'max:255'],
        'start' => ['required', 'date_format:Y-m-d H:i:s', 'before:end'],
        'end' => ['required', 'date_format:Y-m-d H:i:s', 'after:start'],
        'published' => ['nullable','boolean']
    ];

    /**
     * Whether the request is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
        if (!$this->laravelValidationPasses()) {
            return $this->setValid(false);
        }

        $overlappingLans = Lan::where('start', '<=', $this->input['end'])
                              ->where('end', '>=', $this->input['start'])
                              ->count();

        if ($overlappingLans) {
            $this->addError(__('phrase.lans-cannot-overlap'));
            return $this->setValid(false);
        }

        return $this->setValid(true);
    }
}