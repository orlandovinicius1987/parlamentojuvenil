<?php

namespace App\Data\Scopes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ScopeInterface;

class Year implements ScopeInterface
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder)
    {
        $builder->where('year', config('app.year'));
    }

    public function remove(Builder $builder, Model $model)
    {
        //
    }
}
