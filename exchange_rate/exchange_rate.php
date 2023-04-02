<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class exchange_rate extends Model
{
    protected $table = 'exchange_rates';

    protected $fillable = ['currency','tt_buy','tt_sell'];
}
