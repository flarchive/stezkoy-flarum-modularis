# Modularis

![Flarum](https://img.shields.io/badge/Flarum-%5E2.0-26A5E4)
![PHP](https://img.shields.io/badge/PHP-%5E8.3-777BB4)
![License](https://img.shields.io/badge/license-MIT-green)
[![Latest Stable Version](https://img.shields.io/packagist/v/stezkoy/flarum-modularis.svg)](https://packagist.org/packages/stezkoy/flarum-modularis)
[![Total Downloads](https://img.shields.io/packagist/dt/stezkoy/flarum-modularis.svg)](https://packagist.org/packages/stezkoy/flarum-modularis)

[Русская версия](README_RU.md)

Manage custom CSS styles for the forum and the admin panel: split styles into named blocks, enable/disable them individually and group them by area.

## Features

- Separate sections for Forum and Admin Panel styles
- Named styles with individual activation toggle
- Create, edit and delete styles
- Export and import styles (JSON)
- CSS validation against dangerous constructs (`@import`, `javascript:`, HTML tags, data URIs)
- Per-area caching of active styles for performance

![Preview](https://raw.githubusercontent.com/Stezkoy/flarum-modularis/main/img/prew.png)

## Installation

```bash
composer require stezkoy/flarum-modularis
php flarum migrate
php flarum cache:clear
```

## Requirements

- PHP ^8.3
- Flarum ^2.0

## License

MIT · [Stezkoy](https://github.com/Stezkoy)
