<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Uuid;

class Kuliner extends Model
{
    use SoftDeletes;

    public $incrementing = false;

    protected $table = 'kuliners';

    protected $keyType = 'string';

    protected $appends = ['photo_url'];

    protected $fillable = [
        'id',
        'name',
        'date',
        'description',
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
        return Storage::url('public/upload/kuliner/' . $this->photo);
    }
}
