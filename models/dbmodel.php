<?php
abstract class DBClass
{
    public function fetch()
    {
        return $this->fetch();
    }
}

class RoomClass extends DBClass
{
    public function getRooms()
    {
        return "SELECT * FROM room";
    }
}
