<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupResourceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupResourceType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Url
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Url;
    /**
     * Constructor method for UnifiedGroupResourceType
     * @uses EwsUnifiedGroupResourceType::setName()
     * @uses EwsUnifiedGroupResourceType::setUrl()
     * @param string $name
     * @param string $url
     */
    public function __construct($name = null, $url = null)
    {
        $this
            ->setName($name)
            ->setUrl($url);
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
     * @return \Ews\StructType\EwsUnifiedGroupResourceType
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $url
     * @return \Ews\StructType\EwsUnifiedGroupResourceType
     */
    public function setUrl($url = null)
    {
        $this->Url = $url;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupResourceType
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
