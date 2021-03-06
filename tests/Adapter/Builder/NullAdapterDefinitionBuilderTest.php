<?php

/*
 * This file is part of the flysystem-bundle project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\League\FlysystemBundle\Adapter\Builder;

use League\Flysystem\Adapter\NullAdapter;
use League\FlysystemBundle\Adapter\Builder\NullAdapterDefinitionBuilder;

class NullAdapterDefinitionBuilderTest extends AbstractAdapterDefinitionBuilderTest
{
    public function createBuilder()
    {
        return new NullAdapterDefinitionBuilder($this->createDefinitionFactory());
    }

    public function testOptionsBehavior()
    {
        $this->assertSame(NullAdapter::class, $this->createBuilder()->createDefinition([])->getClass());
    }
}
