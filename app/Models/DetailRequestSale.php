<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class DetailRequestSale extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'detail_purchases';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_purchase',
        'id_inggridient',
        'qty',
    ];
}