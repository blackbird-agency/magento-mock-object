<?php

/**
 * CustomerObjectMock
 *
 * @copyright Copyright © 2023 Blackbird Agency. All rights reserved.
 * @author    sebastien@bird.eu
 */

namespace Blackbird\MagentoMockObject\Model\Customer;

use Blackbird\MagentoMockObject\Api\DataObjectInterface;
use Magento\Customer\Api\Data\CustomerInterface;

abstract class CustomerObject implements CustomerInterface, DataObjectInterface
{
}
