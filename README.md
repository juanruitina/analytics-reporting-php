# Fetch Google Analytics reporting data using PHP
This script fetches data from Google Analytics via the [Google Analytics Reporting API v4](https://developers.google.com/analytics/devguides/reporting/core/v4) making use of the [Google API PHP Client library](https://github.com/googleapis/google-api-php-client) and outputs it as a JSON file. It also caches the JSON output for fewer requests and improved performance.

* [Composer](https://getcomposer.org/) is required. Once installed, you can install the required dependencies (i.e. Google API PHP Client) by running ``php composer.phar install``.
* [Generate service account credentials](https://developers.google.com/analytics/devguides/config/mgmt/v3/quickstart/service-php) and store the JSON file with the credentials in the ``/credentials`` folder as ``service-account-credentials.json``. Note a ``.htaccess`` file has been added so the credentials JSON file is not accessible for visitors, but please verify it works properly.
* Verify the script has permissions to create the ``/cache`` folder and to write inside it. The script will return a uncached output otherwise.
* `top-10-articles.php` gets the top 10 pages over the last 30 days whose path starts by `/article`, returns a JSON file with the fetch date and time and an array of the second level of their path, and caches it for 6 hours.
