<?php

/**
 * This file contains the MPNSDispatcherBaseTest class.
 *
 * PHP Version 5.4
 *
 * @category   Tests
 * @package    Vortex
 * @subpackage MPNS
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 * @copyright  2013, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Lunr\Vortex\MPNS\Tests;

use Lunr\Vortex\MPNS\MPNSType;

/**
 * This class contains test for the constructor of the MPNSDispatcher class.
 *
 * @category   Tests
 * @package    Vortex
 * @subpackage MPNS
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 * @covers     Lunr\Vortex\MPNS\MPNSDispatcher
 */
class MPNSDispatcherBaseTest extends MPNSDispatcherTest
{

    /**
     * Test that the endpoint is set to an empty string by default.
     */
    public function testEndpointIsEmptyString()
    {
        $this->assertPropertyEquals('endpoint', '');
    }

    /**
     * Test that the payload is set to an empty string by default.
     */
    public function testPayloadIsEmptyString()
    {
        $this->assertPropertyEquals('payload', '');
    }

    /**
     * Test that the priority is set to 0 by default.
     */
    public function testPriorityIsZero()
    {
        $this->assertSame(0, $this->get_reflection_property_value('priority'));
    }

    /**
     * Test that the passed Curl object is set correctly.
     */
    public function testCurlIsSetCorrectly()
    {
        $this->assertSame($this->curl, $this->get_reflection_property_value('curl'));
    }

    /**
     * Test that the passed Logger object is set correctly.
     */
    public function testLoggerIsSetCorrectly()
    {
        $this->assertSame($this->logger, $this->get_reflection_property_value('logger'));
    }

    /**
     * Test that the type is set to RAW by default.
     */
    public function testTypeIsSetToRaw()
    {
        $this->assertSame(MPNSType::RAW, $this->get_reflection_property_value('type'));
    }

}

?>
