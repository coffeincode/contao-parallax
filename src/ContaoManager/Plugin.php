<?php
/**
 * @copyright  Georg Jaedicke
 * @author     Georg Jaedicke (hypergalaktisch)
 * @package    Parallax
 * @license    LGPL-3.0+
 * @see	       https://github.com/hypergalaktisch/contao-parallax
 */

namespace Hypergalaktisch\ParallaxBundle\ContaoManager;


use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Hypergalaktisch\ParallaxBundle\HypergalaktischParallaxBundle;




/**
 * Plugin for the Contao Manager.
 *
 * @author Georg Jaedicke (hypergalaktisch)
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array   {
        return [
            BundleConfig::create(HypergalaktischParallaxBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
