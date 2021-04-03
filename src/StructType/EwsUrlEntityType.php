<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UrlEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUrlEntityType extends EwsEntityType
{
    /**
     * The Url
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Url = null;
    /**
     * Constructor method for UrlEntityType
     * @uses EwsUrlEntityType::setUrl()
     * @param string $url
     */
    public function __construct(?string $url = null)
    {
        $this
            ->setUrl($url);
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $url
     * @return \StructType\EwsUrlEntityType
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->Url = $url;
        
        return $this;
    }
}
