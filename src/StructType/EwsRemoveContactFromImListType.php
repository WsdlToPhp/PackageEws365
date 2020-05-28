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
}
