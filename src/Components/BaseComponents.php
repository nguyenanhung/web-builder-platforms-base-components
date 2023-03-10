<?php
/**
 * Project template-web-builder-sdk-module
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 23/08/2022
 * Time: 09:13
 */

namespace nguyenanhung\WebBuilderModules\Platforms\BaseComponents\Components;

use nguyenanhung\WebBuilderModules\Platforms\BaseComponents\Base\BaseCore;
use nguyenanhung\WebBuilderModules\Platforms\BaseComponents\Database\Database;

/**
 * Class BaseComponents
 *
 * @package   nguyenanhung\WebBuilderModules\Platforms\BaseComponents\Components
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BaseComponents extends BaseCore
{
    /**
     * BaseComponents constructor.
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
        $this->db = new Database($options);
    }
}
