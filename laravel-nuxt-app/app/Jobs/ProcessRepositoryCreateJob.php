<?php

namespace App\Jobs;

use App\Models\Repository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessRepositoryCreateJob implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {
    }

    public function handle(): void
    {
        sleep(5);
        Repository::factory()->create();

    }
}
