<?php

namespace App\Torque\Entrypoints\Nested;

class DumpDie
{
    public function dd()
    {
        dd(request()->all());
    }
}
