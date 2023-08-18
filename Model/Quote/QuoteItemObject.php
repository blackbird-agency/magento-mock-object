<?php

/**
 * QuoteItemObject
 *
 * @copyright Copyright © 2023 Blackbird Agency. All rights reserved.
 * @author    sebastien@bird.eu
 */

namespace Blackbird\MagentoMockObject\Model\Quote;

use Blackbird\MagentoMockObject\Api\DataObjectInterface;
use Magento\Quote\Api\Data\CartItemInterface;

abstract class QuoteItemObject implements CartItemInterface, DataObjectInterface
{
}
