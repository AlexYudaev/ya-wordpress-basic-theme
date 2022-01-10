YAWP Basic Theme 
===

Hi. this is basic template theme based on _s template (By Automatic) developed by Alexander Yudaev.
You can use it as main template or parent template.
Licensed under GPLv2 or later. :) Use it to make something cool.

### Requirements 
- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Installation and Quick Start

1. Clone or download this repository to you folder.
2. If you want change theme prefix from `yawp` you can search and replace to your name `megatherium-is-awesome`.

### Setup

```sh
$ composer install
$ npm install
```

### Available CLI commands

Template comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer fix:wpcs` : automatic fix for minor coding standards.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.


### Change Log
