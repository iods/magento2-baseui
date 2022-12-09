<?php
/**
 * An extension of the Iods_Base package, improving FE functionality in Magento 2.
 *
 * @package   Iods\BaseUi
 * @author    Rye Miller <rye@drkstr.dev>
 * @copyright Copyright (c) 2022, Rye Miller (https://ryemiller.io)
 * @license   See LICENSE for license details.
 */
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Iods_BaseUi',
    __DIR__
);
