<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperBlock
 */
class Block extends Model
{
    use hasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function project() {
        return $this->belongsTo(Project::class);
    }
}
