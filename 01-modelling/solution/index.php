<?php

require __DIR__.'/src/Employee.php';
require __DIR__.'/src/Engineer.php';
require __DIR__.'/src/Manager.php';
require __DIR__.'/src/Director.php';

$employee = new Training\Modelling\Solution\Employee(1, "Mike", 10000);
print_r($employee);

$engineer = new Training\Modelling\Solution\Engineer(1, "Mike", 20000, ['php']);
print_r($engineer);

$manager = new Training\Modelling\Solution\Manager(1, "Mike", 30000, 'Team 1');
print_r($manager);

$director = new Training\Modelling\Solution\Director(1, "Mike", 50000, 'Technology', 1000000);
print_r($director);