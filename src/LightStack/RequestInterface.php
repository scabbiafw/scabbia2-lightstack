<?php
/**
 * Scabbia2 LightStack
 * http://www.scabbiafw.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link        http://github.com/scabbiafw/scabbia2-lightstack for the canonical source repository
 * @copyright   2010-2013 Scabbia Framework Organization. (http://www.scabbiafw.com/)
 * @license     http://www.apache.org/licenses/LICENSE-2.0 - Apache License, Version 2.0
 */

namespace Scabbia\LightStack;

// use Scabbia\LightStack\SessionInterface;

/**
 * Default methods needed for implementation of a request object
 *
 * @package     Scabbia\LightStack
 * @author      Eser Ozvataf <eser@sent.com>
 * @since       2.0.0
 */
interface RequestInterface
{
    /**
     * Gets session object
     *
     * @return SessionInterface session instance
     */
    public function getSession();

    /**
     * Gets endpoint
     *
     * For http, it's scheme://host:port/directory/
     *
     * @return string
     */
    public function getEndpoint();

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod();

    /**
     * Gets path info
     *
     * @return string
     */
    public function getPathInfo();

    /**
     * Gets remote ip
     *
     * @return string
     */
    public function getRemoteIp();

    /**
     * Gets accepted content-types
     *
     * @return array
     */
    public function getAcceptedContentTypes();

    /**
     * Gets accepted charsets
     *
     * @return array
     */
    public function getAcceptedCharsets();

    /**
     * Gets accepted encodings
     *
     * @return array
     */
    public function getAcceptedEncodings();

    /**
     * Gets accepted languages
     *
     * @return array
     */
    public function getAcceptedLanguages();

    /**
     * Determines whether the request is asynchronous or not
     *
     * @return bool
     */
    public function isAsynchronous();

    /**
     * Gets an item from GET collection
     *
     * @param string $uKey     the key for the value
     * @param mixed  $uDefault default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function get($uKey, $uDefault = null);

    /**
     * Gets all items from GET collection
     *
     * @return array
     */
    public function getAll();

    /**
     * Gets an item from POST collection
     *
     * @param string $uKey     the key for the value
     * @param mixed  $uDefault default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function post($uKey, $uDefault = null);

    /**
     * Gets all items from POST collection
     *
     * @return array
     */
    public function postAll();

    /**
     * Gets an item from FILES collection
     *
     * @param string $uKey     the key for the value
     * @param mixed  $uDefault default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function file($uKey, $uDefault = null);

    /**
     * Gets all items from FILES collection
     *
     * @return array
     */
    public function fileAll();

    /**
     * Gets an item from GET/POST/FILE collections
     *
     * @param string $uKey     the key for the value
     * @param mixed  $uDefault default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function data($uKey, $uDefault = null);

    /**
     * Gets all items from GET/POST/FILE collection
     *
     * @return array
     */
    public function dataAll();

    /**
     * Gets an item from SERVER collection
     *
     * @param string $uKey     the key for the value
     * @param mixed  $uDefault default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function server($uKey, $uDefault = null);

    /**
     * Gets all items from SERVER collection
     *
     * @return array
     */
    public function serverAll();

    /**
     * Gets an item from COOKIE collection
     *
     * @param string $uKey     the key for the value
     * @param mixed  $uDefault default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function cookie($uKey, $uDefault = null);

    /**
     * Gets all items from COOKIE collection
     *
     * @return array
     */
    public function cookieAll();

    /**
     * Gets an item from request headers
     *
     * @param string $uKey     the key for the value
     * @param mixed  $uDefault default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function header($uKey, $uDefault = null);

    /**
     * Gets all items from request headers
     *
     * @return array
     */
    public function headerAll();
}