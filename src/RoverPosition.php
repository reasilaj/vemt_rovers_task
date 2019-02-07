<?php
class RoverPosition {
    /** @var Coordinates */
    private $coordinates;

    public function __construct(Coordinates $coordinates)
    {
        $this->coordinates = $coordinates;
    }

    public function calculatePosition($m)
    {
        if ($m === MoveSequence::SPIN_LEFT) {
            $nextDirDegree = $this->coordinates->getDirectionDegree() + 90;
            $nextDir = Direction::findDirectionByDegree($nextDirDegree);
        } elseif ($m === MoveSequence::SPIN_RIGHT) {
            $nextDirDegree = $this->coordinates->getDirectionDegree() - 90;
            $nextDir = Direction::findDirectionByDegree($nextDirDegree);
        } elseif ($m === MoveSequence::MOVE) {

        }
    }

}