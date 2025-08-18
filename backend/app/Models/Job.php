<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperJob
 */
class Job extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
