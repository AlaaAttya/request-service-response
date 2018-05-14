<?php

namespace App\Requests;


use Klein\Request;

abstract class BaseRequest
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * DESC
     *
     * @return mixed
     *
     * @author Alaa Attya <alaa.attya91@gamil.com>
     */
    abstract public function validate();

    /**
     * DESC
     * @return mixed
     *
     * @author Alaa Attya <alaa.attya91@gamil.com>
     */
    abstract public function process();
}