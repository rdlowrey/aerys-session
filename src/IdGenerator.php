<?php

namespace Amp\Http\Server\Session;

interface IdGenerator
{
    /**
     * @return string A URL-safe session ID.
     */
    public function generate(): string;

    /**
     * Determines if the given ID could have been generated by this generator.
     *
     * @param string $id
     *
     * @return bool
     */
    public function validate(string $id): bool;
}
