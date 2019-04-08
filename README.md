# Automattic Humility

* Contributors: [David Decker](https://github.com/deckerweb), [contributors](https://github.com/deckerweb/automattic-humility/graphs/contributors)
* Tags: automattic, jetpack, woocommerce, ads, tracking, humility
* Requires at least: 4.7.0
* Tested up to: 5.1
* Required PHP: 5.6
* Stable tag: master
* Current stable version: 1.0.0
* Donate link: https://www.paypal.me/deckerweb
* License: GPL-2.0-or-later
* License URI: [https://opensource.org/licenses/GPL-2.0](https://opensource.org/licenses/GPL-2.0)

A first attempt to remove the shameless Ad injection of recent Jetpack and WooCommerce versions (2019).
And also trying to completely stop the WooCommerce tracking.




## Features & Description - this Plugin **Removes** the Following:

* Jetpack 7.1+ Ads injection into plugin installer search results
* WooCommerce Ads injection into various places in WP-Admin
* WooCommerce tracking of lots of data, including order data (!) - [for more info see this Reddit thread](https://www.reddit.com/r/Wordpress/comments/b9xm1j/_/)

### More Background Info:
* [Reddit discussion thread](https://www.reddit.com/r/Wordpress/comments/b9xm1j/_/)
* [WP Tavern article 1](https://wptavern.com/jetpack-7-1-adds-feature-suggestions-to-plugin-search-results) / [article 2](https://wptavern.com/jetpack-is-promoting-paid-upgrades-on-plugin-search-screen-wordpress-plugin-team-says-it-may-be-a-violation-of-directory-guidelines) / [article 3](https://wptavern.com/woocommerce-3-6-to-add-marketplace-suggestions-despite-overwhelmingly-negative-feedback-from-developer-community) / [article 4](https://wptavern.com/jetpack-7-2-1-removes-promotions-for-paid-upgrades-from-the-search-screen)
* [What data is Jetpack syncing?](https://jetpack.com/support/what-data-does-jetpack-sync/) --> That's why you should avoid Jetpack at all costs anyway
* [Article "7 Reasons Why You Should NOT Use Jetpack"](https://toolbarextras.com/reasons-why-you-should-not-use-jetpack/) (by myself)


## Plugin Installation:

**Requirements/ Prerequisites**
* [WordPress v4.7 or higher](https://wordpress.org/download/)
* *PLEASE: For security and best support, always use the latest stable versions of WordPress and all plugins!*

**Via "GitHub Updater" Plugin** *(recommended!)*

* Install & activate the "GitHub Updater" plugin, get from here: [https://github.com/afragen/github-updater](https://github.com/afragen/github-updater)
* Recommended: set your API Token in the plugin's settings
* Go to "Settings > GitHub Updater > Install Plugin"
* Paste the GitHub URL `https://github.com/deckerweb/automattic-humility` in the "Plugin URI" field (branch "master" is pre-set), then hit the "Install Plugin" button there
* Install & activate the plugin

**Manual Upload**
* Download current .zip archive from master branch here, URL: [https://github.com/deckerweb/automattic-humility/archive/master.zip](https://github.com/deckerweb/automattic-humility/archive/master.zip)
* Unzip the package, then **rename the folder to `automattic-humility`**, then upload renamed folder via SFTP/ FTP to your WordPress plugin directory
* Activate the plugin

**Updates**
* Are done via the plugin "GitHub Updater" (see above) - leveraging the default WordPress update system!
* Setting your GitHub API Token is recommended! :)
* It's so easy and seamless you won't find any better solution for this ;-)


## Changelog - Version History:

--> See plugin file [CHANGES.md here](https://github.com/deckerweb/automattic-humility/blob/master/CHANGES.md)


## More Stuff:

* [Subscribe to my Newsletter](https://eepurl.com/gbAUUn)
* [Toolbar Extras - my flagship plugin - just check it out](https://toolbarextras.com) :-)
* [deckerweb Plugins](https://deckerweb-plugins.com)


---

Copyright (c) 2019 David Decker - DECKERWEB-Plugins.com
