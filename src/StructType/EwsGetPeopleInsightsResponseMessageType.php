<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfPersonType|null
     */
    protected ?\ArrayType\EwsArrayOfPersonType $People = null;
    /**
     * Constructor method for GetPeopleInsightsResponseMessageType
     * @uses EwsGetPeopleInsightsResponseMessageType::setPeople()
     * @param \ArrayType\EwsArrayOfPersonType $people
     */
    public function __construct(?\ArrayType\EwsArrayOfPersonType $people = null)
    {
        $this
            ->setPeople($people);
    }
    /**
     * Get People value
     * @return \ArrayType\EwsArrayOfPersonType|null
     */
    public function getPeople(): ?\ArrayType\EwsArrayOfPersonType
    {
        return $this->People;
    }
    /**
     * Set People value
     * @param \ArrayType\EwsArrayOfPersonType $people
     * @return \StructType\EwsGetPeopleInsightsResponseMessageType
     */
    public function setPeople(?\ArrayType\EwsArrayOfPersonType $people = null): self
    {
        $this->People = $people;
        
        return $this;
    }
}
