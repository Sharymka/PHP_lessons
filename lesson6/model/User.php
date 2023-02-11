<?php

namespace model;

class User
{
    private string $username;

    function _construct($username) {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}