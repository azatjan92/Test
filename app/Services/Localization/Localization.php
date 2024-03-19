<?php

namespace App\Services\Localization;

use Illuminate\Support\Facades\App;

class Localization
{
    public function locale()
    {
        $locale = App::getLocale();
        if ($locale && in_array($locale, config("app.locales"))) {
            return $locale;
        }
        return "";
    }
}

