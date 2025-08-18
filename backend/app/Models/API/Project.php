<?php

namespace App\Models\API;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Filterable, hasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function jobs() {
        return $this->hasMany(Project::class);
    }
}
