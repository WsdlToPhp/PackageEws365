<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetImListMigrationCompletedType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetImListMigrationCompletedType extends EwsBaseRequestType
{
    /**
     * The ImListMigrationCompleted
     * @var bool|null
     */
    protected ?bool $ImListMigrationCompleted = null;
    /**
     * Constructor method for SetImListMigrationCompletedType
     * @uses EwsSetImListMigrationCompletedType::setImListMigrationCompleted()
     * @param bool $imListMigrationCompleted
     */
    public function __construct(?bool $imListMigrationCompleted = null)
    {
        $this
            ->setImListMigrationCompleted($imListMigrationCompleted);
    }
    /**
     * Get ImListMigrationCompleted value
     * @return bool|null
     */
    public function getImListMigrationCompleted(): ?bool
    {
        return $this->ImListMigrationCompleted;
    }
    /**
     * Set ImListMigrationCompleted value
     * @param bool $imListMigrationCompleted
     * @return \StructType\EwsSetImListMigrationCompletedType
     */
    public function setImListMigrationCompleted(?bool $imListMigrationCompleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($imListMigrationCompleted) && !is_bool($imListMigrationCompleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($imListMigrationCompleted, true), gettype($imListMigrationCompleted)), __LINE__);
        }
        $this->ImListMigrationCompleted = $imListMigrationCompleted;
        
        return $this;
    }
}
