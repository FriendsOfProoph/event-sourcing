<?php

/**
 * This file is part of prooph/event-sourcing.
 * (c) 2014-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ProophTest\EventSourcing\Mock;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\EventSourcing\EventStoreIntegration\AggregateRootDecorator;

class ExtendedAggregateRootDecorator extends AggregateRootDecorator
{
    public function getAggregateId(): string
    {
        return $this->aggregateId();
    }

    public function doApply(AggregateChanged $event): void
    {
        $this->apply($event);
    }
}
