<?php


namespace App\Http\Filters;


use App\Models\API\Block;
use App\Models\API\Project;
use Illuminate\Database\Eloquent\Builder;
use function Sodium\add;

class JobFilter extends AbstractFilter
{
    protected function getCallbacks(): array
    {
        return [
            'id' => [$this, 'id'],
            'block_id' => [$this, 'block_id'],
            'project_id' => [$this, 'project_id'],
            'floor' => [$this, 'floor'],
            'room_id' => [$this, 'room_id'],
            'executor' => [$this, 'executor'],
            'work_type_id' => [$this, 'work_type_id'],
            'date_start' => [$this, 'date_start'],
            'date_end' => [$this, 'date_end'],
            'status' => [$this, 'status'],

        ];
    }

    public function id(Builder $builder, $value) {
        $builder->find($value);
    }

    public function block_id(Builder $builder, $value) {
        $builder->where('block_id', Block::where('name', $value)->first()->id);
    }

    public function project_id(Builder $builder, $value) {
        $builder->where("project_id",Project::where('name', $value)->first()->id);
    }

    public function floor(Builder $builder, $value) {
        $builder->where("floor", $value);
    }

    public function room_id(Builder $builder, $value) {
        $builder->where("room_id", $value);
    }


    public function executor(Builder $builder, $value) {
        $builder->where("executor", $value);
    }

    public function work_type_id(Builder $builder, $value) {
        $builder->where("work_type_id", $value);
    }

    public function date_start(Builder $builder, $value) {
        $builder->where("date_start", '>', $value);
    }

    public function date_end(Builder $builder, $value) {
        $builder->where("date_end", '<', $value);
    }

    public function status(Builder $builder, $value) {
        $builder->where("status", $value);
    }

    public function apply(Builder $builder) {
        $jobs = parent::apply($builder);

        return $jobs->map(function ($job) {
            $res = $job->toArray();

            $res['block'] = $job->block()->first()->name;
            unset($res['block_id']);

            $res['project'] = $job->project()->first()->name;
            unset($res['project_id']);

            $res['room'] = $job->room()->first()->name;
            unset($res['room_id']);

            return $res;
        });
    }
}
