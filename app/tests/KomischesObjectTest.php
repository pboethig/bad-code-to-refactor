<?php

use Tipps\Chaos\KomischesObject;

class KomischesObjectTest extends \PHPUnit\Framework\TestCase
{
    public function testDasKomischeObjectWasDaRauskommt()
    {
        $komischesObjekt = new KomischesObject();

        $lProv = new \Tipps\Chaos\TariffLeadProvider();

        $irgendein_unbekannter_wert = $komischesObjekt->berechne_irgendetwas_und_mach_was_damit(10, $lProv);

        $this->assertEquals(310, $irgendein_unbekannter_wert);
    }

    public function testDasKomischeObjectWasDaRauskommt2()
    {
        $komischesObjekt2 = new \Tipps\Chaos\KomischesObject2();

        $lProv = new \Tipps\Chaos\TariffLeadProvider();

        $irgendein_unbekannter_wert = $komischesObjekt2->berechne_irgendetwas_und_mach_was_damit2(10, $lProv);

        $this->assertEquals(310, $irgendein_unbekannter_wert);
    }
}