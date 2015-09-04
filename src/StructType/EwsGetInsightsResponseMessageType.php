<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInsightsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetInsightsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Insight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsInsightItemType
     */
    public $Insight;
    /**
     * Constructor method for GetInsightsResponseMessageType
     * @uses EwsGetInsightsResponseMessageType::setInsight()
     * @param \Ews\StructType\EwsInsightItemType $insight
     */
    public function __construct(\Ews\StructType\EwsInsightItemType $insight = null)
    {
        $this
            ->setInsight($insight);
    }
    /**
     * Get Insight value
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function getInsight()
    {
        return $this->Insight;
    }
    /**
     * Set Insight value
     * @param \Ews\StructType\EwsInsightItemType $insight
     * @return \Ews\StructType\EwsGetInsightsResponseMessageType
     */
    public function setInsight(\Ews\StructType\EwsInsightItemType $insight = null)
    {
        $this->Insight = $insight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetInsightsResponseMessageType
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
