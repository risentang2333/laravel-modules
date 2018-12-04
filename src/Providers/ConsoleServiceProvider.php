<?php

namespace Risentang\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Risentang\Modules\Commands\CommandMakeCommand;
use Risentang\Modules\Commands\ControllerMakeCommand;
use Risentang\Modules\Commands\DisableCommand;
use Risentang\Modules\Commands\DumpCommand;
use Risentang\Modules\Commands\EnableCommand;
use Risentang\Modules\Commands\EventMakeCommand;
use Risentang\Modules\Commands\FactoryMakeCommand;
use Risentang\Modules\Commands\InstallCommand;
use Risentang\Modules\Commands\JobMakeCommand;
use Risentang\Modules\Commands\ListCommand;
use Risentang\Modules\Commands\ListenerMakeCommand;
use Risentang\Modules\Commands\MailMakeCommand;
use Risentang\Modules\Commands\MiddlewareMakeCommand;
use Risentang\Modules\Commands\MigrateCommand;
use Risentang\Modules\Commands\MigrateRefreshCommand;
use Risentang\Modules\Commands\MigrateResetCommand;
use Risentang\Modules\Commands\MigrateRollbackCommand;
use Risentang\Modules\Commands\MigrateStatusCommand;
use Risentang\Modules\Commands\MigrationMakeCommand;
use Risentang\Modules\Commands\ModelMakeCommand;
use Risentang\Modules\Commands\ModuleMakeCommand;
use Risentang\Modules\Commands\NotificationMakeCommand;
use Risentang\Modules\Commands\PolicyMakeCommand;
use Risentang\Modules\Commands\ProviderMakeCommand;
use Risentang\Modules\Commands\PublishCommand;
use Risentang\Modules\Commands\PublishConfigurationCommand;
use Risentang\Modules\Commands\PublishMigrationCommand;
use Risentang\Modules\Commands\PublishTranslationCommand;
use Risentang\Modules\Commands\RequestMakeCommand;
use Risentang\Modules\Commands\ResourceMakeCommand;
use Risentang\Modules\Commands\RouteProviderMakeCommand;
use Risentang\Modules\Commands\RuleMakeCommand;
use Risentang\Modules\Commands\SeedCommand;
use Risentang\Modules\Commands\SeedMakeCommand;
use Risentang\Modules\Commands\SetupCommand;
use Risentang\Modules\Commands\TestMakeCommand;
use Risentang\Modules\Commands\UnUseCommand;
use Risentang\Modules\Commands\UpdateCommand;
use Risentang\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
