# WordPress Starter Plugin

Contains no functionality related code

Contains utilities and configuration for utilities.

## Usage
 
If `{Plugin Name}` and `{plugin-slug}` are the name and slug of the plugin respectively,

 1. Clone this repository `git clone git@github.com:BaapWP/starter-plugin.git plugin-slug`
 1. Rename `plugin-slug.php` to `{plugin-slug}.php`.
 1. Find `PLUGIN_SLUG` and replace with `{PLUGIN_SLUG}` for constants
 1. Find `plugin-slug` and replace with `{plugin-slug}` for text-domain and such
 1. Find `Plugin Name` and replace with `{Plugin Name}` for plugin header and Readme.txt
 1. Start coding

## Utilities

### Deployment Scripts

#### create-package.sh

Usage `bash bin/create-package.sh`

Creates a zip file of the plugin without unnecessary config files and WP.org related assets. Use it for submitting your plugin's zip file to WordPress.org for submission or for a client to upload and install.

#### assets-deploy.sh

Usage `bash bin/assets-deploy.sh`

Deploys screenshots, banner & icons to WordPress.org svn repository. Use it to add or modify WP.org assets.

#### deploy.sh

Usage `bash bin/deploy.sh`

Releases a new version on GitHub and WP.org.

 * Checks if the plugin version in readme.txt and the Plugin Headers match.
 * Commits and tags a new version on GitHub.
 * Commits and tags a new version on WordPress.org.
 
 ## Gruntfile.js
 
  * **grunt-wp-readme-to-markdown** for converting WordPress.org's readme.txt into a usable Readme.md for Github.
  * **grunt-contrib-concat** for concating any atomic js files into one single file.
  * **grunt-contrib-uglify** for minifying js.
  
 ## package.json
 
 ## phpcs.xml.dist
 Custom PHPCodeSniffer Ruleset on top of `WordPress` standard to ignore unnecessary files and folders.
 
 ## readme.txt
 Dummy readme.txt with instructions
 
 ## WP.org assets
 Transparent placeholder images for icons, banners and screenshots.

`
