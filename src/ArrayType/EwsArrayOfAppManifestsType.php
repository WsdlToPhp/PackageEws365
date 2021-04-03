<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAppManifestsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAppManifestsType extends AbstractStructArrayBase
{
    /**
     * The Manifest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Manifest = [];
    /**
     * Constructor method for ArrayOfAppManifestsType
     * @uses EwsArrayOfAppManifestsType::setManifest()
     * @param string[] $manifest
     */
    public function __construct(array $manifest = [])
    {
        $this
            ->setManifest($manifest);
    }
    /**
     * Get Manifest value
     * @return string[]
     */
    public function getManifest(): array
    {
        return $this->Manifest;
    }
    /**
     * This method is responsible for validating the values passed to the setManifest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManifest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManifestForArrayConstraintsFromSetManifest(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAppManifestsTypeManifestItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfAppManifestsTypeManifestItem)) {
                $invalidValues[] = is_object($arrayOfAppManifestsTypeManifestItem) ? get_class($arrayOfAppManifestsTypeManifestItem) : sprintf('%s(%s)', gettype($arrayOfAppManifestsTypeManifestItem), var_export($arrayOfAppManifestsTypeManifestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Manifest property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Manifest value
     * @throws InvalidArgumentException
     * @param string[] $manifest
     * @return \ArrayType\EwsArrayOfAppManifestsType
     */
    public function setManifest(array $manifest = []): self
    {
        // validation for constraint: array
        if ('' !== ($manifestArrayErrorMessage = self::validateManifestForArrayConstraintsFromSetManifest($manifest))) {
            throw new InvalidArgumentException($manifestArrayErrorMessage, __LINE__);
        }
        $this->Manifest = $manifest;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Manifest
     */
    public function getAttributeName(): string
    {
        return 'Manifest';
    }
}
