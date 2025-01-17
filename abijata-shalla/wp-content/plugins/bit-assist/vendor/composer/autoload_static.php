<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit282477924f73e0d05fe4df5b7d677f9a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TypistTech\\Imposter\\Plugin\\' => 27,
            'TypistTech\\Imposter\\' => 20,
        ),
        'B' => 
        array (
            'BitApps\\WPTelemetry\\' => 20,
            'BitApps\\Assist\\Core\\' => 20,
            'BitApps\\Assist\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TypistTech\\Imposter\\Plugin\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter-plugin/src',
        ),
        'TypistTech\\Imposter\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter/src',
        ),
        'BitApps\\WPTelemetry\\' => 
        array (
            0 => __DIR__ . '/..' . '/bitapps/wp-telemetry/src',
        ),
        'BitApps\\Assist\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/backend/core',
        ),
        'BitApps\\Assist\\' => 
        array (
            0 => __DIR__ . '/../..' . '/backend/app',
        ),
    );

    public static $classMap = array (
        'BitApps\\Assist\\Config' => __DIR__ . '/../..' . '/backend/app/Config.php',
        'BitApps\\Assist\\Core\\Database\\Blueprint' => __DIR__ . '/../..' . '/backend/core/Database/Blueprint.php',
        'BitApps\\Assist\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/backend/core/Database/Connection.php',
        'BitApps\\Assist\\Core\\Database\\Migration' => __DIR__ . '/../..' . '/backend/core/Database/Migration.php',
        'BitApps\\Assist\\Core\\Database\\Model' => __DIR__ . '/../..' . '/backend/core/Database/Model.php',
        'BitApps\\Assist\\Core\\Database\\Operator' => __DIR__ . '/../..' . '/backend/core/Database/Operator.php',
        'BitApps\\Assist\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/backend/core/Database/QueryBuilder.php',
        'BitApps\\Assist\\Core\\Database\\Relations' => __DIR__ . '/../..' . '/backend/core/Database/Relations.php',
        'BitApps\\Assist\\Core\\Database\\Schema' => __DIR__ . '/../..' . '/backend/core/Database/Schema.php',
        'BitApps\\Assist\\Core\\Helpers\\Arr' => __DIR__ . '/../..' . '/backend/core/Helpers/Arr.php',
        'BitApps\\Assist\\Core\\Helpers\\DateTimeHelper' => __DIR__ . '/../..' . '/backend/core/Helpers/DateTimeHelper.php',
        'BitApps\\Assist\\Core\\Helpers\\JSON' => __DIR__ . '/../..' . '/backend/core/Helpers/JSON.php',
        'BitApps\\Assist\\Core\\Hooks\\Hooks' => __DIR__ . '/../..' . '/backend/core/Hooks/Hooks.php',
        'BitApps\\Assist\\Core\\Hooks\\HooksWrapper' => __DIR__ . '/../..' . '/backend/core/Hooks/HooksWrapper.php',
        'BitApps\\Assist\\Core\\Http\\Client\\HttpClient' => __DIR__ . '/../..' . '/backend/core/Http/Client/HttpClient.php',
        'BitApps\\Assist\\Core\\Http\\IpTool' => __DIR__ . '/../..' . '/backend/core/Http/IpTool.php',
        'BitApps\\Assist\\Core\\Http\\RequestType' => __DIR__ . '/../..' . '/backend/core/Http/RequestType.php',
        'BitApps\\Assist\\Core\\Http\\Request\\Request' => __DIR__ . '/../..' . '/backend/core/Http/Request/Request.php',
        'BitApps\\Assist\\Core\\Http\\Request\\Validator\\Rule' => __DIR__ . '/../..' . '/backend/core/Http/Request/Validator/Rule.php',
        'BitApps\\Assist\\Core\\Http\\Request\\Validator\\ValidateAttributes' => __DIR__ . '/../..' . '/backend/core/Http/Request/Validator/ValidateAttributes.php',
        'BitApps\\Assist\\Core\\Http\\Request\\Validator\\Validator' => __DIR__ . '/../..' . '/backend/core/Http/Request/Validator/Validator.php',
        'BitApps\\Assist\\Core\\Http\\Response' => __DIR__ . '/../..' . '/backend/core/Http/Response.php',
        'BitApps\\Assist\\Core\\Http\\Router\\APIRouter' => __DIR__ . '/../..' . '/backend/core/Http/Router/APIRouter.php',
        'BitApps\\Assist\\Core\\Http\\Router\\AjaxRouter' => __DIR__ . '/../..' . '/backend/core/Http/Router/AjaxRouter.php',
        'BitApps\\Assist\\Core\\Http\\Router\\Route' => __DIR__ . '/../..' . '/backend/core/Http/Router/Route.php',
        'BitApps\\Assist\\Core\\Http\\Router\\RouteBase' => __DIR__ . '/../..' . '/backend/core/Http/Router/RouteBase.php',
        'BitApps\\Assist\\Core\\Http\\Router\\RouteRegistrar' => __DIR__ . '/../..' . '/backend/core/Http/Router/RouteRegistrar.php',
        'BitApps\\Assist\\Core\\Http\\Router\\Router' => __DIR__ . '/../..' . '/backend/core/Http/Router/Router.php',
        'BitApps\\Assist\\Core\\Installer' => __DIR__ . '/../..' . '/backend/core/Installer.php',
        'BitApps\\Assist\\Core\\Utils\\Capabilities' => __DIR__ . '/../..' . '/backend/core/Utils/Capabilities.php',
        'BitApps\\Assist\\Core\\Utils\\FileHandler' => __DIR__ . '/../..' . '/backend/core/Utils/FileHandler.php',
        'BitApps\\Assist\\Deps\\BitApps\\WPTelemetry\\Telemetry\\Feedback\\Feedback' => __DIR__ . '/..' . '/bitapps/wp-telemetry/src/Telemetry/Feedback/Feedback.php',
        'BitApps\\Assist\\Deps\\BitApps\\WPTelemetry\\Telemetry\\Report\\Report' => __DIR__ . '/..' . '/bitapps/wp-telemetry/src/Telemetry/Report/Report.php',
        'BitApps\\Assist\\Deps\\BitApps\\WPTelemetry\\Telemetry\\Report\\ReportInfo' => __DIR__ . '/..' . '/bitapps/wp-telemetry/src/Telemetry/Report/ReportInfo.php',
        'BitApps\\Assist\\Deps\\BitApps\\WPTelemetry\\Telemetry\\Telemetry' => __DIR__ . '/..' . '/bitapps/wp-telemetry/src/Telemetry/Telemetry.php',
        'BitApps\\Assist\\Deps\\BitApps\\WPTelemetry\\Telemetry\\TelemetryConfig' => __DIR__ . '/..' . '/bitapps/wp-telemetry/src/Telemetry/TelemetryConfig.php',
        'BitApps\\Assist\\HTTP\\Controllers\\AnalyticsController' => __DIR__ . '/../..' . '/backend/app/HTTP/Controllers/AnalyticsController.php',
        'BitApps\\Assist\\HTTP\\Controllers\\ApiWidgetController' => __DIR__ . '/../..' . '/backend/app/HTTP/Controllers/ApiWidgetController.php',
        'BitApps\\Assist\\HTTP\\Controllers\\BitAssistAnalyticsController' => __DIR__ . '/../..' . '/backend/app/HTTP/Controllers/BitAssistAnalyticsController.php',
        'BitApps\\Assist\\HTTP\\Controllers\\DownloadController' => __DIR__ . '/../..' . '/backend/app/HTTP/Controllers/DownloadController.php',
        'BitApps\\Assist\\HTTP\\Controllers\\IframeController' => __DIR__ . '/../..' . '/backend/app/HTTP/Controllers/IframeController.php',
        'BitApps\\Assist\\HTTP\\Controllers\\ResponseController' => __DIR__ . '/../..' . '/backend/app/HTTP/Controllers/ResponseController.php',
        'BitApps\\Assist\\HTTP\\Controllers\\WidgetChannelController' => __DIR__ . '/../..' . '/backend/app/HTTP/Controllers/WidgetChannelController.php',
        'BitApps\\Assist\\HTTP\\Controllers\\WidgetController' => __DIR__ . '/../..' . '/backend/app/HTTP/Controllers/WidgetController.php',
        'BitApps\\Assist\\HTTP\\Middleware\\NonceCheckerMiddleware' => __DIR__ . '/../..' . '/backend/app/HTTP/Middleware/NonceCheckerMiddleware.php',
        'BitApps\\Assist\\HTTP\\Requests\\WidgetChannelStoreRequest' => __DIR__ . '/../..' . '/backend/app/HTTP/Requests/WidgetChannelStoreRequest.php',
        'BitApps\\Assist\\HTTP\\Requests\\WidgetChannelUpdateRequest' => __DIR__ . '/../..' . '/backend/app/HTTP/Requests/WidgetChannelUpdateRequest.php',
        'BitApps\\Assist\\HTTP\\Requests\\WidgetStoreRequest' => __DIR__ . '/../..' . '/backend/app/HTTP/Requests/WidgetStoreRequest.php',
        'BitApps\\Assist\\HTTP\\Requests\\WidgetUpdateRequest' => __DIR__ . '/../..' . '/backend/app/HTTP/Requests/WidgetUpdateRequest.php',
        'BitApps\\Assist\\Model\\Analytics' => __DIR__ . '/../..' . '/backend/app/Model/Analytics.php',
        'BitApps\\Assist\\Model\\Response' => __DIR__ . '/../..' . '/backend/app/Model/Response.php',
        'BitApps\\Assist\\Model\\Widget' => __DIR__ . '/../..' . '/backend/app/Model/Widget.php',
        'BitApps\\Assist\\Model\\WidgetChannel' => __DIR__ . '/../..' . '/backend/app/Model/WidgetChannel.php',
        'BitApps\\Assist\\Plugin' => __DIR__ . '/../..' . '/backend/app/Plugin.php',
        'BitApps\\Assist\\Providers\\HookProvider' => __DIR__ . '/../..' . '/backend/app/Providers/HookProvider.php',
        'BitApps\\Assist\\Providers\\InstallerProvider' => __DIR__ . '/../..' . '/backend/app/Providers/InstallerProvider.php',
        'BitApps\\Assist\\Views\\Layout' => __DIR__ . '/../..' . '/backend/app/Views/Layout.php',
        'BitApps\\Assist\\Views\\WebsiteLayout' => __DIR__ . '/../..' . '/backend/app/Views/WebsiteLayout.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TypistTech\\Imposter\\ArrayUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/ArrayUtil.php',
        'TypistTech\\Imposter\\Config' => __DIR__ . '/..' . '/typisttech/imposter/src/Config.php',
        'TypistTech\\Imposter\\ConfigCollection' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollection.php',
        'TypistTech\\Imposter\\ConfigCollectionFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionFactory.php',
        'TypistTech\\Imposter\\ConfigCollectionInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionInterface.php',
        'TypistTech\\Imposter\\ConfigFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigFactory.php',
        'TypistTech\\Imposter\\ConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigInterface.php',
        'TypistTech\\Imposter\\Filesystem' => __DIR__ . '/..' . '/typisttech/imposter/src/Filesystem.php',
        'TypistTech\\Imposter\\FilesystemInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/FilesystemInterface.php',
        'TypistTech\\Imposter\\Imposter' => __DIR__ . '/..' . '/typisttech/imposter/src/Imposter.php',
        'TypistTech\\Imposter\\ImposterFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterFactory.php',
        'TypistTech\\Imposter\\ImposterInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterInterface.php',
        'TypistTech\\Imposter\\Plugin\\AutoloadMerger' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/AutoloadMerger.php',
        'TypistTech\\Imposter\\Plugin\\ImposterPlugin' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/ImposterPlugin.php',
        'TypistTech\\Imposter\\Plugin\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/Transformer.php',
        'TypistTech\\Imposter\\ProjectConfig' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfig.php',
        'TypistTech\\Imposter\\ProjectConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfigInterface.php',
        'TypistTech\\Imposter\\StringUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/StringUtil.php',
        'TypistTech\\Imposter\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter/src/Transformer.php',
        'TypistTech\\Imposter\\TransformerInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/TransformerInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit282477924f73e0d05fe4df5b7d677f9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit282477924f73e0d05fe4df5b7d677f9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit282477924f73e0d05fe4df5b7d677f9a::$classMap;

        }, null, ClassLoader::class);
    }
}
