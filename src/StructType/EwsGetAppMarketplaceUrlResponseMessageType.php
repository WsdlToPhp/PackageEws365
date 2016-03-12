<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAppMarketplaceUrlResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetAppMarketplaceUrlResponseMessageType extends EwsResponseMessageType
{
    /**
     * The AppMarketplaceUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AppMarketplaceUrl;
    /**
     * Constructor method for GetAppMarketplaceUrlResponseMessageType
     * @uses EwsGetAppMarketplaceUrlResponseMessageType::setAppMarketplaceUrl()
     * @param string $appMarketplaceUrl
     */
    public function __construct($appMarketplaceUrl = null)
    {
        $this
            ->setAppMarketplaceUrl($appMarketplaceUrl);
    }
    /**
     * Get AppMarketplaceUrl value
     * @return string|null
     */
    public function getAppMarketplaceUrl()
    {
        return $this->AppMarketplaceUrl;
    }
    /**
     * Set AppMarketplaceUrl value
     * @param string $appMarketplaceUrl
     * @return \Ews\StructType\EwsGetAppMarketplaceUrlResponseMessageType
     */
    public function setAppMarketplaceUrl($appMarketplaceUrl = null)
    {
        // validation for constraint: string
        if (!is_null($appMarketplaceUrl) && !is_string($appMarketplaceUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appMarketplaceUrl)), __LINE__);
        }
        $this->AppMarketplaceUrl = $appMarketplaceUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetAppMarketplaceUrlResponseMessageType
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
