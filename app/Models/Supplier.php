<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Supplier extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'suppliers';
    protected $primaryKey = 'id_supplier';

    protected $fillable = [
        'name_supplier',
        'phone_supplier',
        'address_supplier',
    ];

    public function purchases()
    {
        return $this->belongsTo(Purchase::class);
    }
}
