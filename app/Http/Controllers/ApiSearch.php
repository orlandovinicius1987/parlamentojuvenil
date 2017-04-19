<?php

namespace App\Http\Controllers;

use App\Data\Entities\Seeduc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class ApiSearch extends BaseController
{
    public function seeduc(Request $request)
    {
        $query = Seeduc::query();

        if ($registration = trim((string) $request->get('registration'))) {
            $query->where('matricula', 'like', '%'.$registration.'%');
        }

        if ($birthdate = trim((string) $request->get('birthdate'))) {
            $query->where('nascimento', string_to_date($birthdate));
        }

        if (empty($registration) && empty($birthdate)) {
            return [];
        }

        return $query->get();
    }
}
