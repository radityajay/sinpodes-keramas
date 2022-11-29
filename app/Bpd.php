<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Uuid;

class Bpd extends Model
{
    use SoftDeletes;

    public $incrementing = false;

    protected $table = 'bpds';

    protected $keyType = 'string';

    protected $appends = ['photo_url'];

    protected $fillable = [
        'id',
        'name',
        'jabatan',
        'photo'
    ];

    protected static function boot()
    {
        parent::boot();

        // Set UUID on boot.
        self::creating(function ($model) {
            $model->id = (string)Uuid::generate(4);
        });
    }

    public function getPhotoUrlAttribute()
    {
        return Storage::url('public/upload/bpd/' . $this->photo);
    }
}
