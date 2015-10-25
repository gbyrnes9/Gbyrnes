<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{


    /**
     * Allow mass assign.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'email',
        'phone',
        'business_type',
        'sell_online',
        'company_size',
        'message',
        'sent',

    ];

    /**
     * Allows Soft Deletes
     */
    use SoftDeletes;

    protected $table = 'Quotes';

}
