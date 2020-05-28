<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsUnifiedGroupMembersResponseType
     */
    public $MembersInfo;
    /**
     * The OwnersInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUnifiedGroupMembersResponseType
     */
    public $OwnersInfo;
    /**
     * Constructor method for GetUnifiedGroupMembersResponseMessageType
     * @uses EwsGetUnifiedGroupMembersResponseMessageType::setMembersInfo()
     * @uses EwsGetUnifiedGroupMembersResponseMessageType::setOwnersInfo()
     * @param \Ews\StructType\EwsUnifiedGroupMembersResponseType $membersInfo
     * @param \Ews\StructType\EwsUnifiedGroupMembersResponseType $ownersInfo
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupMembersResponseType $membersInfo = null, \Ews\StructType\EwsUnifiedGroupMembersResponseType $ownersInfo = null)
    {
        $this
            ->setMembersInfo($membersInfo)
            ->setOwnersInfo($ownersInfo);
    }
    /**
     * Get MembersInfo value
     * @return \Ews\StructType\EwsUnifiedGroupMembersResponseType|null
     */
    public function getMembersInfo()
    {
        return $this->MembersInfo;
    }
    /**
     * Set MembersInfo value
     * @param \Ews\StructType\EwsUnifiedGroupMembersResponseType $membersInfo
     * @return \Ews\StructType\EwsGetUnifiedGroupMembersResponseMessageType
     */
    public function setMembersInfo(\Ews\StructType\EwsUnifiedGroupMembersResponseType $membersInfo = null)
    {
        $this->MembersInfo = $membersInfo;
        return $this;
    }
    /**
     * Get OwnersInfo value
     * @return \Ews\StructType\EwsUnifiedGroupMembersResponseType|null
     */
    public function getOwnersInfo()
    {
        return $this->OwnersInfo;
    }
    /**
     * Set OwnersInfo value
     * @param \Ews\StructType\EwsUnifiedGroupMembersResponseType $ownersInfo
     * @return \Ews\StructType\EwsGetUnifiedGroupMembersResponseMessageType
     */
    public function setOwnersInfo(\Ews\StructType\EwsUnifiedGroupMembersResponseType $ownersInfo = null)
    {
        $this->OwnersInfo = $ownersInfo;
        return $this;
    }
}
