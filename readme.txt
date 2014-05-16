=== Media File Name Guess Preventer ===
Contributors: nkyre
Tags: uploads
Requires at least: 3.0.1
Tested up to: 3.8
License: MIT
License URI: http://opensource.org/licenses/MIT

Prepend a random string to media file uploads to prevent file name guessing.

== Description ==

Wordpress upload file names can be quite predictable sometimes, especially if uploading from the same camera - DKIM1004 comes after DKIM1003. If not all of the content on your site is public, this can be a problem as people can snoop on your media folder by guessing file names.

This plugin prepends a short 8 character hash to the beginning of every uploaded file. For example, DKIM1004.jpg turns into 8df8078e-DKIM1004.jpg. The hash is not cryptographically secure and just makes it a bit more difficult to guess file names.

The plugin works on all upload file types and all sizes of a given image get the same prefix.

== Installation ==

1. Upload plugin folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0 =
* Initial Version