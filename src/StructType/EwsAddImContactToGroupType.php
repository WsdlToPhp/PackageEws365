<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddImContactToGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddImContactToGroupType extends EwsBaseRequestType
{
    /**
     * The ContactId
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ContactId;
    /**
     * The GroupId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $GroupId;
    /**
     * Constructor method for AddImContactToGroupType
     * @uses EwsAddImContactToGroupType::setContactId()
     * @uses EwsAddImContactToGroupType::setGroupId()
     * @param \Ews\StructType\EwsItemIdType $contactId
     * @param \Ews\StructType\EwsItemIdType $groupId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $contactId = null, \Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this
            ->setContactId($contactId)
            ->setGroupId($groupId);
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
     * @return \Ews\StructType\EwsAddImContactToGroupType
     */
    public function setContactId(\Ews\StructType\EwsItemIdType $contactId = null)
    {
        $this->ContactId = $contactId;
        return $this;
    }
    /**
     * Get GroupId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getGroupId()
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param \Ews\StructType\EwsItemIdType $groupId
     * @return \Ews\StructType\EwsAddImContactToGroupType
     */
    public function setGroupId(\Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this->GroupId = $groupId;
        return $this;
    }
}
