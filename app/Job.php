<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $categories_id
 * @property string $description_en
 * @property string $description_fr
 * @property string $description_nl
 * @property string $skills_en
 * @property string $skills_fr
 * @property string $skills_nl
 * @property string $image
 * @property string $location_en
 * @property string $location_fr
 * @property string $location_nl
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Category $category
 */
class Job extends Model
{
    use SoftDeletes;
    /**
     * @var array
     */
    protected $fillable = ['categories_id', 'description_en', 'description_fr', 'description_nl', 'skills_en', 'skills_fr', 'skills_nl', 'image', 'location_en', 'location_fr', 'location_nl', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'categories_id');
    }
}
