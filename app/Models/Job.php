<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => 'a lot',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => 'eh',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => 'NOT a lot',
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(! $job){
            abort(404);
        }
    }
}
