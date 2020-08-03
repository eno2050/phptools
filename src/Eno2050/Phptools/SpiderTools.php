<?php
/*================================================================
 *   Copyright (C) 2020 Freeman  Ltd. All rights reserved.
 *
 *   文件名称：SpiderTools.class.php
 *   创 建 者：Eno2050
 *   创建日期：2020年06月18日
 *   描    述：php爬虫
 *
================================================================*/

namespace Eno2050\Phptools;

use GuzzleHttp\Client; // 请求类
// 处理dom类
use Symfony\Component\DomCrawler\Crawler;

class SpiderTools
{

    private $config  = null;
    protected $redis = null;

    public function __construct(array $config)
    {

        $this->config = $config;
    }

    public function spiderListToDetail()
    {

        $client = new Client([
            'timeout' => 10000,
            'headers' => ['User-Agent' => 'Mozilla/5.0 (compatible; Baiduspider-render/2.0; +http://www.baidu.com/search/spider.html)',
            ],
        ]);

        $html = $client->request('GET', $this->config['url'])->getBody()->getContents();

        $crawler = new Crawler();
        $crawler->addHtmlContent($html);

        $lis   = $crawler->filterXpath('//div[contains(@class, "index-tj-l")]/ul/li');
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379);
        foreach ($lis as $key => $node) {
            $li = new Crawler($node);
            try {
                $href = 'https://www.88ys.com' . $li->filterXpath('//a')->attr('href');
                $redis->lpush('video', $href);

            } catch (\Exception $e) {

                echo $e->getMessage();

            }
        }

    }

    public function demo()
    {

        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        echo "success";

    }

    public function redisInstance()
    {

        $this->redis = $redis;

    }

    public function getListHref($crawler)
    {
        $data = [];
        $lis  = $crawler->filterXpath('//div[contains(@class, "index-tj-l")]/ul/li');

        foreach ($lis as $key => $node) {
            $li = new Crawler($node);
            try {
                $href = 'https://www.88ys.com/' . $li->filterXpath('//a')->attr('href');
                array_push($data, $href);

            } catch (\Exception $e) {

                echo $e->getMessage();

            }
        }

        return $data;
    }

}
