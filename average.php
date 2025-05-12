<?php
class average{
    private float $notesAverage;
    private array $notes;

    public function __construct( array $notes)
    {
        $this->notesAverage = $avaregeNotes = array_sum($notes) / count($notes);
        
    }
    public function getAvarege(): float {
        return $this->notesAverage;
    }

}