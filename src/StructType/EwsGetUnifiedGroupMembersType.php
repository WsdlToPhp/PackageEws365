<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupMembersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupMembersType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The GroupMembersResponseShape
     * Meta information extracted from the WSDL
     * - ref: t:GroupMembersResponseShape
     * @var string
     */
    public $GroupMembersResponseShape;
    /**
     * The MembersPaging
     * Meta information extracted from the WSDL
     * - ref: t:MembersPaging
     * @var \Ews\StructType\EwsBasePagingType
     */
    public $MembersPaging;
    /**
     * The MembersSortOrder
     * Meta information extracted from the WSDL
     * - ref: t:MembersSortOrder
     * @var string
     */
    public $MembersSortOrder;
    /**
     * Constructor method for GetUnifiedGroupMembersType
     * @uses EwsGetUnifiedGroupMembersType::setGroupMembersResponseShape()
     * @uses EwsGetUnifiedGroupMembersType::setMembersPaging()
     * @uses EwsGetUnifiedGroupMembersType::setMembersSortOrder()
     * @param string $groupMembersResponseShape
     * @param \Ews\StructType\EwsBasePagingType $membersPaging
     * @param string $membersSortOrder
     */
    public function __construct($groupMembersResponseShape = null, \Ews\StructType\EwsBasePagingType $membersPaging = null, $membersSortOrder = null)
    {
        $this
            ->setGroupMembersResponseShape($groupMembersResponseShape)
            ->setMembersPaging($membersPaging)
            ->setMembersSortOrder($membersSortOrder);
    }
    /**
     * Get GroupMembersResponseShape value
     * @return string|null
     */
    public function getGroupMembersResponseShape()
    {
        return $this->GroupMembersResponseShape;
    }
    /**
     * Set GroupMembersResponseShape value
     * @uses \Ews\EnumType\EwsUnifiedGroupMembersResponseShapeType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupMembersResponseShapeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $groupMembersResponseShape
     * @return \Ews\StructType\EwsGetUnifiedGroupMembersType
     */
    public function setGroupMembersResponseShape($groupMembersResponseShape = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupMembersResponseShapeType::valueIsValid($groupMembersResponseShape)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUnifiedGroupMembersResponseShapeType', is_array($groupMembersResponseShape) ? implode(', ', $groupMembersResponseShape) : var_export($groupMembersResponseShape, true), implode(', ', \Ews\EnumType\EwsUnifiedGroupMembersResponseShapeType::getValidValues())), __LINE__);
        }
        $this->GroupMembersResponseShape = $groupMembersResponseShape;
        return $this;
    }
    /**
     * Get MembersPaging value
     * @return \Ews\StructType\EwsBasePagingType|null
     */
    public function getMembersPaging()
    {
        return $this->MembersPaging;
    }
    /**
     * Set MembersPaging value
     * @param \Ews\StructType\EwsBasePagingType $membersPaging
     * @return \Ews\StructType\EwsGetUnifiedGroupMembersType
     */
    public function setMembersPaging(\Ews\StructType\EwsBasePagingType $membersPaging = null)
    {
        $this->MembersPaging = $membersPaging;
        return $this;
    }
    /**
     * Get MembersSortOrder value
     * @return string|null
     */
    public function getMembersSortOrder()
    {
        return $this->MembersSortOrder;
    }
    /**
     * Set MembersSortOrder value
     * @uses \Ews\EnumType\EwsUnifiedGroupMembersSortType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupMembersSortType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $membersSortOrder
     * @return \Ews\StructType\EwsGetUnifiedGroupMembersType
     */
    public function setMembersSortOrder($membersSortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupMembersSortType::valueIsValid($membersSortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUnifiedGroupMembersSortType', is_array($membersSortOrder) ? implode(', ', $membersSortOrder) : var_export($membersSortOrder, true), implode(', ', \Ews\EnumType\EwsUnifiedGroupMembersSortType::getValidValues())), __LINE__);
        }
        $this->MembersSortOrder = $membersSortOrder;
        return $this;
    }
}
