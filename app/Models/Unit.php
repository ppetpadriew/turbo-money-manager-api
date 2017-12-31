<?php

namespace App\Models;


class Unit extends Model {

    /** @var string */
    protected $table = 'unit';

    protected $fillable = [
        'code',
        'description'
    ];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
