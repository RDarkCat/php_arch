<?php


class Command
{
    private $editor;

    public function __construct()
    {
        $this->editor = new Editor();
    }

}