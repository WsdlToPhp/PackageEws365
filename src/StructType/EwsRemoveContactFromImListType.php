<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveContactFromImListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRemoveContactFromImListType extends EwsBaseRequestType
{
    /**
     * The ContactId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ContactId;
    /**
     * Constructor method for RemoveContactFromImListType
     * @uses EwsRemoveContactFromImListType::setContactId()
     * @param \Ews\StructType\EwsItemIdType $contactId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $contactId = null)
    {
        $this
            ->setContactId($contactId);
    }
    /**
     * Get ContactId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getContactId()
    {
        return $this->ContactId;
    }
    /**
     * Set ContactId value
     * @param \Ews\StructType\EwsItemIdType $contactId
     * @return \Ews\StructType\EwsRemoveContactFromImListType
     */
    public function setContactId(\Ews\StructType\EwsItemIdType $contactId = null)
    {
        $this->ContactId = $contactId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRemoveContactFromImListType
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
