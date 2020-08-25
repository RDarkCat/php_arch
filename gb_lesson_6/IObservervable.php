<?php

interface IObservervable
{
    public function notify(string $vacancyDescription);
    public function subscribe(ICandidate $candidate);
    public function unsubscribe(ICandidate $candidate);
}
