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
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appMarketplaceUrl, true), gettype($appMarketplaceUrl)), __LINE__);
        }
        $this->AppMarketplaceUrl = $appMarketplaceUrl;
        return $this;
    }
}
