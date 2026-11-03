<?php

declare(strict_types=1);

namespace Tavaan\Engine\Search;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Search\Contracts\SearchManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * SearchManagerServiceProvider — ثبت سرویس‌های موتور SearchManager.
 */
final class SearchManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(SearchManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new SearchManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('search', $this->app->get(SearchManagerInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Search\Console\Search_reindexCommand::class;

        // ثبت درایورها (در صورت نیاز)
        // درایورها به‌صورت lazy در زمان استفاده ساخته می‌شوند.

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            SearchManagerInterface::class,
            'search',
        ];
    }
}