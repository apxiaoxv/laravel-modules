<?php

namespace Apxiaoxv\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Apxiaoxv\Modules\Commands\CommandMakeCommand;
use Apxiaoxv\Modules\Commands\ControllerMakeCommand;
use Apxiaoxv\Modules\Commands\DisableCommand;
use Apxiaoxv\Modules\Commands\DumpCommand;
use Apxiaoxv\Modules\Commands\EnableCommand;
use Apxiaoxv\Modules\Commands\EventMakeCommand;
use Apxiaoxv\Modules\Commands\FactoryMakeCommand;
use Apxiaoxv\Modules\Commands\InstallCommand;
use Apxiaoxv\Modules\Commands\JobMakeCommand;
use Apxiaoxv\Modules\Commands\LaravelModulesV6Migrator;
use Apxiaoxv\Modules\Commands\ListCommand;
use Apxiaoxv\Modules\Commands\ListenerMakeCommand;
use Apxiaoxv\Modules\Commands\MailMakeCommand;
use Apxiaoxv\Modules\Commands\MiddlewareMakeCommand;
use Apxiaoxv\Modules\Commands\MigrateCommand;
use Apxiaoxv\Modules\Commands\MigrateRefreshCommand;
use Apxiaoxv\Modules\Commands\MigrateResetCommand;
use Apxiaoxv\Modules\Commands\MigrateRollbackCommand;
use Apxiaoxv\Modules\Commands\MigrateStatusCommand;
use Apxiaoxv\Modules\Commands\MigrationMakeCommand;
use Apxiaoxv\Modules\Commands\ModelMakeCommand;
use Apxiaoxv\Modules\Commands\ModuleMakeCommand;
use Apxiaoxv\Modules\Commands\NotificationMakeCommand;
use Apxiaoxv\Modules\Commands\PolicyMakeCommand;
use Apxiaoxv\Modules\Commands\ProviderMakeCommand;
use Apxiaoxv\Modules\Commands\PublishCommand;
use Apxiaoxv\Modules\Commands\PublishConfigurationCommand;
use Apxiaoxv\Modules\Commands\PublishMigrationCommand;
use Apxiaoxv\Modules\Commands\PublishTranslationCommand;
use Apxiaoxv\Modules\Commands\RequestMakeCommand;
use Apxiaoxv\Modules\Commands\ResourceMakeCommand;
use Apxiaoxv\Modules\Commands\RouteProviderMakeCommand;
use Apxiaoxv\Modules\Commands\RuleMakeCommand;
use Apxiaoxv\Modules\Commands\SeedCommand;
use Apxiaoxv\Modules\Commands\SeedMakeCommand;
use Apxiaoxv\Modules\Commands\SetupCommand;
use Apxiaoxv\Modules\Commands\TestMakeCommand;
use Apxiaoxv\Modules\Commands\UnUseCommand;
use Apxiaoxv\Modules\Commands\UpdateCommand;
use Apxiaoxv\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
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
        LaravelModulesV6Migrator::class,
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
