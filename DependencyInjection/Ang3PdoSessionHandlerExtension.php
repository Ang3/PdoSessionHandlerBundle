<?php

namespace Ang3\Bundle\PdoSessionHandlerBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * @author Joanis ROUANET
 */
class Ang3PDOSessionHandlerExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        // Enregistrement des paramètres de connexion à la base de données concernée
        $container->setParameter('ang3_pdo_session_handler.host', $config['host']);
        $container->setParameter('ang3_pdo_session_handler.port', $config['port']);
        $container->setParameter('ang3_pdo_session_handler.database', $config['database']);
        $container->setParameter('ang3_pdo_session_handler.username', $config['username']);
        $container->setParameter('ang3_pdo_session_handler.password', $config['password']);

        // Définition d'un chargeur de fichier YAML
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        // Chargement des services
        $loader->load('services.yml');
    }
}
