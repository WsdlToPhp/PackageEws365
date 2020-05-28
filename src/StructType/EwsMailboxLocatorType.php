<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxLocatorType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxLocatorType extends AbstractStructBase
{
    /**
     * The ExternalDirectoryObjectId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalDirectoryObjectId;
    /**
     * The LegacyDn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LegacyDn;
    /**
     * Constructor method for MailboxLocatorType
     * @uses EwsMailboxLocatorType::setExternalDirectoryObjectId()
     * @uses EwsMailboxLocatorType::setLegacyDn()
     * @param string $externalDirectoryObjectId
     * @param string $legacyDn
     */
    public function __construct($externalDirectoryObjectId = null, $legacyDn = null)
    {
        $this
            ->setExternalDirectoryObjectId($externalDirectoryObjectId)
            ->setLegacyDn($legacyDn);
    }
    /**
     * Get ExternalDirectoryObjectId value
     * @return string|null
     */
    public function getExternalDirectoryObjectId()
    {
        return $this->ExternalDirectoryObjectId;
    }
    /**
     * Set ExternalDirectoryObjectId value
     * @param string $externalDirectoryObjectId
     * @return \Ews\StructType\EwsMailboxLocatorType
     */
    public function setExternalDirectoryObjectId($externalDirectoryObjectId = null)
    {
        // validation for constraint: string
        if (!is_null($externalDirectoryObjectId) && !is_string($externalDirectoryObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDirectoryObjectId, true), gettype($externalDirectoryObjectId)), __LINE__);
        }
        $this->ExternalDirectoryObjectId = $externalDirectoryObjectId;
        return $this;
    }
    /**
     * Get LegacyDn value
     * @return string|null
     */
    public function getLegacyDn()
    {
        return $this->LegacyDn;
    }
    /**
     * Set LegacyDn value
     * @param string $legacyDn
     * @return \Ews\StructType\EwsMailboxLocatorType
     */
    public function setLegacyDn($legacyDn = null)
    {
        // validation for constraint: string
        if (!is_null($legacyDn) && !is_string($legacyDn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legacyDn, true), gettype($legacyDn)), __LINE__);
        }
        $this->LegacyDn = $legacyDn;
        return $this;
    }
}
