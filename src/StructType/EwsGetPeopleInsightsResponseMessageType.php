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
     * Meta information extracted from the WSDL
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
}
