<?php

namespace TerryLucas2017\Pattern;

use TerryLucas2017\Pattern\Created\AbstractFactoryPattern\AbstractFactoryPattern;
use TerryLucas2017\Pattern\Created\FactoryPattern;

class LucasPattern
{
    public function exc()
    {
        //工厂模式测试
        $op = new FactoryPattern();
        $op->exc();

        //抽象工厂模式测试
        $op = new AbstractFactoryPattern();
        $op->exc();

    }
}
