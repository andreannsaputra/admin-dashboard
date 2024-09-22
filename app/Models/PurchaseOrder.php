<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'order_number', 'order_date', 'total_amount', 'status'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
