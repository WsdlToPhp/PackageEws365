<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CultureInfoDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCultureInfoDataType extends AbstractStructBase
{
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The NativeName
     * @var string
     */
    public $NativeName;
    /**
     * The LCID
     * @var int
     */
    public $LCID;
    /**
     * Constructor method for CultureInfoDataType
     * @uses EwsCultureInfoDataType::setName()
     * @uses EwsCultureInfoDataType::setNativeName()
     * @uses EwsCultureInfoDataType::setLCID()
     * @param string $name
     * @param string $nativeName
     * @param int $lCID
     */
    public function __construct($name = null, $nativeName = null, $lCID = null)
    {
        $this
            ->setName($name)
            ->setNativeName($nativeName)
            ->setLCID($lCID);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsCultureInfoDataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NativeName value
     * @return string|null
     */
    public function getNativeName()
    {
        return $this->NativeName;
    }
    /**
     * Set NativeName value
     * @param string $nativeName
     * @return \Ews\StructType\EwsCultureInfoDataType
     */
    public function setNativeName($nativeName = null)
    {
        // validation for constraint: string
        if (!is_null($nativeName) && !is_string($nativeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nativeName, true), gettype($nativeName)), __LINE__);
        }
        $this->NativeName = $nativeName;
        return $this;
    }
    /**
     * Get LCID value
     * @return int|null
     */
    public function getLCID()
    {
        return $this->LCID;
    }
    /**
     * Set LCID value
     * @param int $lCID
     * @return \Ews\StructType\EwsCultureInfoDataType
     */
    public function setLCID($lCID = null)
    {
        // validation for constraint: int
        if (!is_null($lCID) && !(is_int($lCID) || ctype_digit($lCID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lCID, true), gettype($lCID)), __LINE__);
        }
        $this->LCID = $lCID;
        return $this;
    }
}
