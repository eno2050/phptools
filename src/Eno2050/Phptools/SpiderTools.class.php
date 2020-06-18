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

    private $config = null;

    public function __construct(array $config)
    {

        $this->config = $config;
    }

    public function spider()
    {

        $client = new Client([
            'timeout' => 10,
            'headers' => ['User-Agent' => 'Mozilla/5.0 (compatible; Baiduspider-render/2.0; +http://www.baidu.com/search/spider.html)',
            ],
        ]);

        $response = $client->request('GET', $this->config['url'])->getBody()->getContents();

        $data = [];
        $crawler = new Crawler();
        $crawler->addHtmlContent($response);

        try {
        	$data['name'] = $crawler->filterXpath('//div[contains(@class, "index-tj-l")]/ul/li/a/span[contains(@class, "lzbz")]/p[contains(@class, "name")]')->text();

        }catch(\Exception $e) {

        }

        return $data;


    }

}
