<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App\Models
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'secondname',
        'debt',
        'statefee',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if ($model->debt < 20001) {
                $model->statefee = $model->debt * (4 / 100);
                if ($model->statefee < 400) {
                    $model->statefee = 400;
                } else {
                    $model->statefee = $model->debt * (4 / 100);
                }
            } else {
                $model->statefee = 800 + (($model->debt - 20000) * (3 / 100));
            }
        });
    }
}
