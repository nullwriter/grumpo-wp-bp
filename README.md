# grumpo-wp-bp

Boilerplate wp plugin following modern php best practices, includes Composer, GrumPHP, PHPCS with PSR-2 standard.

Based on the [Wordpress-Plugin-Boilerplate](https://github.com/devinvinson/WordPress-Plugin-Boilerplate/) plugin.

## Installation

1. Rename all "plugin name" to desired name
1. Upload plugin to the `/wp-content/plugins/` directory
1. `cd` into plugin directory and run `composer install`
1. Activate the plugin through the 'Plugins' menu in WordPress

## Information

Note that if you include your own classes, or third-party libraries, there are three locations in which said files may go:

- `plugin-name/includes` is where functionality shared between the admin area and the public-facing parts of the site reside
- `plugin-name/admin` is for all admin-specific functionality
- `plugin-name/public` is for all public-facing functionality

You can check some [example plugins here](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate/wiki/Example-Plugins) using the base boilerplate (same file structure).
