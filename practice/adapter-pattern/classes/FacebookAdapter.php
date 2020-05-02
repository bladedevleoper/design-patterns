<?php

require_once 'interfaces/ServiceAdapterInterface.php';


class FacebookAdapter implements ServiceAdapterInterface
{

    protected $service;

    /*
     * Wrapper class accepts a Facebook object
     */
    public function __construct(Facebook $service)
    {
        $this->service = $service;
    }

    /*
     * Apply the method from interface and then use the service objects methods from within our wrapper class
     */
    public function getUserPosts($userId)
    {
        return $this->service->showPostsForUser($userId);
    }
}