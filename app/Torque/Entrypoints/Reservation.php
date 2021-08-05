<?php

namespace App\Torque\Entrypoints;

use Fuseday\Torque\Response;

class Reservation
{
    public function make()
    {
//        dd(request()->all()); // Let's show it

        sleep(1); // Make the reservation

        $state = ['loading' => false];

        if(request('selection') <= 1) {
            return Response::make()
                ->state($state)
                ->toastSuccess('Yeaah, you got it!');
        };

        return Response::make()
            ->state($state)
            ->toastError('Oooh no, too late :(');
    }
}
