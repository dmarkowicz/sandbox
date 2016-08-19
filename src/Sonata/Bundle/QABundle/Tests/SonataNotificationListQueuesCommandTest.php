<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Bundle\QABundle\Tests;

class SonataNotificationListQueuesCommandTest extends CommandTestCase
{
    public function testCommand()
    {
        $client = self::createClient();

        $output = $this->runCommand($client, 'sonata:notification:list-queues');

        $this->assertContains('The backend class Sonata\\NotificationBundle\\Backend\\PostponeRuntimeBackend does not provide multiple queues.', $output);
    }
}
