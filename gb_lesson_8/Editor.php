<?php

class Editor
{
    private $edit;
    private $history;
    
    public function __construct()
    {
        $this->history = new EditHistory();
    }
    
    public function doCommand(ITextEdit $edit): void
    {
        $this->edit = $edit;
        $this->edit->make();
        $this->history->add($edit);
    }
    
    public function getHistory()
    {
        return count($this->getHistory());
    }
}

