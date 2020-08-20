<?php

interface ICandidate
{
    public function vacancyAvailable($vacancyDescription);
    public function getName();
}

