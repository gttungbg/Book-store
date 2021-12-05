<?php 

namespace App\Configs;

class Status
{
    const GET_STATUS = [
        0 => ['name' => 'Request', 'class' => 'btn btn-warning'],
        1 => ['name' => 'Borrwing', 'class' => 'btn btn-primary'],
        2 => ['name' => 'Returned', 'class' => 'btn btn-success'],
    ];
}