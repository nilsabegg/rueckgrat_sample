<?php

namespace Bitchradar\Model\Entity;

use \Rueckgrat\Model\Entity as Entity;

class Project extends Entity
{

    protected $columns = array(
        'id',
        'name',
        'dev_url',
        'deploy_url'
    );

    protected $uniques = array(
        'id'
    );

}
