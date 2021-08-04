<?php

namespace App\Torque\Entrypoints;

use Fuseday\Torque\Response;

class Foo
{
    public function bar()
    {
//        dd(request()->all());

        sleep(1);

        return Response::make()
            ->state(['loading' => false])
//            ->toastSuccess('Fooo')
            ;
    }
}
