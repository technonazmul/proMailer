<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Str;
use App\Models\EventType;

class UniqueSlug implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $slug = Str::slug($value, '_');

        // Check if slug is unique in the event_types table
        if(!EventType::where('event_type_id', $slug)->exists()) {
            $fail('The Event Type Should Be unique.');
        }
    }
}
