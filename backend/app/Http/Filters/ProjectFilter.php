<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProjectFilter extends AbstractFilter
{
    protected function getCallbacks(): array
    {
        return [
            'id' => [$this, 'id'],
            'name' => [$this, 'name'],
            'icon' => [$this, 'icon'],
            'description' => [$this, 'description'],
            'contractor' => [$this, 'contractor'],
            'address' => [$this, 'address'],
            'date_start' => [$this, 'date_start'],
            'date_end' => [$this, 'date_end'],
            'budget' => [$this, 'budget'],

        ];
    }
    public function id(Builder $builder, $value) {
        $builder->find($value);
    }

    public function name(Builder $builder, $value) {
        $builder->where("name", $value);
    }

    public function icon(Builder $builder, $value) {
        $builder->where("icon", $value);
    }

    public function description(Builder $builder, $value) {
        $builder->where("description", $value);
    }

    public function address(Builder $builder, $value) {
        $builder->where("address", $value);
    }

    public function date_start(Builder $builder, $value) {
        $builder->where("date_start", $value);
    }

    public function date_end(Builder $builder, $value) {
        $builder->where("date_end", $value);
    }

    public function budget(Builder $builder, $value) {
        $builder->where("budget", $value);
    }
}
