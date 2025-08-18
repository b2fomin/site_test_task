<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class JobFilter extends AbstractFilter
{
    protected function getCallbacks(): array
    {
        return [
            'id' => [$this, 'id'],
            'name' => [$this, 'name'],
            'project' => [$this, 'project'],
            'floor' => [$this, 'floor'],
            'object' => [$this, 'object'],
            'executor' => [$this, 'executor'],
            'status' => [$this, 'project'],
            'period' => [$this, 'period'],

        ];
    }

    public function id(Builder $builder, $value) {
        $builder->find($value);
    }

    public function name(Builder $builder, $value) {
        $builder->where("name", $value);
    }

    public function project(Builder $builder, $value) {
        $builder->where("project", $value);
    }

    public function floor(Builder $builder, $value) {
        $builder->where("floor", $value);
    }

    public function object(Builder $builder, $value) {
        $builder->where("object", $value);
    }

    public function executor(Builder $builder, $value) {
        $builder->where("executor", $value);
    }

    public function status(Builder $builder, $value) {
        $builder->where("status", $value);
    }

    public function period(Builder $builder, $value) {
        $builder->where("period", $value);
    }
}
