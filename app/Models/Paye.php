<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paye extends Model
{
    use HasFactory;

    protected $table = 'paye'; // specify the table name if it's different from the pluralized class name
    protected $primaryKey = 'id'; // specify the primary key if it's different from 'id'

    protected $fillable = [
        'idBon',
        'price',
        'Paydate',
        'type',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'idBon', 'id');
    }
}
