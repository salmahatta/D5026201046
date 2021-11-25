<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = "tugas";
    protected $guarded = [];
    public function getStatusAttribute()
    {
        if ($this->attributes['status']) return "Selesai";
        else return "Belum selesai";
    } //
    public $timestamps = false;
}
