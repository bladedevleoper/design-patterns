<?php

class YouTube
{
    public function getVideoViewCount($id)
    {
        return 5000;
    }

}


interface YouTubeAdapterInterface
{
    public function getViews($id);
}



class YouTubeAdapter implements YouTubeAdapterInterface
{

    protected $client;

    public function __construct(YouTube $client)
    {
        $this->client = $client;
    }

    public function getViews($id)
    {
        return $this->client->getVideoViewCount($id);
    }

}

$youtube = new YouTube();

$adapter = new YouTubeAdapter($youtube);

echo $adapter->getViews('james');