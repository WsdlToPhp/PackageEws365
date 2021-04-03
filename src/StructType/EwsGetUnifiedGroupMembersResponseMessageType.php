<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupMembersResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupMembersResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MembersInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsUnifiedGroupMembersResponseType|null
     */
    protected ?\StructType\EwsUnifiedGroupMembersResponseType $MembersInfo = null;
    /**
     * The OwnersInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsUnifiedGroupMembersResponseType|null
     */
    protected ?\StructType\EwsUnifiedGroupMembersResponseType $OwnersInfo = null;
    /**
     * Constructor method for GetUnifiedGroupMembersResponseMessageType
     * @uses EwsGetUnifiedGroupMembersResponseMessageType::setMembersInfo()
     * @uses EwsGetUnifiedGroupMembersResponseMessageType::setOwnersInfo()
     * @param \StructType\EwsUnifiedGroupMembersResponseType $membersInfo
     * @param \StructType\EwsUnifiedGroupMembersResponseType $ownersInfo
     */
    public function __construct(?\StructType\EwsUnifiedGroupMembersResponseType $membersInfo = null, ?\StructType\EwsUnifiedGroupMembersResponseType $ownersInfo = null)
    {
        $this
            ->setMembersInfo($membersInfo)
            ->setOwnersInfo($ownersInfo);
    }
    /**
     * Get MembersInfo value
     * @return \StructType\EwsUnifiedGroupMembersResponseType|null
     */
    public function getMembersInfo(): ?\StructType\EwsUnifiedGroupMembersResponseType
    {
        return $this->MembersInfo;
    }
    /**
     * Set MembersInfo value
     * @param \StructType\EwsUnifiedGroupMembersResponseType $membersInfo
     * @return \StructType\EwsGetUnifiedGroupMembersResponseMessageType
     */
    public function setMembersInfo(?\StructType\EwsUnifiedGroupMembersResponseType $membersInfo = null): self
    {
        $this->MembersInfo = $membersInfo;
        
        return $this;
    }
    /**
     * Get OwnersInfo value
     * @return \StructType\EwsUnifiedGroupMembersResponseType|null
     */
    public function getOwnersInfo(): ?\StructType\EwsUnifiedGroupMembersResponseType
    {
        return $this->OwnersInfo;
    }
    /**
     * Set OwnersInfo value
     * @param \StructType\EwsUnifiedGroupMembersResponseType $ownersInfo
     * @return \StructType\EwsGetUnifiedGroupMembersResponseMessageType
     */
    public function setOwnersInfo(?\StructType\EwsUnifiedGroupMembersResponseType $ownersInfo = null): self
    {
        $this->OwnersInfo = $ownersInfo;
        
        return $this;
    }
}
