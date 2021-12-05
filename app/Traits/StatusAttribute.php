<?php

namespace App\Traits;
use App\Configs\Status as StatusConfig;

trait StatusAttribute
{
    public function getStatusAttribute($value)
    {
        if (in_array($value, StatusConfig::GET_STATUS)) return 'N\A';

        $status = StatusConfig::GET_STATUS[$value];

        $class = $status['class'];
        $name = $status['name'];

        return ' <button class="'.$class.' dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton" data-toggle="dropdown">
                '.$name.'
                </button>';
    }
}