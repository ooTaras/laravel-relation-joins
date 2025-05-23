<?php

namespace Kanarskiy\LaravelRelationJoins;

use Illuminate\Database\Eloquent\Builder as Eloquent;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder as Query;
use Illuminate\Support\ServiceProvider;

class LaravelRelationJoinServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Query::mixin(new Mixins\MergeJoins);
        Query::mixin(new Mixins\JoinOperations);
        Eloquent::mixin(new Mixins\JoinsRelationships);
        Relation::mixin(new Mixins\RelationJoinQueries);
    }
}
