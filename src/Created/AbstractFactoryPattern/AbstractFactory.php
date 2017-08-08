<?php
/**
 * Created by PhpStorm.
 * User: Terry Lucas
 * Date: 2017/8/8
 * Time: 14:07
 */

namespace TerryLucas2017\Pattern\Created\AbstractFactoryPattern;

/**
 * Class AbstractFactory
 * User: Terry Lucas
 * @package TerryLucas2017\Pattern\Created\AbstractFactoryPattern
 */
abstract class AbstractFactory
{
    /**
     * User: Terry Lucas
     * @param string $color
     * @return Color
     */
    abstract function getColor(string $color): Color;

    /**
     * User: Terry Lucas
     * @param string $shape
     * @return Shape
     */
    abstract function getShape(string $shape): Shape;
}