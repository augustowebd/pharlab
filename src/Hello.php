<?php

namespace Augustowebd\Pharlab;

final class Hello
{
    public function say(string $whatShouldISay = null)
    {
        echo $whatShouldISay ?? "hello.";
    }
}
