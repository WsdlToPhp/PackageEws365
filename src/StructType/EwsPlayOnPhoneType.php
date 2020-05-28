<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlayOnPhoneType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPlayOnPhoneType extends EwsBaseRequestType
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The DialString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DialString;
    /**
     * Constructor method for PlayOnPhoneType
     * @uses EwsPlayOnPhoneType::setItemId()
     * @uses EwsPlayOnPhoneType::setDialString()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param string $dialString
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, $dialString = null)
    {
        $this
            ->setItemId($itemId)
            ->setDialString($dialString);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsPlayOnPhoneType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get DialString value
     * @return string
     */
    public function getDialString()
    {
        return $this->DialString;
    }
    /**
     * Set DialString value
     * @param string $dialString
     * @return \Ews\StructType\EwsPlayOnPhoneType
     */
    public function setDialString($dialString = null)
    {
        // validation for constraint: string
        if (!is_null($dialString) && !is_string($dialString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dialString, true), gettype($dialString)), __LINE__);
        }
        $this->DialString = $dialString;
        return $this;
    }
}
