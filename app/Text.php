<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $content_en
 * @property string $content_fr
 * @property string $content_nl
 * @property string $position
 */
class Text extends Model
{
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = ['content_en', 'content_fr', 'content_nl', 'position'];

}
