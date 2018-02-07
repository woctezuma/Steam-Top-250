<?php
declare(strict_types=1);

namespace ScriptFUSION\Steam250\SiteGenerator\Ranking\Impl;

use Doctrine\DBAL\Query\QueryBuilder;
use ScriptFUSION\Steam250\SiteGenerator\Ranking\RankingDependencies;

class DlcList extends Top250List
{
    public function __construct(RankingDependencies $dependencies)
    {
        parent::__construct($dependencies, 'dlc');
    }

    public function customizeQuery(QueryBuilder $builder): void
    {
        $builder->where('type = \'dlc\'');
    }
}