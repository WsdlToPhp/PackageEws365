<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SenderAddInEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSenderAddInEntityType extends AbstractStructBase
{
    /**
     * The ExtensionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExtensionId;
    /**
     * Constructor method for SenderAddInEntityType
     * @uses EwsSenderAddInEntityType::setExtensionId()
     * @param string $extensionId
     */
    public function __construct($extensionId = null)
    {
        $this
            ->setExtensionId($extensionId);
    }
    /**
     * Get ExtensionId value
     * @return string|null
     */
    public function getExtensionId()
    {
        return $this->ExtensionId;
    }
    /**
     * Set ExtensionId value
     * @param string $extensionId
     * @return \Ews\StructType\EwsSenderAddInEntityType
     */
    public function setExtensionId($extensionId = null)
    {
        // validation for constraint: string
        if (!is_null($extensionId) && !is_string($extensionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extensionId, true), gettype($extensionId)), __LINE__);
        }
        $this->ExtensionId = $extensionId;
        return $this;
    }
}
