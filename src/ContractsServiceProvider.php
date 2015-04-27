<?php
/**
 * Part of  Robin Radic's PHP packages.
 *
 * MIT License and copyright information bundled with this package
 * in the LICENSE file or visit http://radic.mit-license.org
 */
namespace Laradic\Contracts;

use Illuminate\Foundation\Application;
use Laradic\Config\Traits\ConfigProviderTrait;
use Laradic\Support\ServiceProvider;

/**
 * {@inheritdoc}
 */
class ContractsServiceProvider extends ServiceProvider
{
    use ConfigProviderTrait;

    protected $providers = [
        'Laradic\Contracts\Providers\ConsoleServiceProvider'
    ];

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        /** @var  \Illuminate\Foundation\Application $app */
        $app = parent::boot();
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        /** @var  \Illuminate\Foundation\Application $app */
        $app = parent::register();
        $this->addConfigComponent('laradic/contracts', 'laradic/contracts', __DIR__ . '/../resources/config');

    }
}
