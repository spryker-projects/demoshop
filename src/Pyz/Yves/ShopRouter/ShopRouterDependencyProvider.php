<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\ShopRouter;

use SprykerShop\Yves\ProductDetailPage\Plugin\ProductDetailPageResourceCreatorPlugin;
use SprykerShop\Yves\ShopRouter\ShopRouterDependencyProvider as SprykerShopShopRouterDependencyProvider;

class ShopRouterDependencyProvider extends SprykerShopShopRouterDependencyProvider
{
    /**
     * @return \SprykerShop\Yves\ShopRouterExtension\Dependency\Plugin\ResourceCreatorPluginInterface[]
     */
    protected function getResourceCreatorPlugins()
    {
        return [
            new ProductDetailPageResourceCreatorPlugin(),
        ];
    }
}
