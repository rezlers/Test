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
        'debt'
    ];

    public static function create($attributes)
    {
        $model = static::query()->create($attributes);


        return $model;
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
