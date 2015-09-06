<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPeopleInsightsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPeopleInsightsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The People
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPersonType
     */
    public $People;
    /**
     * Constructor method for GetPeopleInsightsResponseMessageType
     * @uses EwsGetPeopleInsightsResponseMessageType::setPeople()
     * @param \Ews\ArrayType\EwsArrayOfPersonType $people
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfPersonType $people = null)
    {
        $this
            ->setPeople($people);
    }
    /**
     * Get People value
     * @return \Ews\ArrayType\EwsArrayOfPersonType|null
     */
    public function getPeople()
    {
        return $this->People;
    }
    /**
     * Set People value
     * @param \Ews\ArrayType\EwsArrayOfPersonType $people
     * @return \Ews\StructType\EwsGetPeopleInsightsResponseMessageType
     */
    public function setPeople(\Ews\ArrayType\EwsArrayOfPersonType $people = null)
    {
        $this->People = $people;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetPeopleInsightsResponseMessageType
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
