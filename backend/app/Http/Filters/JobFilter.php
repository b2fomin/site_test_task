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
            'created_at' => [$this, 'created_at'],
            'updated_at' => [$this, 'updated_at'],

        ];
    }

    public function id(Builder $builder, $value) {
        $builder->find($value);
    }

    public function name(Builder $builder, $value) {
        $builder->where("name", "like", "%{$value}%");
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

    public function created_at(Builder $builder, $date_before, $date_after) {
        $builder->whereBetween("created_at", [$date_before, $date_after]);
    }

    public function updated_at(Builder $builder, $date_before, $date_after) {
        $builder->whereBetween("updated_at", [$date_before, $date_after]);
    }
}
