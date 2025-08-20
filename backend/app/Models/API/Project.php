<?php

namespace App\Models\API;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperProject
 */
class Project extends Model
{
    use Filterable, hasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function jobs() {
        return $this->hasMany(Job::class);
    }

    public function blocks() {
        return $this->hasMany(Block::class);
    }

    public function rooms() {
        return $this->hasMany(Room::class);
    }
}
