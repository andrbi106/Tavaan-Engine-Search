<?php

declare(strict_types=1);

namespace Tavaan\Engine\Search\Contracts;

/**
 * قرارداد SearchManager.
 *
 * @see \Tavaan\Engine\Search\SearchManager
 * @api 1.0
 */
interface SearchManagerInterface
{
    /**
     * متد index.
     *
     * @return mixed
     */
    public function index(/* ... */): mixed;

    /**
     * متد delete.
     *
     * @return mixed
     */
    public function delete(/* ... */): mixed;

    /**
     * متد indexMany.
     *
     * @return mixed
     */
    public function indexMany(/* ... */): mixed;

    /**
     * متد search.
     *
     * @return mixed
     */
    public function search(/* ... */): mixed;

    /**
     * متد suggest.
     *
     * @return mixed
     */
    public function suggest(/* ... */): mixed;

    /**
     * متد createIndex.
     *
     * @return mixed
     */
    public function createIndex(/* ... */): mixed;

    /**
     * متد dropIndex.
     *
     * @return mixed
     */
    public function dropIndex(/* ... */): mixed;

    /**
     * متد flush.
     *
     * @return mixed
     */
    public function flush(/* ... */): mixed;
}