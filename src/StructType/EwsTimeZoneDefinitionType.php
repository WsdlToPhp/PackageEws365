<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeZoneDefinitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTimeZoneDefinitionType extends AbstractStructBase
{
    /**
     * The Periods
     * @var \ArrayType\EwsNonEmptyArrayOfPeriodsType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfPeriodsType $Periods = null;
    /**
     * The TransitionsGroups
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfTransitionsGroupsType|null
     */
    protected ?\ArrayType\EwsArrayOfTransitionsGroupsType $TransitionsGroups = null;
    /**
     * The Transitions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsArrayOfTransitionsType|null
     */
    protected ?\StructType\EwsArrayOfTransitionsType $Transitions = null;
    /**
     * The Id
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The Name
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for TimeZoneDefinitionType
     * @uses EwsTimeZoneDefinitionType::setPeriods()
     * @uses EwsTimeZoneDefinitionType::setTransitionsGroups()
     * @uses EwsTimeZoneDefinitionType::setTransitions()
     * @uses EwsTimeZoneDefinitionType::setId()
     * @uses EwsTimeZoneDefinitionType::setName()
     * @param \ArrayType\EwsNonEmptyArrayOfPeriodsType $periods
     * @param \ArrayType\EwsArrayOfTransitionsGroupsType $transitionsGroups
     * @param \StructType\EwsArrayOfTransitionsType $transitions
     * @param string $id
     * @param string $name
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfPeriodsType $periods = null, ?\ArrayType\EwsArrayOfTransitionsGroupsType $transitionsGroups = null, ?\StructType\EwsArrayOfTransitionsType $transitions = null, ?string $id = null, ?string $name = null)
    {
        $this
            ->setPeriods($periods)
            ->setTransitionsGroups($transitionsGroups)
            ->setTransitions($transitions)
            ->setId($id)
            ->setName($name);
    }
    /**
     * Get Periods value
     * @return \ArrayType\EwsNonEmptyArrayOfPeriodsType|null
     */
    public function getPeriods(): ?\ArrayType\EwsNonEmptyArrayOfPeriodsType
    {
        return $this->Periods;
    }
    /**
     * Set Periods value
     * @param \ArrayType\EwsNonEmptyArrayOfPeriodsType $periods
     * @return \StructType\EwsTimeZoneDefinitionType
     */
    public function setPeriods(?\ArrayType\EwsNonEmptyArrayOfPeriodsType $periods = null): self
    {
        $this->Periods = $periods;
        
        return $this;
    }
    /**
     * Get TransitionsGroups value
     * @return \ArrayType\EwsArrayOfTransitionsGroupsType|null
     */
    public function getTransitionsGroups(): ?\ArrayType\EwsArrayOfTransitionsGroupsType
    {
        return $this->TransitionsGroups;
    }
    /**
     * Set TransitionsGroups value
     * @param \ArrayType\EwsArrayOfTransitionsGroupsType $transitionsGroups
     * @return \StructType\EwsTimeZoneDefinitionType
     */
    public function setTransitionsGroups(?\ArrayType\EwsArrayOfTransitionsGroupsType $transitionsGroups = null): self
    {
        $this->TransitionsGroups = $transitionsGroups;
        
        return $this;
    }
    /**
     * Get Transitions value
     * @return \StructType\EwsArrayOfTransitionsType|null
     */
    public function getTransitions(): ?\StructType\EwsArrayOfTransitionsType
    {
        return $this->Transitions;
    }
    /**
     * Set Transitions value
     * @param \StructType\EwsArrayOfTransitionsType $transitions
     * @return \StructType\EwsTimeZoneDefinitionType
     */
    public function setTransitions(?\StructType\EwsArrayOfTransitionsType $transitions = null): self
    {
        $this->Transitions = $transitions;
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsTimeZoneDefinitionType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsTimeZoneDefinitionType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
}
