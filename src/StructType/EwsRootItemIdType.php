<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootItemIdType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRootItemIdType extends EwsBaseItemIdType
{
    /**
     * The RootItemId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $RootItemId;
    /**
     * The RootItemChangeKey
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $RootItemChangeKey;
    /**
     * Constructor method for RootItemIdType
     * @uses EwsRootItemIdType::setRootItemId()
     * @uses EwsRootItemIdType::setRootItemChangeKey()
     * @param string $rootItemId
     * @param string $rootItemChangeKey
     */
    public function __construct(string $rootItemId, string $rootItemChangeKey)
    {
        $this
            ->setRootItemId($rootItemId)
            ->setRootItemChangeKey($rootItemChangeKey);
    }
    /**
     * Get RootItemId value
     * @return string
     */
    public function getRootItemId(): string
    {
        return $this->RootItemId;
    }
    /**
     * Set RootItemId value
     * @param string $rootItemId
     * @return \StructType\EwsRootItemIdType
     */
    public function setRootItemId(string $rootItemId): self
    {
        // validation for constraint: string
        if (!is_null($rootItemId) && !is_string($rootItemId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rootItemId, true), gettype($rootItemId)), __LINE__);
        }
        $this->RootItemId = $rootItemId;
        
        return $this;
    }
    /**
     * Get RootItemChangeKey value
     * @return string
     */
    public function getRootItemChangeKey(): string
    {
        return $this->RootItemChangeKey;
    }
    /**
     * Set RootItemChangeKey value
     * @param string $rootItemChangeKey
     * @return \StructType\EwsRootItemIdType
     */
    public function setRootItemChangeKey(string $rootItemChangeKey): self
    {
        // validation for constraint: string
        if (!is_null($rootItemChangeKey) && !is_string($rootItemChangeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rootItemChangeKey, true), gettype($rootItemChangeKey)), __LINE__);
        }
        $this->RootItemChangeKey = $rootItemChangeKey;
        
        return $this;
    }
}
