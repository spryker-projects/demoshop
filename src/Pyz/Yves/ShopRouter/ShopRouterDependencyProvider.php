<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
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
