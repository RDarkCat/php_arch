<?php

class EditHistory
{
    private $editHistory = [];

    public function __construct() {}
    
   
    public function add(ITextEdit $editCommand): int
    {
        return array_push($this->editHistory, $editCommand);
    }

    public function undo()
    {
        return array_pop($this->editHistory);
    }
    public function getHistory()
    {
        return count($this->editHistory);
    }
}

