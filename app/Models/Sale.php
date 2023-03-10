<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        "client_id",
        "user_id",
        "sale_date",
        "tax",
        "total",
        "status"    
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function SaleDetails()
    {
        return $this->hasMany(SaleDetails::class);
    }
}
