<?php

namespace App\Enums;

class Status
{
    const PRZYGOTOWANIE = 'przygotowywanie';
    const WDRODZE = 'w drodze';
    const DOSTARCZONO = 'dostarczono';
    const ANULOWANO = 'anulowano';

    const STATUSTYPES = [
        self::PRZYGOTOWANIE,
        self::WDRODZE,
        self::DOSTARCZONO,
        self::ANULOWANO
    ];
}
