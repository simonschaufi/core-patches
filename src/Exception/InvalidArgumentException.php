<?php

/*
 * This file is part of TYPO3 Core Patches.
 *
 * (c) Gilbertsoft LLC (gilbertsoft.org)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GsTYPO3\CorePatches\Exception;

use Symfony\Component\Console\Exception\InvalidArgumentException as InvalidArgumentExceptionBase;

final class InvalidArgumentException extends InvalidArgumentExceptionBase implements ExceptionInterface
{
}
