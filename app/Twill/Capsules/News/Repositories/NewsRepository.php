<?php

namespace App\Twill\Capsules\News\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\News\Models\News;

class NewsRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleFiles, HandleRevisions, HandleTags;

    public function __construct(News $model)
    {
        $this->model = $model;
    }
}
