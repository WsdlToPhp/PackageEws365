<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmtpDomainList StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSmtpDomainList extends AbstractStructBase
{
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsSmtpDomain[]
     */
    protected array $Domain = [];
    /**
     * Constructor method for SmtpDomainList
     * @uses EwsSmtpDomainList::setDomain()
     * @param \StructType\EwsSmtpDomain[] $domain
     */
    public function __construct(array $domain = [])
    {
        $this
            ->setDomain($domain);
    }
    /**
     * Get Domain value
     * @return \StructType\EwsSmtpDomain[]
     */
    public function getDomain(): array
    {
        return $this->Domain;
    }
    /**
     * This method is responsible for validating the values passed to the setDomain method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomain method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomainForArrayConstraintsFromSetDomain(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $smtpDomainListDomainItem) {
            // validation for constraint: itemType
            if (!$smtpDomainListDomainItem instanceof \StructType\EwsSmtpDomain) {
                $invalidValues[] = is_object($smtpDomainListDomainItem) ? get_class($smtpDomainListDomainItem) : sprintf('%s(%s)', gettype($smtpDomainListDomainItem), var_export($smtpDomainListDomainItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Domain property can only contain items of type \StructType\EwsSmtpDomain, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Domain value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSmtpDomain[] $domain
     * @return \StructType\EwsSmtpDomainList
     */
    public function setDomain(array $domain = []): self
    {
        // validation for constraint: array
        if ('' !== ($domainArrayErrorMessage = self::validateDomainForArrayConstraintsFromSetDomain($domain))) {
            throw new InvalidArgumentException($domainArrayErrorMessage, __LINE__);
        }
        $this->Domain = $domain;
        
        return $this;
    }
    /**
     * Add item to Domain value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSmtpDomain $item
     * @return \StructType\EwsSmtpDomainList
     */
    public function addToDomain(\StructType\EwsSmtpDomain $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsSmtpDomain) {
            throw new InvalidArgumentException(sprintf('The Domain property can only contain items of type \StructType\EwsSmtpDomain, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Domain[] = $item;
        
        return $this;
    }
}
