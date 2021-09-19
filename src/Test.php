<?php

declare(strict_types = 1);

class Test
{
    /**
     * @throws \RuntimeException
     */
    public function sayHello(): void
    {
        try {
            $randomInt = (bool)random_int(0, 1);
        } catch (Exception) {
            $randomInt = false;
        }
        assert($randomInt, new \RuntimeException('I can be thrown'));
    }
}