<?php declare(strict_types=1);

namespace Amp\Http\Server\Session;

interface SessionIdGenerator
{
    /**
     * @return non-empty-string A URL-safe session ID.
     */
    public function generate(): string;

    /**
     * Determines if the given ID could have been generated by this generator.
     */
    public function validate(string $id): bool;
}
