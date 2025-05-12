<?php
class approval{
    private float $avaregeNotes;
    private string $status;
    public function __construct( float $avaregeNotes)
    {
        if ($avaregeNotes >= 6.0){
            $status = 'Aprovadodo';
        } else{
            $status = 'Reprovadodo';
        }
        $this->status = $status;
    }
    public function getApproval(): string{
        return $this ->status;
    }

}