<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsUnifiedGroupIdentity
     */
    protected \StructType\EwsUnifiedGroupIdentity $DlIdentity;
    /**
     * The MembersCountLimit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MembersCountLimit = null;
    /**
     * Constructor method for GetDlMembersForUnifiedGroupType
     * @uses EwsGetDlMembersForUnifiedGroupType::setDlIdentity()
     * @uses EwsGetDlMembersForUnifiedGroupType::setMembersCountLimit()
     * @param \StructType\EwsUnifiedGroupIdentity $dlIdentity
     * @param int $membersCountLimit
     */
    public function __construct(\StructType\EwsUnifiedGroupIdentity $dlIdentity, ?int $membersCountLimit = null)
    {
        $this
            ->setDlIdentity($dlIdentity)
            ->setMembersCountLimit($membersCountLimit);
    }
    /**
     * Get DlIdentity value
     * @return \StructType\EwsUnifiedGroupIdentity
     */
    public function getDlIdentity(): \StructType\EwsUnifiedGroupIdentity
    {
        return $this->DlIdentity;
    }
    /**
     * Set DlIdentity value
     * @param \StructType\EwsUnifiedGroupIdentity $dlIdentity
     * @return \StructType\EwsGetDlMembersForUnifiedGroupType
     */
    public function setDlIdentity(\StructType\EwsUnifiedGroupIdentity $dlIdentity): self
    {
        $this->DlIdentity = $dlIdentity;
        
        return $this;
    }
    /**
     * Get MembersCountLimit value
     * @return int|null
     */
    public function getMembersCountLimit(): ?int
    {
        return $this->MembersCountLimit;
    }
    /**
     * Set MembersCountLimit value
     * @param int $membersCountLimit
     * @return \StructType\EwsGetDlMembersForUnifiedGroupType
     */
    public function setMembersCountLimit(?int $membersCountLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($membersCountLimit) && !(is_int($membersCountLimit) || ctype_digit($membersCountLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($membersCountLimit, true), gettype($membersCountLimit)), __LINE__);
        }
        $this->MembersCountLimit = $membersCountLimit;
        
        return $this;
    }
}
