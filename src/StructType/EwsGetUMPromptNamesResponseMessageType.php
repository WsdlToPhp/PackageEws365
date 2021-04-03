<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMPromptNamesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMPromptNamesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PromptNames
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $PromptNames = null;
    /**
     * Constructor method for GetUMPromptNamesResponseMessageType
     * @uses EwsGetUMPromptNamesResponseMessageType::setPromptNames()
     * @param \ArrayType\EwsArrayOfStringsType $promptNames
     */
    public function __construct(?\ArrayType\EwsArrayOfStringsType $promptNames = null)
    {
        $this
            ->setPromptNames($promptNames);
    }
    /**
     * Get PromptNames value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getPromptNames(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->PromptNames;
    }
    /**
     * Set PromptNames value
     * @param \ArrayType\EwsArrayOfStringsType $promptNames
     * @return \StructType\EwsGetUMPromptNamesResponseMessageType
     */
    public function setPromptNames(?\ArrayType\EwsArrayOfStringsType $promptNames = null): self
    {
        $this->PromptNames = $promptNames;
        
        return $this;
    }
}
