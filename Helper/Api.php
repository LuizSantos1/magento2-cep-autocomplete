<?php
/*
 * @package     Intelipost_Autocomplete
 * @copyright   Copyright (c) 2016 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

namespace Intelipost\Autocomplete\Helper;
use FlyingLuscas\ViaCEP\ViaCEP;

class Api extends \Intelipost\Basic\Helper\Api
{

const AUTOCOMPLETE_CEP_LOCATION_ADDRESS_COMPLETE = 'cep_location/address_complete/';

protected $_scopeConfig;

public function __construct
(
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
)
{
    $this->_scopeConfig = $scopeConfig;

    parent::__construct($scopeConfig);
}

public function getCEPLocationAddressComplete ($destPostcode)
{
    $response = $viacep->findByZipCode("{$destPostcode}")->toJson();

    $result = json_decode ($response, true);

    return $result;
}

}

