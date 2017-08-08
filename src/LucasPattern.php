<?php

namespace TerryLucas2017\Pattern;

use TerryLucas2017\Pattern\Created\AbstractFactoryPattern\AbstractFactoryPattern;
use TerryLucas2017\Pattern\Created\FactoryMethodPattern\FactoryMethodPattern;
use TerryLucas2017\Pattern\Created\SimpleFactoryPattern\FactoryPattern;

class LucasPattern
{
    public function exc()
    {
        //简单工厂模式测试
        $op = new FactoryPattern();
        $op->exc();

        //抽象工厂模式测试
        $op = new AbstractFactoryPattern();
        $op->exc();

        //工厂方法测试
        $op = new FactoryMethodPattern();
        $op->exc();

    }
}
