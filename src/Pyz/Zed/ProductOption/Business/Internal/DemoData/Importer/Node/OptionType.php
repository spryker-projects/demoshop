<?php

namespace Pyz\Zed\ProductOption\Business\Internal\DemoData\Importer\Node;

use Pyz\Zed\ProductOption\Business\Internal\DemoData\Importer\Visitor\OptionVisitorInterface;
use Pyz\Zed\ProductOption\Business\Internal\DemoData\Importer\Visitor\VisitableOptionInterface;

class OptionType implements VisitableOptionInterface
{

    /**
     * @var string
     */
    private $key;

    /**
     * @var \Pyz\Zed\ProductOption\Business\Internal\DemoData\Importer\Node\OptionValue[]
     */
    private $optionValues = [];

    /**
     * @var array
     */
    private $localizedNames = [];

    /**
     * @var string|null
     */
    private $taxSetKey;

    /**
     * @param \Pyz\Zed\ProductOption\Business\Internal\DemoData\Importer\Visitor\OptionVisitorInterface $visitor
     *
     * @return void
     */
    public function accept(OptionVisitorInterface $visitor)
    {
        $visitor->visitOptionType($this);
        $visitor->setContext($this);
        foreach ($this->optionValues as $value) {
            $value->accept($visitor);
        }
        $visitor->leaveContext();
    }

    /**
     * @param string $key
     * @param \Pyz\Zed\ProductOption\Business\Internal\DemoData\Importer\Node\OptionValue[] $optionValues
     * @param string $taxSetKey
     */
    public function __construct($key, array $optionValues, array $localizedNames = [], $taxSetKey = null)
    {
        $this->key = $key;

        foreach ($optionValues as $optionValue) {
            $this->addOptionValue($optionValue);
        }

        $this->localizedNames = $localizedNames;
        $this->taxSetKey = $taxSetKey;
    }

    /**
     * @param \Pyz\Zed\ProductOption\Business\Internal\DemoData\Importer\Node\OptionValue $optionValue
     *
     * @return void
     */
    private function addOptionValue(OptionValue $optionValue)
    {
        $this->optionValues[] = $optionValue;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return \Pyz\Zed\ProductOption\Business\Internal\DemoData\Importer\Node\OptionValue[]
     */
    public function getOptionValues()
    {
        return $this->optionValues;
    }

    /**
     * @return array
     */
    public function getLocalizedNames()
    {
        return $this->localizedNames;
    }

    /**
     * @return string|null
     */
    public function getTaxSetKey()
    {
        return $this->taxSetKey;
    }

}
