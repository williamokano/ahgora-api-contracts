<?php

namespace Katapoka\Ahgora\Contracts;

/**
 * Interface that holds the Ahgora Api contracts
 */
interface IAhgoraApi
{
    /**
     * Api constructor.
     *
     * @param IHttpClient $httpClient
     */
    public function __construct(IHttpClient $httpClient);

    /**
     * Set the company id of the ahgora system.
     *
     * @param string $companyId
     *
     * @return $this
     */
    public function setCompanyId($companyId);

    /**
     * Set the username of the employee, from the company set at the setCompanyId.
     *
     * @param string $username
     *
     * @return $this
     */
    public function setUsername($username);

    /**
     * Set the password of the employee, from the company set at the setCompanyId.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password);

    /**
     * Try to execute the login on the page.
     * To execute some actions the user needs to be loggedin.
     * After a successful login, the status loggedin is saved as true.
     *
     * @return bool Returns true if the login was successful and false otherwise
     */
    public function doLogin();

    /**
     * Get the punchs at the given parameters.
     *
     * @param int|null $month The month you want to get the punchs - Must be between 01 and 12 (both included)
     * @param int|null $year The year you want to get the punchs
     *
     * @return array
     */
    public function getPunchs($month = null, $year = null);

    /**
     * Gets the employer name.
     *
     * @return string
     */
    public function getEmployeeRole();

    /**
     * Get the employer department.
     *
     * @return string
     */
    public function getDepartment();
}