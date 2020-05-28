<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $RootItemId;
    /**
     * The RootItemChangeKey
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $RootItemChangeKey;
    /**
     * Constructor method for RootItemIdType
     * @uses EwsRootItemIdType::setRootItemId()
     * @uses EwsRootItemIdType::setRootItemChangeKey()
     * @param string $rootItemId
     * @param string $rootItemChangeKey
     */
    public function __construct($rootItemId = null, $rootItemChangeKey = null)
    {
        $this
            ->setRootItemId($rootItemId)
            ->setRootItemChangeKey($rootItemChangeKey);
    }
    /**
     * Get RootItemId value
     * @return string
     */
    public function getRootItemId()
    {
        return $this->RootItemId;
    }
    /**
     * Set RootItemId value
     * @param string $rootItemId
     * @return \Ews\StructType\EwsRootItemIdType
     */
    public function setRootItemId($rootItemId = null)
    {
        // validation for constraint: string
        if (!is_null($rootItemId) && !is_string($rootItemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rootItemId, true), gettype($rootItemId)), __LINE__);
        }
        $this->RootItemId = $rootItemId;
        return $this;
    }
    /**
     * Get RootItemChangeKey value
     * @return string
     */
    public function getRootItemChangeKey()
    {
        return $this->RootItemChangeKey;
    }
    /**
     * Set RootItemChangeKey value
     * @param string $rootItemChangeKey
     * @return \Ews\StructType\EwsRootItemIdType
     */
    public function setRootItemChangeKey($rootItemChangeKey = null)
    {
        // validation for constraint: string
        if (!is_null($rootItemChangeKey) && !is_string($rootItemChangeKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rootItemChangeKey, true), gettype($rootItemChangeKey)), __LINE__);
        }
        $this->RootItemChangeKey = $rootItemChangeKey;
        return $this;
    }
}
