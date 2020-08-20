<?php


class Vacancy implements IObservervable
{
    private $vacancyDescription;
    private $candidates = [];
    
    public function getVacancy()
    {
        return $this->vacancy;
    }
    
    public function setVacancy($vacancy)
    {
        $this->vacancy = $vacancy;
    }
    
    public function subscribe(ICandidate $candidate)
    {
        $this->candidates[] = $candidate;
        //array_push($this->candidates, $observer);
        echo "Кандидат " . $candidate->getName() . " подписался\n";
    }
    
    public function unsubscribe(ICandidate $candidate)
    {
        foreach ($this->candidates as $_candidate) {
            if ($_candidate instanceof $candidate && $_candidate === $candidate) {
                unset($_candidate);
                echo "Кандидат " . $candidate->getName() . " отписался\n";                
            }
        }
    }
    
    public function notify(string $vacancyDescription)
    {
        foreach ($this->candidates as $candidate) {
            $candidate->vacancyAvailable($vacancyDescription);
        }
    }
    
}
