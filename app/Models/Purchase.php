<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Purchase extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'purchases';
    protected $primaryKey = 'id_purchase';

    protected $fillable = [
        'id_supplier',
        'date_purchase',
    ];

    public function master_inggridients()
    {
        return $this->belongsToMany(MasterInggridient::class, 'detail_purchases');
    }

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class);
    }
}
