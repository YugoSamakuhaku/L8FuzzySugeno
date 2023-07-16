<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class HasRole extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'has_roles';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'id_role',
    ];
}
