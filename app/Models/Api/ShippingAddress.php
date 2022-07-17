<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShippingAddress extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','shipping_name','address_line_one','address_line_two','shipping_mobile','shipping_town','shipping_email','shipping_post','shipping_country_id','note', 'shipping_state_id'];

    /**
     * A shipping address is belongs to a country
     *
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class,'shipping_country_id');
    }
    /**
     * A shipping address is belongs to a states
     *
     * @return BelongsTo
     */

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class,'shipping_state_id');
    }

}
