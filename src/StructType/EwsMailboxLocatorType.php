<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxLocatorType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMailboxLocatorType extends AbstractStructBase
{
    /**
     * The ExternalDirectoryObjectId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalDirectoryObjectId;
    /**
     * The LegacyDn
     * Meta informations extracted from the WSDL
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
        $this->LegacyDn = $legacyDn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailboxLocatorType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
