<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Username implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Use GitHub-style username rules
        return (preg_match('/^[a-z\d](?:[a-z\d]|-(?=[a-z\d])){0,38}$/i', $value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Username may only contain alphanumeric characters or single hyphens, and cannot begin or end with a hyphen.';
    }
}
