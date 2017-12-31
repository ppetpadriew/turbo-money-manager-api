<?php

namespace App\Models;


abstract class Model extends \Illuminate\Database\Eloquent\Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    const CREATED_AT = 'created_datetime';
    const UPDATED_AT = 'updated_datetime';
}