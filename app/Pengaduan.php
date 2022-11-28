<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Uuid;

class Pengaduan extends Model
{
    use SoftDeletes;

    public $incrementing = false;

    protected $table = 'pengaduans';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'date',
        'message'
    ];

    protected static function boot()
    {
        parent::boot();

        // Set UUID on boot.
        self::creating(function ($model) {
            $model->id = (string)Uuid::generate(4);
        });
    }
}
