<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetImGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetImGroupType extends EwsBaseRequestType
{
    /**
     * The GroupId
     * @var \Ews\StructType\EwsItemIdType
     */
    public $GroupId;
    /**
     * The NewDisplayName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string
     */
    public $NewDisplayName;
    /**
     * Constructor method for SetImGroupType
     * @uses EwsSetImGroupType::setGroupId()
     * @uses EwsSetImGroupType::setNewDisplayName()
     * @param \Ews\StructType\EwsItemIdType $groupId
     * @param string $newDisplayName
     */
    public function __construct(\Ews\StructType\EwsItemIdType $groupId = null, $newDisplayName = null)
    {
        $this
            ->setGroupId($groupId)
            ->setNewDisplayName($newDisplayName);
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
     * @return \Ews\StructType\EwsSetImGroupType
     */
    public function setGroupId(\Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this->GroupId = $groupId;
        return $this;
    }
    /**
     * Get NewDisplayName value
     * @return string|null
     */
    public function getNewDisplayName()
    {
        return $this->NewDisplayName;
    }
    /**
     * Set NewDisplayName value
     * @param string $newDisplayName
     * @return \Ews\StructType\EwsSetImGroupType
     */
    public function setNewDisplayName($newDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($newDisplayName) && !is_string($newDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newDisplayName, true), gettype($newDisplayName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($newDisplayName) && mb_strlen($newDisplayName) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($newDisplayName)), __LINE__);
        }
        $this->NewDisplayName = $newDisplayName;
        return $this;
    }
}
