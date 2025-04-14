<?php

namespace App\Filament\Resources\TaskResource\Widgets;

use App\Models\Task;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TaskStats extends BaseWidget
{
    protected function getStats(): array
    {
        $totalTasks = Task::count();
        $completedTasks = Task::where('is_done', true)->count();
        $incompleteTasks = Task::where('is_done', false)->count();

        $completionRate = $totalTasks > 0 ? round(($completedTasks / $totalTasks) * 100) : 0;

        return [
            Stat::make('Total Tasks', $totalTasks)
                ->description('All tasks in the system')
                ->descriptionIcon('heroicon-o-clipboard-document-list')
                ->color('info'),

            Stat::make('Completed Tasks', $completedTasks)
                ->description($completionRate . '% completion rate')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Incomplete Tasks', $incompleteTasks)
                ->description('Tasks pending completion')
                ->descriptionIcon('heroicon-o-clock')
                ->color('warning'),
        ];
    }
}
