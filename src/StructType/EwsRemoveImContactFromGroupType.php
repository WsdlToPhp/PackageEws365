<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveImContactFromGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRemoveImContactFromGroupType extends EwsBaseRequestType
{
    /**
     * The ContactId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ContactId = null;
    /**
     * The GroupId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $GroupId = null;
    /**
     * Constructor method for RemoveImContactFromGroupType
     * @uses EwsRemoveImContactFromGroupType::setContactId()
     * @uses EwsRemoveImContactFromGroupType::setGroupId()
     * @param \StructType\EwsItemIdType $contactId
     * @param \StructType\EwsItemIdType $groupId
     */
    public function __construct(?\StructType\EwsItemIdType $contactId = null, ?\StructType\EwsItemIdType $groupId = null)
    {
        $this
            ->setContactId($contactId)
            ->setGroupId($groupId);
    }
    /**
     * Get ContactId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getContactId(): ?\StructType\EwsItemIdType
    {
        return $this->ContactId;
    }
    /**
     * Set ContactId value
     * @param \StructType\EwsItemIdType $contactId
     * @return \StructType\EwsRemoveImContactFromGroupType
     */
    public function setContactId(?\StructType\EwsItemIdType $contactId = null): self
    {
        $this->ContactId = $contactId;
        
        return $this;
    }
    /**
     * Get GroupId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getGroupId(): ?\StructType\EwsItemIdType
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param \StructType\EwsItemIdType $groupId
     * @return \StructType\EwsRemoveImContactFromGroupType
     */
    public function setGroupId(?\StructType\EwsItemIdType $groupId = null): self
    {
        $this->GroupId = $groupId;
        
        return $this;
    }
}
