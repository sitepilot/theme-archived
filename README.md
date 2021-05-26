# Starter Theme

WordPress starter (child) theme with a modern development workflow.

## Features

* Compile theme assets using [Laravel Mix](https://laravel-mix.com).
* Out of the box support for [TailwindCSS](https://tailwindcss.com/).
* A clean starting point for theme styles using [PostCSS](https://postcss.org/).
* Deploy theme with a GitHub [action](.github/workflows/deploy.yml).

## Requirements

Make sure all dependencies have been installed before moving on:

- [WordPress](https://wordpress.org/) >= 5.4
- [PHP](https://secure.php.net/manual/en/install.php) >= 7.3.0
- [Composer](https://getcomposer.org/download/) >= 2.0.0
- [Node.js](http://nodejs.org/) >= 14.16.0
- [NPM](https://www.npmjs.com/) >= 6.14.0

## Installation

Install this theme using Composer from your WordPress themes directory (replace `theme-name` below with the name of your theme):

```bash
composer create-project sitepilot/theme <theme-name>
```

Optional: replace `template: astra` in `style.css` with another theme or remove it completely to start from scratch.
