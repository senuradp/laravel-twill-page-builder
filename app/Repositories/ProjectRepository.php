<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Project;
use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;

class ProjectRepository extends ModuleRepository
{

    use HandleJsonRepeaters;

    protected $jsonRepeaters = [
        'tasks',
    ];

    public function __construct(Project $model)
    {
        $this->model = $model;
    }
}
