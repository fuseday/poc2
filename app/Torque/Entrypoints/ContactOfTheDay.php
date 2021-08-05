<?php

namespace App\Torque\Entrypoints;

use App\Models\Contact;
use Fuseday\Torque\Response;

class ContactOfTheDay
{
    public function findNext(): Response
    {
        $randomContact = Contact::query()
            ->take(50)
            ->get()
            ->random();

        ray($randomContact);

        return Response::make()
            ->state([
                'contact' => $randomContact,
            ])
            ->toastSuccess('There you go, good luck!');
    }
}
