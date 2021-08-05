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

        return Response::make()
            ->state([
                'contact' => $randomContact,
            ])
            ->event('new-contact', $randomContact)
            ->toastSuccess('There you go, good luck!');
    }
}
