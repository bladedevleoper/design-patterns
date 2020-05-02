<?php

//third party class example of getting facebook posts for a particular user

class Facebook
{

    public function showPostsForUser($userId)
    {
        return [
            'post-1' => [
                'date-posted' => '02/06/2019 12:50:44',
                'title' => 'My First Post',
                'comment-count' => 2
            ],
            'post-2' => [
                'date-posted' => '01/06/2019 15:50:04',
                'title' => 'My Second Post',
                'comment-count' => 6
            ],
        ];
    }

}