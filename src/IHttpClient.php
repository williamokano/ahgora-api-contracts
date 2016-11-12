<?php

namespace Katapoka\Ahgora\Contracts;

/**
 * Interface responsible for defining the default contract (instead of psr-7)
 * of how to make http requests.
 */
interface IHttpClient
{
    const HTTP_GET = 'GET';
    const HTTP_POST = 'POST';
    const HTTP_PUT = 'PUT';
    const HTTP_DELETE = 'DELETE';

    const HTTP_STATUS_OK = 200;
    const HTTP_STATUS_CREATED = 201;
    const HTTP_STATUS_MOVED_PERMANENTLY = 301;
    const HTTP_STATUS_NOT_MODIFIED = 304;
    const HTTP_STATUS_BAD_REQUEST = 400;
    const HTTP_STATUS_UNAUTHORIZED = 401;
    const HTTP_STATUS_FORBIDDEN = 403;
    const HTTP_STATUS_NOT_FOUND = 404;
    const HTTP_STATUS_GONE = 410;
    const HTTP_STATUS_UNPROCESSABLE_ENTITY = 422;
    const HTTP_STATUS_INTERNAL_SERVER_ERROR = 500;
    const HTTP_STATUS_NOT_IMPLEMENTED = 501;
    const HTTP_STATUS_SERVICE_UNAVAILABLE = 503;
    const HTTP_STATUS_PERMISSION_DENIED = 550;

    /**
     * Make an http request to some URL with the given http method
     *
     * @param string $method
     * @param string $url
     * @param array  $data
     * @param array  $config
     *
     * @return \Katapoka\Ahgora\Contracts\IHttpResponse
     */
    public function request($method, $url, $data = [], array $config = []);

    /**
     * Make a get request to an URL.
     *
     * @param string $url
     * @param array  $data
     * @param array  $config
     *
     * @return \Katapoka\Ahgora\Contracts\IHttpResponse
     */
    public function get($url, $data = [], array $config = []);

    /**
     * Make a post request to an URL.
     *
     * @param string $url
     * @param array  $data
     * @param array  $config
     *
     * @return \Katapoka\Ahgora\Contracts\IHttpResponse
     */
    public function post($url, $data = [], array $config = []);

    /**
     * Set a header to the request.
     *
     * @param string $header
     * @param string $value
     *
     * @return \Katapoka\Ahgora\Contracts\IHttpClient the instance of the class for method chaining
     */
    public function setHeader($header, $value);

    /**
     * Unset a header to the request.
     *
     * @param string $header
     *
     * @return \Katapoka\Ahgora\Contracts\IHttpClient the instance of the class for method chaining
     */
    public function unsetHeader($header);

    /**
     * Retrieves the value of a given header name.
     *
     * @param string $header
     *
     * @return string|null
     */
    public function getHeader($header);

    /**
     * Get all headers from the http client.
     *
     * @return array
     */
    public function getHeaders();

    /**
     * Set a timeout to the connection.
     *
     * @param int $timeout
     *
     * @return \Katapoka\Ahgora\Contracts\IHttpClient
     */
    public function setTimeout($timeout);

    /**
     * Set if the request will response a json instead of form data.
     *
     * @param bool $isJson
     *
     * @return \Katapoka\Ahgora\Contracts\IHttpClient
     */
    public function setIsJson($isJson = true);
}
