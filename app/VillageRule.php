<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Uuid;

class VillageRule extends Model
{
    use SoftDeletes;

    public $incrementing = false;

    protected $table = 'village_rules';

    protected $appends = ['file_url'];

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'title',
        'date',
        'description',
        'file',
    ];

    protected static function boot()
    {
        parent::boot();

        // Set UUID on boot.
        self::creating(function ($model) {
            $model->id = (string)Uuid::generate(4);
        });
    }

    public function getFileUrlAttribute(){
        return Storage::url('public/upload/rules/'.$this->file);
    }
}
