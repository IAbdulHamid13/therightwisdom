<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class slideshow extends Model
{
    use HasFactory;

    protected $table = 'slideshow';

    /**

     * Write code on Method

     *

     * @return response()

     */

    protected $fillable = [

        'title',
        'url'

    ];
}
