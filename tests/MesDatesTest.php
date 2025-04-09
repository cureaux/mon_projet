<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Camro\MonProjet\MesDates;

final class MesDatesTest extends TestCase
{
    public function testRetourneJson()
    {
        $mesDates = new MesDates();
        $result = $mesDates->demain();

        $this->assertJson($result, 'Le résultat n\'est pas un JSON valide.');
    }

    
    public function testContenuDemain()
    {
        $mesDates = new MesDates();
        $result = json_decode($mesDates->demain(), true);
        $expected = (new DateTime('tomorrow'))->format('d-m-Y');

        $this->assertEquals($expected, $result['demain'], 'La date de demain n\'est pas correcte.');
    }
}