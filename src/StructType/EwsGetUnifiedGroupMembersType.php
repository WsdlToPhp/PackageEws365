<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $GroupMembersResponseShape = null;
    /**
     * The MembersPaging
     * Meta information extracted from the WSDL
     * - ref: t:MembersPaging
     * @var \StructType\EwsBasePagingType|null
     */
    protected ?\StructType\EwsBasePagingType $MembersPaging = null;
    /**
     * The MembersSortOrder
     * Meta information extracted from the WSDL
     * - ref: t:MembersSortOrder
     * @var string|null
     */
    protected ?string $MembersSortOrder = null;
    /**
     * Constructor method for GetUnifiedGroupMembersType
     * @uses EwsGetUnifiedGroupMembersType::setGroupMembersResponseShape()
     * @uses EwsGetUnifiedGroupMembersType::setMembersPaging()
     * @uses EwsGetUnifiedGroupMembersType::setMembersSortOrder()
     * @param string $groupMembersResponseShape
     * @param \StructType\EwsBasePagingType $membersPaging
     * @param string $membersSortOrder
     */
    public function __construct(?string $groupMembersResponseShape = null, ?\StructType\EwsBasePagingType $membersPaging = null, ?string $membersSortOrder = null)
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
    public function getGroupMembersResponseShape(): ?string
    {
        return $this->GroupMembersResponseShape;
    }
    /**
     * Set GroupMembersResponseShape value
     * @uses \EnumType\EwsUnifiedGroupMembersResponseShapeType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupMembersResponseShapeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $groupMembersResponseShape
     * @return \StructType\EwsGetUnifiedGroupMembersType
     */
    public function setGroupMembersResponseShape(?string $groupMembersResponseShape = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupMembersResponseShapeType::valueIsValid($groupMembersResponseShape)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupMembersResponseShapeType', is_array($groupMembersResponseShape) ? implode(', ', $groupMembersResponseShape) : var_export($groupMembersResponseShape, true), implode(', ', \EnumType\EwsUnifiedGroupMembersResponseShapeType::getValidValues())), __LINE__);
        }
        $this->GroupMembersResponseShape = $groupMembersResponseShape;
        
        return $this;
    }
    /**
     * Get MembersPaging value
     * @return \StructType\EwsBasePagingType|null
     */
    public function getMembersPaging(): ?\StructType\EwsBasePagingType
    {
        return $this->MembersPaging;
    }
    /**
     * Set MembersPaging value
     * @param \StructType\EwsBasePagingType $membersPaging
     * @return \StructType\EwsGetUnifiedGroupMembersType
     */
    public function setMembersPaging(?\StructType\EwsBasePagingType $membersPaging = null): self
    {
        $this->MembersPaging = $membersPaging;
        
        return $this;
    }
    /**
     * Get MembersSortOrder value
     * @return string|null
     */
    public function getMembersSortOrder(): ?string
    {
        return $this->MembersSortOrder;
    }
    /**
     * Set MembersSortOrder value
     * @uses \EnumType\EwsUnifiedGroupMembersSortType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupMembersSortType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $membersSortOrder
     * @return \StructType\EwsGetUnifiedGroupMembersType
     */
    public function setMembersSortOrder(?string $membersSortOrder = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupMembersSortType::valueIsValid($membersSortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupMembersSortType', is_array($membersSortOrder) ? implode(', ', $membersSortOrder) : var_export($membersSortOrder, true), implode(', ', \EnumType\EwsUnifiedGroupMembersSortType::getValidValues())), __LINE__);
        }
        $this->MembersSortOrder = $membersSortOrder;
        
        return $this;
    }
}
