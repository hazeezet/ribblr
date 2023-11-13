<?php


trait Payloads
{

    protected function validateName($name)
    {
        $regex = '/^[a-zA-Z0-9\s\-]+$/';
        if (!preg_match($regex, $name)) return false;
        return true;
    }
}
