<?php

/**
 * Fichier principal.
 * Ce fichier est utilisé pour instancier un objet de la classe MesDates
 * et afficher la date de demain.
 * php version 8.4.5
 *
 * @category Utility
 * @package  DateFunctions
 * @author   camron <camron310303@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://bloup.nvsphr.fr
 */

declare(strict_types=1);

namespace UPJV;

class MesDates
{
    public function demain(): string
    {
        $demain = new \DateTime('tomorrow');
        return json_encode(['demain' => $demain->format('d-m-Y')]);
    }
}
