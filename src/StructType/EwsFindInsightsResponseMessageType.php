<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindInsightsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindInsightsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Insights
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfInsightItemType
     */
    public $Insights;
    /**
     * Constructor method for FindInsightsResponseMessageType
     * @uses EwsFindInsightsResponseMessageType::setInsights()
     * @param \Ews\ArrayType\EwsArrayOfInsightItemType $insights
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfInsightItemType $insights = null)
    {
        $this
            ->setInsights($insights);
    }
    /**
     * Get Insights value
     * @return \Ews\ArrayType\EwsArrayOfInsightItemType
     */
    public function getInsights()
    {
        return $this->Insights;
    }
    /**
     * Set Insights value
     * @param \Ews\ArrayType\EwsArrayOfInsightItemType $insights
     * @return \Ews\StructType\EwsFindInsightsResponseMessageType
     */
    public function setInsights(\Ews\ArrayType\EwsArrayOfInsightItemType $insights = null)
    {
        $this->Insights = $insights;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindInsightsResponseMessageType
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
