<?php

/**
 * ProductObjectMock
 *
 * @copyright Copyright © 2023 Blackbird Agency. All rights reserved.
 * @author    sebastien@bird.eu
 */

namespace Blackbird\MagentoMockObject\Model\Catalog;

use Blackbird\MagentoMockObject\Api\DataObjectInterface;
use Magento\Catalog\Api\Data\ProductInterface;

abstract class ProductObject implements ProductInterface, DataObjectInterface
{
}
