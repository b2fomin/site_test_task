<?php

namespace App\Models\API;

use App\Models\IdeHelperJob;
use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperJob
 */
class Job extends Model
{
    use Filterable, hasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function block() {
        return $this->belongsTo(Block::class);
    }

    public function room() {
        return $this->belongsTo(Room::class);
    }
}
