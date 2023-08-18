<?php

/**
 * OrderItemObject
 *
 * @copyright Copyright © 2023 Blackbird Agency. All rights reserved.
 * @author    sebastien@bird.eu
 */

namespace Blackbird\MagentoMockObject\Model\Sales;

use Blackbird\MagentoMockObject\Api\DataObjectInterface;
use Magento\Sales\Api\Data\OrderItemInterface;

abstract class OrderItemObject implements OrderItemInterface, DataObjectInterface
{
}
