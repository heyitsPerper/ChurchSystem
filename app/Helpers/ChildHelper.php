<?php

namespace App\Helpers;

use App\Models\Baptismal;
use App\Models\Confirmation;

class ChildHelper{
    static function getChildNames($notifications)
    {
        $childNames = [];
        foreach($notifications as $notification)
        {
            $requested = '';
            if($notification->request_type == "baptismal")
            {
                $requested = Baptismal::find($notification->request_id);
            }else{
                $requested = Confirmation::find($notification->request_id);
            }

            array_push($childNames, $requested);
        }

        return $childNames;
    }
}
