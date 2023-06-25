<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'id',
        'project_id',
        'item_name',
        'quantity',
        'unit_price',
        'type',
        'price',
        'date_received',
        'status',
        'image',
    ];

}

class Asset extends Item
{
    use HasFactory;
    protected $fillable = [
        'subtype',
        'serial_number',
        'model',
        'engine_type',
        'voltage',
        'supplier',
    ];

}

class Inventory extends Item
{
    use HasFactory;
    protected $fillable = [
        'measurement_unit',
        'warranty',
    ];
}