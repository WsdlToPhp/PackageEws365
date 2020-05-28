<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupUserSubscribeStateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupUserSubscribeStateType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The IsSubscribed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsSubscribed;
    /**
     * Constructor method for SetUnifiedGroupUserSubscribeStateType
     * @uses EwsSetUnifiedGroupUserSubscribeStateType::setIsSubscribed()
     * @param bool $isSubscribed
     */
    public function __construct($isSubscribed = null)
    {
        $this
            ->setIsSubscribed($isSubscribed);
    }
    /**
     * Get IsSubscribed value
     * @return bool
     */
    public function getIsSubscribed()
    {
        return $this->IsSubscribed;
    }
    /**
     * Set IsSubscribed value
     * @param bool $isSubscribed
     * @return \Ews\StructType\EwsSetUnifiedGroupUserSubscribeStateType
     */
    public function setIsSubscribed($isSubscribed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSubscribed) && !is_bool($isSubscribed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSubscribed, true), gettype($isSubscribed)), __LINE__);
        }
        $this->IsSubscribed = $isSubscribed;
        return $this;
    }
}
