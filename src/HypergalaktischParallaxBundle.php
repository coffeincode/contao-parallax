<?php
/**
 * @copyright  Georg Jaedicke
 * @author     Georg Jaedicke (hypergalaktisch)
 * @package    Parallax
 * @license    LGPL-3.0+
 * @see	       https://github.com/hypergalaktisch/contao-parallax
 */

namespace Hypergalaktisch\ParallaxBundle;

use Hypergalaktisch\ParallaxBundle\DependencyInjection\HypergalaktischParallaxExtension;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

/**
 * Configures the Contao parallax bundle.
 *
 * @author Georg Jaedicke
 */
class HypergalaktischParallaxBundle extends AbstractBundle
{
    /**
     * Builds the bundle.
     *
     * It is only ever called once when the cache is empty.
     *
     * This method can be overridden to register compilation passes,
     * other extensions, ...
     *
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function build(ContainerBuilder $container)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new HypergalaktischParallaxExtension();
    }
}
/*
 * Fatal error: Declaration of Hypergalaktisch\ParallaxBundle\HypergalaktischParallaxBundle::getContain
 * erExtension()
 *  must be compatible with Symfony\Component\HttpKernel\Bundle\AbstractBundle::getContainerExtension(): ?Symfony\Component\DependencyInjection\Extension\ExtensionInterface in /var/www/vanillaC5/vendor/hypergalaktisch/contao-parallax/src/HypergalaktischParallaxBundle.php on line 40
 */