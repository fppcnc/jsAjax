<?php
class User implements JsonSerializable
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

    // give all Attributes
    // implements JsonSerializable
    public function jsonSerialize() {
        return ['name' => $this->name, 'time' => $this->time];
    }

}