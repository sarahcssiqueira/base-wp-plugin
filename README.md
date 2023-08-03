# Base WP Plugin

[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/latest/active.svg)](https://www.repostatus.org/#active)
[![License: GPL v2](https://img.shields.io/badge/License-GPL_v2-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)
[![PluginTerritory](https://img.shields.io/badge/Plugin%20Territory-Free-blue.svg?logo=wordpress)]()
[![Release Version](https://img.shields.io/github/release/sarahcssiqueira/base-wp-plugin.svg?color)](https://github.com/sarahcssiqueira/base-wp-plugin/releases/latest)

Base WP Plugin is a **starter** WordPress plugin to use as a base to build WordPress plugins from scratch. Contains the configuration files for handling the assets files like Javascript, CSS, and images using [Webpack](https://webpack.js.org/) and uses [Composer](https://getcomposer.org/) to handle [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards) and classes autoload. Some topics covered in this project:

- [Webpack](https://webpack.js.org/) for managing, compiling, and optimizing the plugin's asset files;
- [ES6](https://babeljs.io/learn-es2015/) for JavaScript;
- [Eslint](https://eslint.org/);
- [Babel](https://babeljs.io/);
- [SASS](http://sass-lang.com/);
- [Stylelint](https://stylelint.io/);
- [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards);
- [PHP Namespaces](http://php.net/manual/pl/language.namespaces.php);
- [Autoload](https://www.php.net/manual/en/language.oop5.autoload.php);

# Usage

Clone the repository with `git clone https://github.com/sarahcssiqueira/base-wp-plugin` or download the latest [release](https://github.com/sarahcssiqueira/base-wp-plugin/releases). Place it in the **/wp-content/plugins/** folder of your WordPress installation.

## Install Setup Packages

- `npm install && composer install`

# Development

## Start Development Server

- `npm run dev`

## Run PHPCS

- `composer cs`
- `composer cbf`

# Build

To optimize and minify assets to the build folder with wepback run:

- `npm run build`
