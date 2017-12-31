<?php

namespace App\Models;


class Item extends Model {

    /** @var string */
    protected $table = 'item';

    public $timestamps = true;

    protected $fillable = [
        'code',
        'ean',
        'description',
        'item_type_id',
        'inventory_type_id',
        'weight',
        'weight_unit_id',
        'lot_controlled'
    ];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
