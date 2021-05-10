<?php

namespace WPFluent\Database\Orm;

interface Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \WPFluent\Database\Orm\Builder  $builder
     * @param  \WPFluent\Database\Orm\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model);
}
