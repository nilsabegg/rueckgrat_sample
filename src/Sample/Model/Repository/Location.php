<?php

namespace Bitchradar\Model\Repository;

use \Rueckgrat\Model\Repository as Repository;

class Location extends Repository
{

    public function getByWebsite($website) {

        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE website=:website;';
        $statement = $this->databaseHandler->prepare($query);
        $statement->bindParam(':website', $website, \PDO::PARAM_STR);
        $statement->execute();
        $results = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $this->createEntities($results);

    }

}
