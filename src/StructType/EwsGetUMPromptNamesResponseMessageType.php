<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $PromptNames;
    /**
     * Constructor method for GetUMPromptNamesResponseMessageType
     * @uses EwsGetUMPromptNamesResponseMessageType::setPromptNames()
     * @param \Ews\ArrayType\EwsArrayOfStringsType $promptNames
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStringsType $promptNames = null)
    {
        $this
            ->setPromptNames($promptNames);
    }
    /**
     * Get PromptNames value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getPromptNames()
    {
        return $this->PromptNames;
    }
    /**
     * Set PromptNames value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $promptNames
     * @return \Ews\StructType\EwsGetUMPromptNamesResponseMessageType
     */
    public function setPromptNames(\Ews\ArrayType\EwsArrayOfStringsType $promptNames = null)
    {
        $this->PromptNames = $promptNames;
        return $this;
    }
}
