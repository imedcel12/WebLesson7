<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Songs
 * @package App\Models
 * @version October 26, 2021, 12:46 pm UTC
 *
 * @property string $Song_Title
 * @property string $Singer
 * @property string $Genre
 * @property string|\Carbon\Carbon $Date_Release
 */
class Songs extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'songs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Song_Title',
        'Singer',
        'Genre',
        'Date_Release'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Song_Title' => 'string',
        'Singer' => 'string',
        'Genre' => 'string',
        'Date_Release' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Song_Title' => 'nullable|string|max:60',
        'Singer' => 'nullable|string|max:60',
        'Genre' => 'nullable|string|max:60',
        'Date_Release' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
