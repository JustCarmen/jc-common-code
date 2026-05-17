<?php

/**
 * Functions to be used in custom modules for webtrees by JustCarmen
 */

declare(strict_types=1);

namespace JustCarmen\Webtrees\Helpers;

use Fisharebest\Webtrees\Auth;
use Fisharebest\Webtrees\Contracts\UserInterface;
use Fisharebest\Webtrees\Module\ModuleInterface;
use Fisharebest\Webtrees\Registry;
use Fisharebest\Webtrees\Webtrees;
use Fisharebest\Webtrees\Tree;
use Fisharebest\Webtrees\User;
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Support\Collection;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\JoinClause;
use Jefferson49\Webtrees\Log\CustomModuleLogInterface;

use Exception;


/**
 * Functions to be used in webtrees custom modules
 */
class Functions
{

    /**
     * A breaking change in webtrees 2.2.0 changes how the classes are retrieved.
     * This function allows support for both 2.1.X and 2.2.X versions
     * @param string $class
     * @return mixed
     */
    static function getClass(string $class)
    {
        if (version_compare(Webtrees::VERSION, '2.2.0', '>=')) {
            return Registry::container()->get($class);
        } else {
            return app($class);
        }
    }
};
