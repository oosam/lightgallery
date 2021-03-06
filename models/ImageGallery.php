<?php namespace Rjchauhan\LightGallery\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * ImageGallery Model
 */
class ImageGallery extends Model
{
    use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rjchauhan_lightgallery_image_galleries';

    public $rules = [
        'name' => 'required|between:3,64',
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [
        'images' => ['System\Models\File', 'order' => 'sort_order'],
    ];

}