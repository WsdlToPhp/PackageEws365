<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ItemId;
    /**
     * The DialString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DialString;
    /**
     * Constructor method for PlayOnPhoneType
     * @uses EwsPlayOnPhoneType::setItemId()
     * @uses EwsPlayOnPhoneType::setDialString()
     * @param \StructType\EwsItemIdType $itemId
     * @param string $dialString
     */
    public function __construct(\StructType\EwsItemIdType $itemId, string $dialString)
    {
        $this
            ->setItemId($itemId)
            ->setDialString($dialString);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getItemId(): \StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsPlayOnPhoneType
     */
    public function setItemId(\StructType\EwsItemIdType $itemId): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get DialString value
     * @return string
     */
    public function getDialString(): string
    {
        return $this->DialString;
    }
    /**
     * Set DialString value
     * @param string $dialString
     * @return \StructType\EwsPlayOnPhoneType
     */
    public function setDialString(string $dialString): self
    {
        // validation for constraint: string
        if (!is_null($dialString) && !is_string($dialString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dialString, true), gettype($dialString)), __LINE__);
        }
        $this->DialString = $dialString;
        
        return $this;
    }
}
