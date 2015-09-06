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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUnifiedGroupMembersResponseType
     */
    public $MembersInfo;
    /**
     * The OwnersInfo
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUnifiedGroupMembersResponseMessageType
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
