<?php

namespace App\Http\Controllers;

use DB;
use App\Data\Entities\Seeduc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class ApiSearch extends BaseController
{
    private function makeWildcardSearchable($name)
    {
        $result = '';

        foreach (explode(' ', mb_strtoclean($name)) as $value) {
            $result .= "{$value}%";
        }

        return "%{$result}";
    }

    public function seeduc(Request $request)
    {
        $query = Seeduc::query();

        if ($name = trim((string) $request->get('name'))) {
            $name = $this->makeWildcardSearchable($name);

            $query->whereRaw("lower(unaccent(nome)) like '{$name}'");
        }

        if ($registration = trim((string) $request->get('registration'))) {
            $query->where('matricula', 'like', '%'.$registration.'%');
        }

        if ($birthdate = trim((string) $request->get('birthdate'))) {
            $query->where('nascimento', string_to_date($birthdate));
        }

        if (empty($registration) && empty($birthdate) && empty($name)) {
            return [];
        }

        return $query->get();
    }
}
