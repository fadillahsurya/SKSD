<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $table = "modul";
    protected $guarded = [];

    public function detailModul()
    {
        return $this->hasMany('App\DetailModul');
    }
}
