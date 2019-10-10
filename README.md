# Fetch Google Analytics reporting, PHP
This script fetches data from Google Analytics via the [Google Analytics Reporting API v4](https://developers.google.com/analytics/devguides/reporting/core/v4) making use of the [Google API PHP Client library](https://github.com/googleapis/google-api-php-client) and outputs it as a JSON file. It also caches requests for a day for fewer requests and improved performance.

* Generate service account credentials with the appropriate permissions and store the JSON file with the credentials in the ``/credentials`` folder. Note a ``.htaccess`` file has been added so the credentials JSON file is not accessible for visitors.
* Verify the script has permissions to create the ``/cache`` folder and to write inside it.
