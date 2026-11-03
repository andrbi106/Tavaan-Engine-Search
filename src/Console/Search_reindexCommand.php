<?php

declare(strict_types=1);

namespace Tavaan\Engine\Search\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * search:reindex command.
 */
final class Search_reindexCommand implements CommandInterface
{
    public function name(): string
    {
        return 'search:reindex';
    }

    public function description(): string
    {
        return 'Run search:reindex (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
