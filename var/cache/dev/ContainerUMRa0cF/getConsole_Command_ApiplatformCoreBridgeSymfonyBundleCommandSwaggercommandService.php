<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.apiplatform_core_bridge_symfony_bundle_command_swaggercommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Command/SwaggerCommand.php';

return $this->services['console.command.apiplatform_core_bridge_symfony_bundle_command_swaggercommand'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\SwaggerCommand(($this->privates['api_platform.swagger.normalizer.documentation'] ?? $this->getApiPlatform_Swagger_Normalizer_DocumentationService()), ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), '', '', '0.0.0', $this->parameters['api_platform.formats']);