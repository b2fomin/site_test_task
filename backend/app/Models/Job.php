<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperJob
 */
class Job extends Model
{
    use Filterable;
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
