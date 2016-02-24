<?php

namespace Pyz\Yves\Application\Business\Model;

use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Shared\Config;
use Spryker\Shared\Session\Business\Model\SessionFactory as SharedSessionFactory;

class SessionFactory extends SharedSessionFactory
{

    /**
     * @return int
     */
    protected function getSessionLifetime()
    {
        $lifetime = (int)Config::get(ApplicationConstants::YVES_STORAGE_SESSION_TIME_TO_LIVE);

        return $lifetime;
    }

}
