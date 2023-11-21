<?php

/**
 * CategoryObjectMock
 *
 * @copyright Copyright © 2023 Blackbird Agency. All rights reserved.
 * @author    luderic@bird.eu
 */

namespace Blackbird\MagentoMockObject\Model\Catalog;

use Blackbird\MagentoMockObject\Api\DataObjectInterface;
use Magento\Catalog\Api\Data\CategoryInterface;

abstract class CategoryObject implements CategoryInterface, DataObjectInterface
{
}
