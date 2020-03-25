<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int victim_id
 * @property int debtor_id
 */
class Debt extends Model
{

    protected $fillable = [
        'debtor_id', 'victim_id',
    ];

    public static function create($attributes)
    {
        $model = static::query()->create($attributes);


        return $model;
    }
}
