<?php

namespace Bitchradar\Model\Entity;

use \Rueckgrat\Model\Entity as Entity;

class ProjectOptions extends Entity
{

    protected $columns = array(
        'id',
        'project_id',
        'option',
        'value'
    );

    protected $uniques = array(
        'id'
    );

}