# Magento CacheWarmer

## Introduction
Magento CacheWarmer is a utility built specifically for **Magento 2 stores** to improve storefront performance by preloading and refreshing cache entries before they are requested by visitors. This ensures reduced page load times, improved responsiveness, and a smoother shopping experience for customers. By optimizing **Magento performance**, **page speed**, and **user experience**, it also contributes to better **SEO rankings** and higher conversions.

## Key Features
- **Proactive Cache Warming**: Pre-generates cache for product, category, and CMS pages to avoid cold starts.
- **Magento-Specific Configuration**: Tailored settings to meet Magento’s caching and indexing requirements.
- **Lightweight Operation**: Designed to run efficiently without affecting server resources.
- **Scalable**: Suitable for Magento stores of any size, from small shops to enterprise deployments.
- **Extensible**: Provides integration points for custom logic, third-party modules, and advanced caching strategies.
- **SEO-Friendly**: Faster load times help reduce bounce rates, improve site speed scores, and support overall search engine optimization efforts.

## Prerequisites
Before installation, ensure your environment meets the following requirements:
- **Magento Version**: Magento 2.4.x (recommended)
- **PHP Version**: PHP 7.4 or higher
- **Composer**: Installed and available globally
- **Database**: MySQL 5.7+ or MariaDB equivalent
- **Server**: Apache or Nginx configured for Magento 2
- **Access**: SSH access to the server for running CLI commands

## Installation
Clone the repository and install dependencies:
```bash
git clone <repository-url>
copy folder to app/code/
```

## Module Installation
Enable the module in Magento by running the following commands:
```bash
php bin/magento module:enable Bizmia_CacheWarmer
php bin/magento setup:upgrade
php bin/magento cache:flush
```

To verify installation:
```bash
php bin/magento module:status Bizmia_CacheWarmer
```

This will ensure the CacheWarmer module is properly registered and active in your Magento installation.

## Module Uninstallation / Disable
If you need to disable or uninstall the module, you can run:
```bash
php bin/magento module:disable Bizmia_CacheWarmer
php bin/magento setup:upgrade
php bin/magento cache:flush
```

To completely remove the module files:
```bash
composer remove Bizmia/module-cachewarmer
```

This will disable or fully remove the CacheWarmer module from your Magento installation.

## Usage
Run CacheWarmer with:
```bash
php bin/magento cachewarmer:start
```

To stop the CacheWarmer process:
```bash
php bin/magento cachewarmer:stop
```

To view the status of CacheWarmer:
```bash
php bin/magento cachewarmer:status
```

## How It Works
CacheWarmer functions by:
1. Identifying target URLs such as product, category, and CMS pages.
2. Sending background requests to these URLs to generate and store cache entries.
3. Refreshing cache at defined intervals to ensure users always experience optimal load times.
4. Leveraging Magento’s built-in caching mechanisms to reduce server load and avoid redundant requests.

This proactive approach ensures that when customers visit your store, pages are already cached and load instantly, which improves **Core Web Vitals** and **SEO site speed scores**.

## Performance
- **Reduced Latency**: Eliminates cold starts by ensuring cache is always preloaded.
- **Improved Conversion Rates**: Faster load times improve user satisfaction and lower bounce rates.
- **Efficient Resource Usage**: Runs in the background without disrupting normal site operations.
- **Scalability**: Can handle high-traffic Magento stores by adjusting concurrency settings.
- **SEO Benefits**: Optimized site performance contributes to better rankings in Google and other search engines.

## Logging
CacheWarmer provides detailed logging to monitor its activity:
- **Activity Logs**: Record URLs that were warmed, along with timestamps.
- **Error Logs**: Capture failed cache requests for troubleshooting.
- **Performance Metrics**: Report on execution time and cache hit/miss ratios.

Logs can be enabled or disabled via the `config.php` file or through the Magento Admin Panel. Admin users can also access logs for monitoring and auditing purposes.

## Configuration
The `config.php` file allows customization of:
- **Target URLs**: Product, category, and CMS pages for cache warming.
- **Refresh Interval**: Frequency at which cache entries are refreshed.
- **Concurrency**: Control over the number of simultaneous requests.
- **Logging**: Options for monitoring and reporting.

## Admin Configuration
CacheWarmer also provides an **Admin Panel Configuration** under:
`Stores > Configuration > Advanced > System > CacheWarmer`

From here, administrators can:
- Enable or disable CacheWarmer globally.
- Configure cache warming schedules (cron-based or manual triggers).
- Define product, category, and CMS page types for cache warming.
- Adjust concurrency and request limits.
- Enable logging and view cache warming reports directly in the admin.

These settings allow store administrators to manage CacheWarmer without editing configuration files manually.

## Troubleshooting
Here are common issues and solutions:
- **Issue:** CacheWarmer does not start.
  - **Solution:** Ensure the module is enabled using `php bin/magento module:status Bizmia_CacheWarmer` and run `php bin/magento setup:upgrade`.

- **Issue:** Pages are not being cached.
  - **Solution:** Verify that the specified URLs are correct in the configuration file and that cache types are enabled (`php bin/magento cache:status`).

- **Issue:** High server load.
  - **Solution:** Reduce concurrency in the configuration file or adjust cron schedules.

- **Issue:** Logs not generated.
  - **Solution:** Ensure logging is enabled in `config.php` or in the Admin Configuration panel.

- **Issue:** Module not visible in Admin Panel.
  - **Solution:** Run `php bin/magento setup:di:compile` and clear cache with `php bin/magento cache:flush`.

## Best Practices
To maximize the effectiveness of Magento CacheWarmer:
- **Set Up Cron Jobs**: Automate cache warming by scheduling cron jobs at regular intervals.
- **Tune Concurrency**: Adjust the number of simultaneous requests based on your server’s capacity to avoid overload.
- **Prioritize Important Pages**: Focus on product, category, and landing pages that bring the most traffic and conversions.
- **Monitor Logs**: Regularly review activity and error logs to identify and resolve issues quickly.
- **Combine with SEO Strategy**: Use CacheWarmer alongside other SEO optimizations (metadata, sitemaps, structured data) to maximize rankings.
- **Test Performance**: Run Google PageSpeed Insights, GTmetrix, or Lighthouse to confirm improvements in speed and Core Web Vitals.
- **Stagger Cache Refresh**: For large stores, avoid refreshing all URLs at once to prevent spikes in server load.

## Contributing
Contributions are encouraged. To contribute:
1. Fork this repository.
2. Create a feature branch.
3. Submit a pull request with a clear description of your changes.

## License
This project is licensed under the MIT License. Refer to the LICENSE file for details.
