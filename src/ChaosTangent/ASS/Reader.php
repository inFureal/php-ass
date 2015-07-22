<?php

namespace ChaosTangent\ASS;

/**
 * Advanced Sub Station Alpha reader
 *
 * @author John Noel <john.noel@chaostangent.com>
 * @package php-ass
 */
class Reader
{
    const VERSION = '1.0.0';

    public function fromFile($filename)
    {
        if (!file_exists($filename) || !is_readable($filename)) {
            throw new \InvalidArgumentException('Unable to read file: '.$filename);
        }

        $script = new Script(file_get_contents($filename));
        if ($script->isASSScript()) {
            throw new InvalidScriptException($script, 'Passed file does not look like a script');
        }

        $script->parse();
        return $script;
    }

    public function fromString($string)
    {
    }
}
