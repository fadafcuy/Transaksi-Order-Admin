<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";
    protected $primaryKey = "id";
    protected $fillable = ["id_user","id_adress","total","bukti_bayar","status"];

    public function user()
    {
        return $this->belongsTo("App/Users","id_user","id");
    }
    public function adress()
    {
        return $this->belongsTo("App/Adress","id_adress","id");
    }
    public function detail_order()
    {
        return $this->hasMany("App/detail_Order","id_order");
    }
}
