<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSocialActivityNotificationsResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSocialActivityNotificationsResponseType extends EwsResponseMessageType
{
    /**
     * The AggregatedNotification
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public $AggregatedNotification;
    /**
     * Constructor method for GetSocialActivityNotificationsResponseType
     * @uses EwsGetSocialActivityNotificationsResponseType::setAggregatedNotification()
     * @param \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     * $aggregatedNotification
     */
    public function __construct(\Ews\StructType\EwsSocialActivityAggregatedNotificationType $aggregatedNotification = null)
    {
        $this
            ->setAggregatedNotification($aggregatedNotification);
    }
    /**
     * Get AggregatedNotification value
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function getAggregatedNotification()
    {
        return $this->AggregatedNotification;
    }
    /**
     * Set AggregatedNotification value
     * @param \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     * $aggregatedNotification
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsResponseType
     */
    public function setAggregatedNotification(\Ews\StructType\EwsSocialActivityAggregatedNotificationType $aggregatedNotification = null)
    {
        $this->AggregatedNotification = $aggregatedNotification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsResponseType
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
