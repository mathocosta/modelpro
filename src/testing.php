<?php

use ModelPro\Models\Project;

// Como obter uma lista de objetos.
foreach (Project::all() as $row) {
    \var_dump($row);
}

// Como obter somente um objeto.
\var_dump(Project::get(20));
