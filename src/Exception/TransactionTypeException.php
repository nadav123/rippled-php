<?php declare(strict_types=1);

namespace FOXRP\Rippled\Exception;

/**
 * An exception for transaction type errors.
 *
 * @package FOXRP\Rippled\Exception
 */
class TransactionTypeException extends RippledException
{
    // Require a message in the constructor.
    public function __construct($message, $code = 0, RippledException $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
