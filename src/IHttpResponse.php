<?php
namespace Katapoka\Ahgora\Contracts;

/**
 * Class for the Http responses
 */
interface IHttpResponse
{

    /**
     * IHttpResponse constructor.
     *
     * @param array $data
     */
    public function __construct(array $data = []);

    /**
     * Get the HttpResponse status.
     *
     * @return mixed
     */
    public function getHttpStatus();

    /**
     * Get the request body.
     *
     * @return string
     */
    public function getBody();

    /**
     * Get the request body as json, if is json compatible.
     *
     * @return string
     */
    public function json();

    /**
     * The the response headers.
     *
     * @return array
     */
    public function getHeaders();
}