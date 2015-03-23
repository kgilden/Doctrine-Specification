<?php

namespace Happyr\DoctrineSpecification\Query;

use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

class LeftJoin extends AbstractJoin
{
    /**
     * {@inheritdoc}
     */
    protected function getJoinType()
    {
        return 'leftJoin';
    }
}