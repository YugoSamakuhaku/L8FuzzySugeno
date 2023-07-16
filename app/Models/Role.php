<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Role extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'roles';
    protected $primaryKey = 'id_role';

    protected $fillable = [
        'name_role',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'has_roles');
    }
}
