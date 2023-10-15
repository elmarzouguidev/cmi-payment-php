<?php

namespace Elmarzouguidev\CMI\Contracts;

/**
 * Interface for a CMI client.
 */
interface CMIClientInterface
{
    public function getDefaultOpts();

    public function getRequireOpts();

    public function generateHash($storeKey);

    public function dd(...$values);
}
