<?php
/**
 * Created by PhpStorm.
 * User: pboethig
 * Date: 15.11.16
 * Time: 20:53
 */

namespace Tipps\Chaos;

use Tipps\TariffLeadProvider;

class KomischesObject
{
    public function berechne_irgendetwas_und_mach_was_damit($acc_lead_with_sso_back, $tariff_lead_provider)
    {
        check_int($acc_lead_with_sso_back);

        check_object($tariff_lead_provider);

        return $acc_lead_with_sso_back + $tariff_lead_provider->getBack('back1')['Preis1'];
    }
}


function check_int($value)
{
    if (!is_int($value)) {
        throw new \Exception('value is no int');
    }
}

function check_object($object)
{
    if (!is_object($object))
    {
        throw new \Exception('is no object');
    }
}
