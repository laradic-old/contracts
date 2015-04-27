<?php
/**
 * Part of Robin Radic's PHP packages.
 *
 * MIT License and copyright information bundled with this package
 * in the LICENSE file or visit http://radic.mit-license.org
 */
namespace Laradic\Contracts\Console;

use Laradic\Console\Command;

/**
 * This is the ContractsListCommand class.
 *
 * @package                Laradic\Contracts
 * @version                1.0.0
 * @author                  Robin Radic
 * @license                MIT License
 * @copyright            2015, Robin Radic
 * @link                      https://github.com/robinradic
 */
class ContractsListCommand extends Command
{

    protected $name = 'contracts:list';

    protected $description = 'Command description.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
    }
}
