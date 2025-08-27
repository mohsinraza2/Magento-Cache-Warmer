<?php
/**
 * Bizmia Cache Warmer URL Collection Cache Type
 */
namespace Bizmia\CacheWarmer\Model\Cache\Type;

use Magento\Framework\App\Cache\Type\FrontendPool;
use Magento\Framework\Cache\Frontend\Decorator\TagScope;

/**
 * URL Collection Cache Type
 */
class UrlCollection extends TagScope
{
    const TYPE_IDENTIFIER = 'bizmia_url_collection';
    const CACHE_TAG = 'BIZMIA_URL_COLLECTION';

    /**
     * Constructor
     *
     * @param FrontendPool $cacheFrontendPool
     */
    public function __construct(FrontendPool $cacheFrontendPool)
    {
        parent::__construct(
            $cacheFrontendPool->get(self::TYPE_IDENTIFIER),
            self::CACHE_TAG
        );
    }
}