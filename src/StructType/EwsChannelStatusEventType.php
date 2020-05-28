<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChannelStatusEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsChannelStatusEventType extends EwsChannelEventType
{
    /**
     * The IsNew
     * @var bool
     */
    public $IsNew;
    /**
     * Constructor method for ChannelStatusEventType
     * @uses EwsChannelStatusEventType::setIsNew()
     * @param bool $isNew
     */
    public function __construct($isNew = null)
    {
        $this
            ->setIsNew($isNew);
    }
    /**
     * Get IsNew value
     * @return bool|null
     */
    public function getIsNew()
    {
        return $this->IsNew;
    }
    /**
     * Set IsNew value
     * @param bool $isNew
     * @return \Ews\StructType\EwsChannelStatusEventType
     */
    public function setIsNew($isNew = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNew) && !is_bool($isNew)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNew, true), gettype($isNew)), __LINE__);
        }
        $this->IsNew = $isNew;
        return $this;
    }
}
