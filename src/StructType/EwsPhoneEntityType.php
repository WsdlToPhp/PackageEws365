<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhoneEntityType extends EwsEntityType
{
    /**
     * The OriginalPhoneString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OriginalPhoneString = null;
    /**
     * The PhoneString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneString = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * Constructor method for PhoneEntityType
     * @uses EwsPhoneEntityType::setOriginalPhoneString()
     * @uses EwsPhoneEntityType::setPhoneString()
     * @uses EwsPhoneEntityType::setType()
     * @param string $originalPhoneString
     * @param string $phoneString
     * @param string $type
     */
    public function __construct(?string $originalPhoneString = null, ?string $phoneString = null, ?string $type = null)
    {
        $this
            ->setOriginalPhoneString($originalPhoneString)
            ->setPhoneString($phoneString)
            ->setType($type);
    }
    /**
     * Get OriginalPhoneString value
     * @return string|null
     */
    public function getOriginalPhoneString(): ?string
    {
        return $this->OriginalPhoneString;
    }
    /**
     * Set OriginalPhoneString value
     * @param string $originalPhoneString
     * @return \StructType\EwsPhoneEntityType
     */
    public function setOriginalPhoneString(?string $originalPhoneString = null): self
    {
        // validation for constraint: string
        if (!is_null($originalPhoneString) && !is_string($originalPhoneString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalPhoneString, true), gettype($originalPhoneString)), __LINE__);
        }
        $this->OriginalPhoneString = $originalPhoneString;
        
        return $this;
    }
    /**
     * Get PhoneString value
     * @return string|null
     */
    public function getPhoneString(): ?string
    {
        return $this->PhoneString;
    }
    /**
     * Set PhoneString value
     * @param string $phoneString
     * @return \StructType\EwsPhoneEntityType
     */
    public function setPhoneString(?string $phoneString = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneString) && !is_string($phoneString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneString, true), gettype($phoneString)), __LINE__);
        }
        $this->PhoneString = $phoneString;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \StructType\EwsPhoneEntityType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
