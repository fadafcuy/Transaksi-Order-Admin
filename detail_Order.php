<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_Order extends Model
{
    protected $table = "detail_Order";
    protected $fillable = ["id_order","id_product","quantity"];

    public function order()
    {
        return $this->belongsTo("App/Order","id_product","id");
    }
    public function product()
    {
        return $this->belongsTo("App/Product","id_product","id");
    }
}
