<?php

namespace Behat\Behat\Exception;

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Notice exception (throw this to mark step as "notice").
 *
 * @author Gildas Dubois
 */
class NoticeException extends BehaviorException
{
    /**
     * Initializes notice exception.
     *
     * @param string $text NOTICE text
     */
    public function __construct($text = 'write notice definition')
    {
        parent::__construct(sprintf('NOTICE: %s', $text));
    }
}
