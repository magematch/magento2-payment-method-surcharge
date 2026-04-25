<?php

/**
 * Landofcoder
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Landofcoder.com license that is
 * available through the world-wide-web at this URL:
 * https://landofcoder.com/license
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category   Landofcoder
 * @package    MageMatch_PaymentMethodSurcharge
 * @copyright  Copyright (c) 2020 Landofcoder (https://landofcoder.com/)
 * @license    https://landofcoder.com/LICENSE-1.0.html
 */

namespace MageMatch\PaymentMethodSurcharge\Model\Calculation\Calculator;

use MageMatch\PaymentMethodSurcharge\Helper\Data as FeeHelper;

abstract class AbstractCalculator implements CalculatorInterface
{
    /**
     * @var FeeHelper
     */
    protected $helper;

    /**
     * AbstractCalculation constructor.
     *
     * @param FeeHelper $helper
     */
    public function __construct(FeeHelper $helper)
    {
        $this->helper = $helper;
    }
}
