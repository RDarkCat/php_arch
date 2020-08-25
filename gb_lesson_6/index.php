<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});


$candidate1 = new Candidate("John");
$candidate2 = new Candidate("Tom");
$candidate3 = new Candidate("Maria");

$vacancy = new Vacancy();
$vacancy->subscribe($candidate1);
$vacancy->subscribe($candidate2);
$vacancy->subscribe($candidate3);

$vacancy->notify("New PHP vacancy available\n");

$vacancy->unsubscribe($candidate1);
$vacancy->notify("New Python vacancy available\n");

    