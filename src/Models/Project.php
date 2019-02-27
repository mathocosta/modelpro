<?php

namespace ModelPro\Models;

use ModelPro\Core\BaseModel;
use ModelPro\Core\Database\ConnectionFactory;

class Project extends BaseModel {

    function __construct() {
        parent::$table = 'projects';
        parent::$className = 'Project';
        parent::__construct(ConnectionFactory::getConnection());
    }

}
