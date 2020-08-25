<?php

class Candidate implements ICandidate
{
    private $name;
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function vacancyAvailable($vacancyDescription)
    {
        echo $vacancyDescription;
    }

}

