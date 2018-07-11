<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name_en
 * @property string $name_fr
 * @property string $name_nl
 * @property string $image
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Job[] $jobs
 */
class Category extends Model
{
    use SoftDeletes;
    /**
     * @var array
     */
    protected $fillable = ['name_en', 'name_fr', 'name_nl', 'image', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobs()
    {
        return $this->hasMany('App\Job', 'categories_id');
    }
}
