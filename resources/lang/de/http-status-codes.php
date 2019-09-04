<?php

return [

    /*
    |--------------------------------------------------------------------------
    | HTTP Status Codes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the error pages to display
    | the correct error text corresponding to the status code.
    |
    | All descriptions have been taken from RFC 7231:
    | https://tools.ietf.org/html/rfc7231
    */

    '400-title' => 'Ungültige Anforderung'
    '400-description' => 'Die Anfrage-Nachricht war fehlerhaft aufgebaut. ',

    '401-title' => 'Nicht autorisier',
    '401-description' => 'Die Anfrage kann nicht ohne gültige Authentifizierung durchgeführt werden.',

    '403-title' => 'Verboten',
    '403-description' => 'Der Server hat die Anfrage verstanden, aber weigert sich, diese zuzulassen.',

    '404-title' => 'Nicht gefunden',
    '404-description' => 'Die angeforderte Ressource wurde nicht gefunden.',

    '405-title' => 'Methode nicht erlaub',
    '405-description' => 'Die Anfrage darf nur mit anderen HTTP-Methoden gestellt werden.',

    '422-title' => 'Kann nicht verarbeitet werden',
    '422-description' => 'Die Anfrage kann auf Grund von semantischen Fehlern nicht verarbeitet werden.',

    '500-title' => 'Interner Serverfehler',
    '500-description' => 'Der Server entdeckt einen internen Fehler und kann deshalb die Anfrage nicht bearbeiten.',

];
