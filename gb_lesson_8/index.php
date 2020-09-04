<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});


$editor = new Editor();
$editor->doCommand(new CommandBold());
$editor->doCommand(new CommandCopy());
$editor->doCommand(new CommandInsert());
