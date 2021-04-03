<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupAttendeeConflictData StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupAttendeeConflictData extends EwsAttendeeConflictData
{
    /**
     * The NumberOfMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $NumberOfMembers;
    /**
     * The NumberOfMembersAvailable
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $NumberOfMembersAvailable;
    /**
     * The NumberOfMembersWithConflict
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $NumberOfMembersWithConflict;
    /**
     * The NumberOfMembersWithNoData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $NumberOfMembersWithNoData;
    /**
     * Constructor method for GroupAttendeeConflictData
     * @uses EwsGroupAttendeeConflictData::setNumberOfMembers()
     * @uses EwsGroupAttendeeConflictData::setNumberOfMembersAvailable()
     * @uses EwsGroupAttendeeConflictData::setNumberOfMembersWithConflict()
     * @uses EwsGroupAttendeeConflictData::setNumberOfMembersWithNoData()
     * @param int $numberOfMembers
     * @param int $numberOfMembersAvailable
     * @param int $numberOfMembersWithConflict
     * @param int $numberOfMembersWithNoData
     */
    public function __construct(int $numberOfMembers, int $numberOfMembersAvailable, int $numberOfMembersWithConflict, int $numberOfMembersWithNoData)
    {
        $this
            ->setNumberOfMembers($numberOfMembers)
            ->setNumberOfMembersAvailable($numberOfMembersAvailable)
            ->setNumberOfMembersWithConflict($numberOfMembersWithConflict)
            ->setNumberOfMembersWithNoData($numberOfMembersWithNoData);
    }
    /**
     * Get NumberOfMembers value
     * @return int
     */
    public function getNumberOfMembers(): int
    {
        return $this->NumberOfMembers;
    }
    /**
     * Set NumberOfMembers value
     * @param int $numberOfMembers
     * @return \StructType\EwsGroupAttendeeConflictData
     */
    public function setNumberOfMembers(int $numberOfMembers): self
    {
        // validation for constraint: int
        if (!is_null($numberOfMembers) && !(is_int($numberOfMembers) || ctype_digit($numberOfMembers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfMembers, true), gettype($numberOfMembers)), __LINE__);
        }
        $this->NumberOfMembers = $numberOfMembers;
        
        return $this;
    }
    /**
     * Get NumberOfMembersAvailable value
     * @return int
     */
    public function getNumberOfMembersAvailable(): int
    {
        return $this->NumberOfMembersAvailable;
    }
    /**
     * Set NumberOfMembersAvailable value
     * @param int $numberOfMembersAvailable
     * @return \StructType\EwsGroupAttendeeConflictData
     */
    public function setNumberOfMembersAvailable(int $numberOfMembersAvailable): self
    {
        // validation for constraint: int
        if (!is_null($numberOfMembersAvailable) && !(is_int($numberOfMembersAvailable) || ctype_digit($numberOfMembersAvailable))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfMembersAvailable, true), gettype($numberOfMembersAvailable)), __LINE__);
        }
        $this->NumberOfMembersAvailable = $numberOfMembersAvailable;
        
        return $this;
    }
    /**
     * Get NumberOfMembersWithConflict value
     * @return int
     */
    public function getNumberOfMembersWithConflict(): int
    {
        return $this->NumberOfMembersWithConflict;
    }
    /**
     * Set NumberOfMembersWithConflict value
     * @param int $numberOfMembersWithConflict
     * @return \StructType\EwsGroupAttendeeConflictData
     */
    public function setNumberOfMembersWithConflict(int $numberOfMembersWithConflict): self
    {
        // validation for constraint: int
        if (!is_null($numberOfMembersWithConflict) && !(is_int($numberOfMembersWithConflict) || ctype_digit($numberOfMembersWithConflict))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfMembersWithConflict, true), gettype($numberOfMembersWithConflict)), __LINE__);
        }
        $this->NumberOfMembersWithConflict = $numberOfMembersWithConflict;
        
        return $this;
    }
    /**
     * Get NumberOfMembersWithNoData value
     * @return int
     */
    public function getNumberOfMembersWithNoData(): int
    {
        return $this->NumberOfMembersWithNoData;
    }
    /**
     * Set NumberOfMembersWithNoData value
     * @param int $numberOfMembersWithNoData
     * @return \StructType\EwsGroupAttendeeConflictData
     */
    public function setNumberOfMembersWithNoData(int $numberOfMembersWithNoData): self
    {
        // validation for constraint: int
        if (!is_null($numberOfMembersWithNoData) && !(is_int($numberOfMembersWithNoData) || ctype_digit($numberOfMembersWithNoData))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfMembersWithNoData, true), gettype($numberOfMembersWithNoData)), __LINE__);
        }
        $this->NumberOfMembersWithNoData = $numberOfMembersWithNoData;
        
        return $this;
    }
}
