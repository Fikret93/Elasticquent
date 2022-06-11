<?php

namespace Elasticquent;

trait ElasticquentClientTrait
{
    use ElasticquentConfigTrait;

    /**
     * Get ElasticSearch Client
     *
     * @return \Elasticsearch\Client
     */
    public function getElasticSearchClient()
    {
        $config = $this->getElasticConfig();

        if (class_exists('\Elastic\Elasticsearch\ClientBuilder')) {
            return \Elastic\Elasticsearch\ClientBuilder::fromConfig($config);
        }
        
        return new \Elastic\Elasticsearch\Client($config);
    }

}
