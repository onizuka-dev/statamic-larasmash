<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class QuoteFetcher extends Tags
{
    /**
     * The {{ quote_fetcher }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $quotes = [
            'The only way to do great work is to love what you do. - Steve Jobs',
            'Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful. - Albert Schweitzer',
            'The only limit to our realization of tomorrow will be our doubts of today. - Franklin D. Roosevelt',
            'The best way to predict the future is to create it. - Peter Drucker',
            'The only thing that stands between you and your dream is the will to try and the belief that it is actually possible. - Joel Brown',
        ];

        return $quotes[array_rand($quotes)];
    }
}
