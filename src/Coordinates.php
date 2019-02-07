<?php
class Coordinates {
    private $x;
    private $y;
    private $direction;

    public function setX(integer $x): void
    {
        $this->x = $x;
    }

    public function setY(integer $y): void
    {
        $this->y = $y;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function getDirectionDegree()
    {
        return Direction::DIRECTION_DEGREE[$this->direction];
    }

    public function setDirection(string $dir): void
    {
        if (Direction::isValidDirection($dir)) {
            $this->direction = $dir;
        }

        throw \InvalidArgumentException('Invalid direction provided');
    }
}