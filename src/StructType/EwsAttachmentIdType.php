<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentIdType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAttachmentIdType extends EwsRequestAttachmentIdType
{
    /**
     * The RootItemId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RootItemId;
    /**
     * The RootItemChangeKey
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RootItemChangeKey;
    /**
     * Constructor method for AttachmentIdType
     * @uses EwsAttachmentIdType::setRootItemId()
     * @uses EwsAttachmentIdType::setRootItemChangeKey()
     * @param string $rootItemId
     * @param string $rootItemChangeKey
     */
    public function __construct($rootItemId = null, $rootItemChangeKey = null)
    {
        $this
            ->setRootItemId($rootItemId)
            ->setRootItemChangeKey($rootItemChangeKey);
    }
    /**
     * Get RootItemId value
     * @return string|null
     */
    public function getRootItemId()
    {
        return $this->RootItemId;
    }
    /**
     * Set RootItemId value
     * @param string $rootItemId
     * @return \Ews\StructType\EwsAttachmentIdType
     */
    public function setRootItemId($rootItemId = null)
    {
        $this->RootItemId = $rootItemId;
        return $this;
    }
    /**
     * Get RootItemChangeKey value
     * @return string|null
     */
    public function getRootItemChangeKey()
    {
        return $this->RootItemChangeKey;
    }
    /**
     * Set RootItemChangeKey value
     * @param string $rootItemChangeKey
     * @return \Ews\StructType\EwsAttachmentIdType
     */
    public function setRootItemChangeKey($rootItemChangeKey = null)
    {
        $this->RootItemChangeKey = $rootItemChangeKey;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAttachmentIdType
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
