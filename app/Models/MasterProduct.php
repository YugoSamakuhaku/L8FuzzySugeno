<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class MasterProduct extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'master_products';
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'name_product',
        'unit_product',
        'price_product',
    ];

    public function master_inggridients()
    {
        return $this->belongsToMany(MasterInggridient::class, 'product_inggridients');
    }

    public function request_sales()
    {
        return $this->belongsToMany(RequestSale::class, 'detail_request_sales', 'id_product', 'id_sale')->withPivot('qty');
    }
}
