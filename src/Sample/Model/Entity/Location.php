<?php

namespace Bitchradar\Model\Entity;

use \Rueckgrat\Model\Entity as Entity;

class Location extends Entity
{

    const table = 'location';

    protected $columns = array(
        'id',
        'name',
        'street',
        'zip',
        'city',
        'country',
        'location_comment',
        'phone',
        'website'
    );

    protected $uniques = array(
        'id'
    );

}
