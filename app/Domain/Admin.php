<?php

namespace Mahathir\RailMvc\Domain;

use DateTime;

class Admin {
    public int $ID;
    public ?string $AdminName;
    public ?string $UserName;
    public ?int $MobileNumber;
    public ?string $Email;
    public ?string $Password;
    public ?DateTime $AdminRegdate;
}