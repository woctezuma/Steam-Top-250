<?php
declare(strict_types=1);

namespace ScriptFUSION\Steam250\SiteGenerator\Ranking\Impl;

use ScriptFUSION\Steam250\SiteGenerator\Ranking\RankingDependencies;

class DeveloperRanking extends DevlisherRanking
{
    public function __construct(RankingDependencies $dependencies)
    {
        parent::__construct($dependencies, 'developer', 1.11);
    }
}
