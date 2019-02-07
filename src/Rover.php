<?php
class Rover {
    private $position;

    public function __construct(RoverPosition $startPosition)
    {
        $this->position = $startPosition;
    }

    public function setPosition(RoverPosition $position)
    {
        $this->position = $position;
    }

    public function moveTo($instructions)
    {
        $arr = explode('', $instructions);
        foreach ($arr as $m) {
            $this->position->calculatePosition($m);
        }
    }


}