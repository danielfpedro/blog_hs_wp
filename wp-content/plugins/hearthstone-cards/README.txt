=== Hearthstone Cards for WordPress ===
Contributors: flowdee
Donate link: https://donate.flowdee.de
Tags: hearthstone, blizzard, cards, overlay, card, deck, tooltip, hearthstone cards, gold
Requires at least: 3.5.1
Tested up to: 4.6.1
Stable tag: 2.3.4
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Hearthstone Cards for WordPress adds an overlay to written card names and displays the associated image while hovering them.

== Description ==
Hearthstone Cards for WordPress adds an overlay to written card names and displays the associated image while hovering them.

= Features =

*   Use brackets e.g. [Flamewaker] or [Flamewaker gold] to convert your card names
*   Supporting: Posts, Pages, Custom Post Types, Comments, bbPress, Page Builder, BuddyPress & Text Widgets
*   Adding overlay and displays the associated image while hovering card names
*   Supporting the following card languages: English, Chinese, French, German, Russian, Spanish & Portuguese (Brazil)
*   Standard and gold (premium) card images available
*   Show colored card names according to their rarity
*   Configuration page for more options
*   Try out the online [demo](https://coder.flowdee.de/hearthstone-cards-for-wordpress/)
*   Regular updates and improvements: Go though the [changelog](https://wordpress.org/plugins/hearthstone-cards/changelog/)

= How to display Hearthstone Cards =
Please use e.g. [Flamewaker] or [Flamewaker gold] to convert your card names within your WordPress pages or posts.

Basically take care of using correct special character according to your selected language.

= Support =

* Browse [issue tracker](https://github.com/flowdee/hearthstone-cards/issues) on GitHub
* [Follow me on Twitter](https://twitter.com/flowdee) to stay in contact and informed about updates

= Credits =

*   Card images provided through the awesome [Hearthhead.com](http://www.hearthhead.com/) database

== Installation ==

The installation and configuration of the plugin is as simple as it can be.

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'hearthstone-cards'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `hearthstone-cards.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

= Using FTP =

1. Download `hearthstone-cards.zip`
2. Extract the `hearthstone-cards` directory to your computer
3. Upload the `hearthstone-cards` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard

== Frequently Asked Questions ==

= How does the plugin work? =

The plugin searches for Hearthstone card names within brackets e.g. [Druid of the Claw] or [Druid of the Claw gold] and automatically adds an overlay to them.

Basically take care of using correct special character according to your selected language.

= Multisite supported? =

Yes of course. Please install the plugin via the network administration but **don't activate for network**! Activate the plugin for each single blog instead.

== Screenshots ==

1. Configuration screen
2. Hearthstone Cards overlay in action

== Changelog ==

= Version 2.3.4 (10th October 2016) =
* Updated local cards database to latest v14830

= Version 2.3.3 (22th September 2016) =
* New: Added feedback about the automated card updates to settings page
* Updated local cards database to latest v14406

= Version 2.3.2 (11th May 2016) =
* Increased default caching time for card data from 1 to 5 days
* Added local fallback when latest card data from API is not available
* Added missing translations
* Fixed and issue when latest card data from API was not available

= Version 2.3.1 (4th May 2016) =
* Fix: Card data couldn't be fetched in a certain circumstance (replaced file_get_contents with wp_remote_get)
* Fix: Card data will only be cached when it was fetched correctly from now on

= Version 2.3.0 (29th April 2016) =
* !!! After updating the plugin you have to re-activate it !!!
* New: New cards and data will now be fetched via an API automatically
* New: Card data cache can be renewed manually via settings page
* New: Plugin can now be translated by the community
* New: Added German translations
* Optimized card validation
* Fixed several wrong card/image assignments
* Moved Javascript file to footer
* Renamed plugin folder and files

= Version 2.2.1 (22th March 2016) =
* Fixed a bug which prevents some basic cards to be converted
* Fixed a bug which leads into broken images
* Updated card database to the latest patch

= Version 2.2.0 (29th December 2015) =
* New: Added "League of Explorers" cards!
* Updated to latest patch v4.1.0.10956

= Version 2.1.3 (7th November 2015) =
* Fixed card validation which prevents e.g. The Coin from being showed

= Version 2.1.2 (7th November 2015) =
* New: Added support for Chinese cards
* Updated existing card sets

= Version 2.1.1 (27th September 2015) =
* Updated WP.org assets
* Checked compatibility and bumped version

= Version 2.1.0 (27th August 2015) =
* New: Added "The Grand Tournament" cards!

= Version 2.0.1 (18th July 2015) =
* Fixed minor php notices

= Version 2.0.0 (17th July 2015) =
* New: Added support for Comments, bbPress, Page Builder, BuddyPress & Text Widgets

= Version 1.8.1 (24th June 2015) =
* Fix: Plugin will no longer execute within feeds
* https friendly image implementation

= Version 1.8.0 (21th June 2015) =
* New: Added support for gold (premium) cards: e.g. [Flamewaker gold]
* New: Added "Tavern Brawl" cards!

= Version 1.6.2 (4th June 2015) =
* Minor updates

= Version 1.6.1 (7th May 2015) =
* Fix: Broken html replacement

= Version 1.6.0 (3rd April 2015) =
* New: Added "Blackrock Mountain" cards!

= Version 1.5.3 (8th February 2015) =
* Updated assets (screenshots and plugin directory banner)
* New: Portuguese (Brazil) language support

= Version 1.5.1 (23th January 2015) =
* Rebuild plugin structure
* Updated configuration page
* Performance improvements
* Fix: Overlay position for a better usability
* Fix: Colored card names didn't show up properly
* Fix: Inverted comma work correctly now
* New: Support for mobile devices
* New: Support for multilingual options page: [Send](http://coder.flowdee.de/contact/) me your translations

= Version 1.5 (7th December 2014) =
* New: Added "Goblins vs Gnomes" cards!

= Version 1.4 (31th August 2014) =
* New: Added colored card names (optional)
* New: Added bold card links (optional)

= Version 1.3 (25th August 2014) =
* Improved compatibility
* Fixed some bugs for fopen/curl usage (from now on using WordPress' wp_remote_fopen function)

= Version 1.2 (22th August 2014) =
* Rebuild usability to improve reliable card name detection. Please use e.g. [Druid of the Claw] to convert your card names.

= Version 1.1 (8th August 2014) =
* Naxxramas cards

= Version 1.0 (11th July 2014) =
* Initial release

== Upgrade Notice ==

= Version 2.3.4 (10th October 2016) =
* Updated local cards database to latest v14830

= Version 2.3.3 (22th September 2016) =
* New: Added feedback about the automated card updates to settings page
* Updated local cards database to latest v14406

= Version 2.3.2 (11th May 2016) =
* Increased default caching time for card data from 1 to 5 days
* Added local fallback when latest card data from API is not available
* Added missing translations
* Fixed and issue when latest card data from API was not available

= Version 2.3.1 (4th May 2016) =
* Fix: Card data couldn't be fetched in a certain circumstance (replaced file_get_contents with wp_remote_get)
* Fix: Card data will only be cached when it was fetched correctly from now on

= Version 2.3.0 (29th April 2016) =
* !!! After updating the plugin you have to re-activate it !!!
* New: New cards and data will now be fetched via an API automatically
* New: Card data cache can be renewed manually via settings page
* New: Plugin can now be translated by the community
* New: Added German translations
* Optimized card validation
* Fixed several wrong card/image assignments
* Moved Javascript file to footer
* Renamed plugin folder and files

= Version 2.2.1 (22th March 2016) =
* Fixed a bug which prevents some basic cards to be converted
* Fixed a bug which leads into broken images
* Updated card database to the latest patch

= Version 2.2.0 (29th December 2015) =
* New: Added "League of Explorers" cards!
* Updated to latest patch v4.1.0.10956

= Version 2.1.3 (7th November 2015) =
* Fixed card validation which prevents e.g. The Coin from being showed

= Version 2.1.2 (7th November 2015) =
* New: Added support for Chinese cards
* Updated existing card sets

= Version 2.1.1 (27th September 2015) =
* Updated WP.org assets
* Checked compatibility and bumped version

= Version 2.1.0 (27th August 2015) =
* New: Added "The Grand Tournament" cards!

= Version 2.0.1 (18th July 2015) =
* Fixed minor php notices

= Version 2.0.0 (17th July 2015) =
* New: Added support for Comments, bbPress, Page Builder, BuddyPress & Text Widgets

= Version 1.8.1 (24th June 2015) =
* Fix: Plugin will no longer execute within feeds
* https friendly image implementation

= Version 1.8.0 (21th June 2015) =
* New: Added support for gold (premium) cards: e.g. [Flamewaker gold]
* New: Added "Tavern Brawl" cards!

= Version 1.6.2 (4th June 2015) =
* Minor updates

= Version 1.6.1 (7th May 2015) =
* Fix: Broken html replacement

= Version 1.6.0 (3rd April 2015) =
* New: Added "Blackrock Mountain" cards!

= Version 1.5.3 (8th February 2015) =
* Updated assets (screenshots and plugin directory banner)
* New: Portuguese (Brazil) language support

= Version 1.5.1 (23th January 2015) =
* Rebuild plugin structure
* Updated configuration page
* Performance improvements
* Fix: Overlay position for a better usability
* Fix: Colored card names didn't show up properly
* Fix: Inverted comma work correctly now
* New: Support for mobile devices
* New: Support for multilingual options page: [Send](https://github.com/flowdee/support/) me your translations

= Version 1.5 (7th December 2014) =
* New: Added "Goblins vs Gnomes" cards!

= Version 1.4 (31th August 2014) =
* New: Added colored card names (optional)
* New: Added bold card links (optional)

= Version 1.3 (25th August 2014) =
* Improved compatibility
* Fixed some bugs for fopen/curl usage (from now on using WordPress' wp_remote_fopen function)

= 1.2 (22th August 2014) =
* Rebuild usability to improve reliable card name detection. Please use e.g. [Druid of the Claw] to convert your card names.

= Version 1.1 (8th August 2014) =
* Added "Naxxramas" cards

= Version 1.0 (11th July 2014) =
* Initial release