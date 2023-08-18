<?php

/**
 * OrderObject
 *
 * @copyright Copyright © 2023 Blackbird Agency. All rights reserved.
 * @author    sebastien@bird.eu
 */

namespace Blackbird\MagentoMockObject\Model\Sales;

use Blackbird\MagentoMockObject\Api\DataObjectInterface;
use Magento\Sales\Api\Data\OrderInterface;

abstract class OrderObject implements OrderInterface, DataObjectInterface
{
}
