<?php

namespace Kanarskiy\LaravelRelationJoins;

class JoinState
{
    protected array $relations = [];

    public function addJoin(string $table): void
    {
        $this->relations[] = $table;
    }

    public function hasJoin(string $table): bool
    {
        return in_array($table, $this->relations);
    }
}