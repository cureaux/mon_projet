<?php

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
