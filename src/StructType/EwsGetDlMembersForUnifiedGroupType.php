<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDlMembersForUnifiedGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetDlMembersForUnifiedGroupType extends EwsBaseRequestType
{
    /**
     * The DlIdentity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public $DlIdentity;
    /**
     * The MembersCountLimit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MembersCountLimit;
    /**
     * Constructor method for GetDlMembersForUnifiedGroupType
     * @uses EwsGetDlMembersForUnifiedGroupType::setDlIdentity()
     * @uses EwsGetDlMembersForUnifiedGroupType::setMembersCountLimit()
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $dlIdentity
     * @param int $membersCountLimit
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupIdentity $dlIdentity = null, $membersCountLimit = null)
    {
        $this
            ->setDlIdentity($dlIdentity)
            ->setMembersCountLimit($membersCountLimit);
    }
    /**
     * Get DlIdentity value
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function getDlIdentity()
    {
        return $this->DlIdentity;
    }
    /**
     * Set DlIdentity value
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $dlIdentity
     * @return \Ews\StructType\EwsGetDlMembersForUnifiedGroupType
     */
    public function setDlIdentity(\Ews\StructType\EwsUnifiedGroupIdentity $dlIdentity = null)
    {
        $this->DlIdentity = $dlIdentity;
        return $this;
    }
    /**
     * Get MembersCountLimit value
     * @return int|null
     */
    public function getMembersCountLimit()
    {
        return $this->MembersCountLimit;
    }
    /**
     * Set MembersCountLimit value
     * @param int $membersCountLimit
     * @return \Ews\StructType\EwsGetDlMembersForUnifiedGroupType
     */
    public function setMembersCountLimit($membersCountLimit = null)
    {
        // validation for constraint: int
        if (!is_null($membersCountLimit) && !is_numeric($membersCountLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($membersCountLimit)), __LINE__);
        }
        $this->MembersCountLimit = $membersCountLimit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetDlMembersForUnifiedGroupType
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
