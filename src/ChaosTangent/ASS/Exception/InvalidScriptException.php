<?php

/**
 * This file is part of the ChaosTangent PHP-ASS package
 *
 * (c) John Noel <john.noel@chaostangent.com>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code
 */

namespace ChaosTangent\ASS\Exception;

use ChaosTangent\ASS\Script;

/**
 * Invalid ASS script exception
 *
 * @author John Noel <john.noel@chaostangent.com>
 * @package php-ass
 */
class InvalidScriptException extends ASSException
{
    /** @var Script */
    protected $script;

    public function __construct(Script $script, $message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->script = $script;
    }

    /**
     * @return Script
     */
    public function getScript()
    {
        return $this->script;
    }
}
