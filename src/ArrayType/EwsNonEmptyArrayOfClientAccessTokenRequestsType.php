<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfClientAccessTokenRequestsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfClientAccessTokenRequestsType extends AbstractStructArrayBase
{
    /**
     * The TokenRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsClientAccessTokenRequestType[]
     */
    protected array $TokenRequest = [];
    /**
     * Constructor method for NonEmptyArrayOfClientAccessTokenRequestsType
     * @uses EwsNonEmptyArrayOfClientAccessTokenRequestsType::setTokenRequest()
     * @param \StructType\EwsClientAccessTokenRequestType[] $tokenRequest
     */
    public function __construct(array $tokenRequest)
    {
        $this
            ->setTokenRequest($tokenRequest);
    }
    /**
     * Get TokenRequest value
     * @return \StructType\EwsClientAccessTokenRequestType[]
     */
    public function getTokenRequest(): array
    {
        return $this->TokenRequest;
    }
    /**
     * This method is responsible for validating the values passed to the setTokenRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTokenRequest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTokenRequestForArrayConstraintsFromSetTokenRequest(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfClientAccessTokenRequestsTypeTokenRequestItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfClientAccessTokenRequestsTypeTokenRequestItem instanceof \StructType\EwsClientAccessTokenRequestType) {
                $invalidValues[] = is_object($nonEmptyArrayOfClientAccessTokenRequestsTypeTokenRequestItem) ? get_class($nonEmptyArrayOfClientAccessTokenRequestsTypeTokenRequestItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfClientAccessTokenRequestsTypeTokenRequestItem), var_export($nonEmptyArrayOfClientAccessTokenRequestsTypeTokenRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TokenRequest property can only contain items of type \StructType\EwsClientAccessTokenRequestType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TokenRequest value
     * @throws InvalidArgumentException
     * @param \StructType\EwsClientAccessTokenRequestType[] $tokenRequest
     * @return \ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
     */
    public function setTokenRequest(array $tokenRequest): self
    {
        // validation for constraint: array
        if ('' !== ($tokenRequestArrayErrorMessage = self::validateTokenRequestForArrayConstraintsFromSetTokenRequest($tokenRequest))) {
            throw new InvalidArgumentException($tokenRequestArrayErrorMessage, __LINE__);
        }
        $this->TokenRequest = $tokenRequest;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsClientAccessTokenRequestType|null
     */
    public function current(): ?\StructType\EwsClientAccessTokenRequestType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsClientAccessTokenRequestType|null
     */
    public function item($index): ?\StructType\EwsClientAccessTokenRequestType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsClientAccessTokenRequestType|null
     */
    public function first(): ?\StructType\EwsClientAccessTokenRequestType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsClientAccessTokenRequestType|null
     */
    public function last(): ?\StructType\EwsClientAccessTokenRequestType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsClientAccessTokenRequestType|null
     */
    public function offsetGet($offset): ?\StructType\EwsClientAccessTokenRequestType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsClientAccessTokenRequestType $item
     * @return \ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsClientAccessTokenRequestType) {
            throw new InvalidArgumentException(sprintf('The TokenRequest property can only contain items of type \StructType\EwsClientAccessTokenRequestType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TokenRequest
     */
    public function getAttributeName(): string
    {
        return 'TokenRequest';
    }
}
