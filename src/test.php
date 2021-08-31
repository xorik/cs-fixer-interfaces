<?php

interface Example
{
    public function methodOne(): int;

    public function methodTwo(): int;
}

class Blabla implements Example
{
    public function methodOne(): int
    {
        return 1;
    }

    public function methodTwo(): int
    {
        return 2;
    }
}
