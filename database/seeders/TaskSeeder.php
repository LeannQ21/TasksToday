<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        Task::create([
            'title' => 'Review pastry orders',
            'status' => 'done',
            'task_date' => now()->subDays(2)->toDateString(),
        ]);

        Task::create([
            'title' => 'Check the ingredient inventory',
            'status' => 'done',
            'task_date' => now()->subDays(2)->toDateString(),
        ]);

        Task::create([
            'title' => 'Buy missing ingredients',
            'status' => 'done',
            'task_date' => now()->subDay()->toDateString(),
        ]);

        Task::create([
            'title' => 'Prepare the pastry dough',
            'status' => 'pending',
            'task_date' => now()->toDateString(),
        ]);

        Task::create([
            'title' => 'Bake the pastries',
            'status' => 'pending',
            'task_date' => now()->toDateString(),
        ]);

        Task::create([
            'title' => 'Decorate the pastries',
            'status' => 'pending',
            'task_date' => now()->toDateString(),
        ]);

        Task::create([
            'title' => 'Package customer orders',
            'status' => 'pending',
            'task_date' => now()->toDateString(),
        ]);

        Task::create([
            'title' => 'Deliver the pastry orders',
            'status' => 'pending',
            'task_date' => now()->addDay()->toDateString(),
        ]);
    }
}