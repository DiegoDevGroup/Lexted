<?php

namespace Ddg\Lexted\Traits;

trait SetsCreatedByWhenCreating
{
    /**
     * Add the User ID of the Authorized person
     * in the model as `created_at`
     *
     * @return void
     */
    public static function bootSetsCreatedByWhenCreating() :void
    {
        static::creating(function ($model) {

            if ( ! $model->created_by) {
                $model->created_by = auth()->user()->id;
            }
        });
    }
}
