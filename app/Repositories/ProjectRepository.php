<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Project;

class ProjectRepository extends ModuleRepository
{
    

    public function __construct(Project $model)
    {
        $this->model = $model;
    }
}
