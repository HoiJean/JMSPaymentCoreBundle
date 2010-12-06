<?php

namespace Bundle\PaymentBundle\Model;

interface ExtendedDataInterface
{
    function isEncryptionRequired($name);
    function remove($name);
    function set($name, $value, $encrypt = true);
    function get($name);
    function all();
    function equals(ExtendedDataInterface $data);
}