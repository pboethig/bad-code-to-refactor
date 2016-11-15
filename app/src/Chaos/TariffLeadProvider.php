<?php
/**
 * Created by PhpStorm.
 * User: pboethig
 * Date: 15.11.16
 * Time: 21:03
 */

namespace Tipps\Chaos;


class TariffLeadProvider
{

    public function getBack($back)
    {
        $arr_back = [
            'back1'=>array('name'=>'tarif1','Preis1'=>300, 'Provider'=>'Telekom'),
            'back2'=>array('name'=>'tarif2','Preis2'=>400, 'Provider'=>'O2'),
            'back3'=>array('name'=>'tarif3','Preis3'=>500, 'Provider'=>'Vodophone')
        ];

        return $arr_back[$back];
    }
}