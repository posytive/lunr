<?php
/**
 * This file contains the StreamSocketClientTest class.
 *
 * PHP Version 5.3
 *
 * @category   Libraries
 * @package    Network
 * @subpackage Tests
 * @author     Olivier Wizen <olivier@m2mobi.com>
 * @copyright  2012, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Lunr\Network\Tests;

use PHPUnit_Framework_TestCase;
use ReflectionClass;

/**
 * This class contains test methods for the StreamSocketClient class.
 *
 * @category   Libraries
 * @package    Network
 * @subpackage Tests
 * @author     Olivier Wizen <olivier@m2mobi.com>
 * @covers     Lunr\Network\StreamSocketClient
 */
abstract class StreamSocketClientTest extends PHPUnit_Framework_TestCase
{
    /**
     * Instance of the StreamSocketClient class.
     * @var StreamSocketClient
     */
    protected $stream_socket_client;

    /**
     * Reflection instance of the StreamSocketClient class.
     * @var ReflectionClass
     */
    protected $stream_socket_client_reflection;

    /**
     * Runkit simulation code for returning TRUE.
     * @var String
     */
    const STREAM_SOCKET_CLIENT_RETURN_TRUE = 'return TRUE;';

    /**
     * Runkit simulation code for returning FALSE.
     * @var String
     */
    const STREAM_SOCKET_CLIENT_RETURN_FALSE = 'return FALSE;';

    /**
     * Runkit simulation code for returning handle.
     * @var String
     */
    const STREAM_SOCKET_CLIENT_RETURN_HANDLE = 'return fopen("./test.txt", "a");';

    /**
     * Runkit simulation code for returning handle.
     * @var String
     */
    const STREAM_SOCKET_CLIENT_RETURN_OTHER_HANDLE = 'return fopen("./test2.txt", "a");';

    /**
     * Runkit simulation code for returning int.
     * @var String
     */
    const STREAM_SOCKET_CLIENT_RETURN_EIGHT = 'return 8;';

    /**
     * Runkit simulation code for returning int.
     * @var String
     */
    const STREAM_SOCKET_CLIENT_RETURN_STRING = 'return "string";';

    /**
     * TestCase Constructor.
     */
    public function setUp()
    {
        $this->stream_socket_client_reflection = new ReflectionClass('Lunr\Network\StreamSocketClient');

        $this->stream_socket_client = new \Lunr\Network\StreamSocketClient('');
    }

    /**
     * TestCase Destructor.
     */
    public function tearDown()
    {
        unset($this->stream_socket_client_reflection);
        unset($this->stream_socket_client);
    }

    /**
     * Unit Test Case Provider for valid init time out value provider.
     *
     * @return array $return The valid values for init time out
     */
    public function validInitTimeoutProvider()
    {
        $timeout   = array();
        $timeout[] = array(1, 1.0);
        $timeout[] = array(1.0, 1.0);
        $timeout[] = array(1000, 1000.0);
        $timeout[] = array(1000.0, 1000.0);

        return $timeout;
    }

    /**
     * Unit Test Case Provider for invalid init time out value.
     *
     * @return array $return The invalid values for init time out
     */
    public function invalidInitTimeoutProvider()
    {
        $timeout   = array();
        $timeout[] = array(FALSE);
        $timeout[] = array(NULL);
        $timeout[] = array(TRUE);
        $timeout[] = array('str');
        $timeout[] = array('1234');

        return $timeout;
    }

    /**
     * Unit Test Case Provider for invalid flag value.
     *
     * @return array $return The invalid values for flag
     */
    public function invalidFlagProvider()
    {
        $flags   = array();
        $flags[] = array('STREAM_PERS');
        $flags[] = array('STRAM_PERS');
        $flags[] = array('STREAM_CLIENT');
        $flags[] = array('STREAM_CLIENT_A_FLAG');

        return $flags;
    }

}

?>
