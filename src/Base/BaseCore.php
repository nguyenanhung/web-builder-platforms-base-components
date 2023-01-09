<?php

namespace nguyenanhung\WebBuilderModules\Platforms\BaseComponents\Base;

use nguyenanhung\MyDebug\Benchmark;
use nguyenanhung\MyDebug\Logger;
use nguyenanhung\MyCache\Cache;
use nguyenanhung\MyRequests\MyRequests;
use nguyenanhung\WebBuilderModules\Platforms\BaseCore\Base\BaseCore as PlatformsBaseCore;
use nguyenanhung\WebBuilderModules\Platforms\BaseComponents\Helper\Helper;
use nguyenanhung\WebBuilderModules\Platforms\BaseComponents\Template\Template;

/**
 * Class BaseCore
 *
 * @package   nguyenanhung\WebBuilderModules\Platforms\BaseComponents\Base
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 *
 * @property \nguyenanhung\WebBuilderModules\Platforms\BaseComponents\Database\Database $db
 */
class BaseCore extends PlatformsBaseCore
{
    const VERSION = '1.0.1';
    const KEY_DATABASE = 'DATABASE';
    const KEY_OPTIONS = 'OPTIONS';
    const KEY_AUTH = 'AUTH';
    const KEY_CONFIG = 'CONFIG';
    const KEY_API_SERVICE = 'API_SERVICE';
    const KEY_HANDLE = 'HANDLE';

    /**
     * BaseCore constructor.
     *
     * @param array $options
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->logger->setLoggerSubPath(__CLASS__);
    }

    /**
     * Function responseToHtml
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/01/2023 14:22
     */
    public function responseToHtml(): string
    {
        return Template::nativeRender($this->response['templates'], $this->response);
    }
}
