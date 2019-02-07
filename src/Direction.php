<?php
class Direction {
    const NORTH = 'N';
    const SOUTH = 'S';
    const WEST = 'W';
    const EAST = 'E';
    const VALID_DIRECTIONS = [
        self::NORTH,
        self::SOUTH,
        self::WEST,
        self::EAST,
    ];

    const DIRECTION_DEGREE = [
        self::NORTH => 90,
        self::WEST => 180,
        self::SOUTH => 270,
        self::EAST => 0
    ];

    public static function isValidDirection($dir) {
        return in_array($dir, self::VALID_DIRECTIONS);
    }

    public static function findDirectionByDegree(integer $degree)
    {
        $degree = $degree % 360;
        return array_search($degree, self::DIRECTION_DEGREE);
    }
}