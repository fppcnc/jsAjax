<?php
class User
{
private string $name;
private int $time;

    /**
     * @param string $name
     * @param int $time
     */
    public function __construct(string $name, int $time)
    {
        $this->name = $name;
        $this->time = $time;
    }


}