<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Pyz\Yves\ProductDetailPage;

use SprykerShop\Yves\ProductDetailPage\ProductDetailPageDependencyProvider as SprykerShopProductDetailPageDependencyProvider;
use SprykerShop\Yves\ProductMeasurementUnitWidget\Plugin\ProductDetailPage\ProductMeasurementUnitWidgetPlugin;

class ProductDetailPageDependencyProvider extends SprykerShopProductDetailPageDependencyProvider
{
    /**
     * Returns a list of widget plugin class names that implement \Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface.
     *
     * @return string[]
     */
    protected function getProductDetailPageWidgetPlugins(): array
    {
        return [
            ProductMeasurementUnitWidgetPlugin::class
        ];
    }
}
