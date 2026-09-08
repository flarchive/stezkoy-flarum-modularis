# Modularis

![Flarum](https://img.shields.io/badge/Flarum-%5E2.0-26A5E4)
![PHP](https://img.shields.io/badge/PHP-%5E8.3-777BB4)
![License](https://img.shields.io/badge/license-MIT-green)
[![Latest Stable Version](https://img.shields.io/packagist/v/stezkoy/flarum-modularis.svg)](https://packagist.org/packages/stezkoy/flarum-modularis)
[![Total Downloads](https://img.shields.io/packagist/dt/stezkoy/flarum-modularis.svg)](https://packagist.org/packages/stezkoy/flarum-modularis)

[English version](README.md)

Менеджер пользовательских CSS-стилей для форума и админ-панели: разбивайте стили на именованные блоки, включайте/отключайте их по отдельности и группируйте по областям.

## Возможности

- Отдельные разделы для стилей Форума и Админ-панели
- Именованные стили с индивидуальным переключателем активации
- Создание, редактирование и удаление стилей
- Экспорт и импорт стилей (JSON)
- Валидация CSS против опасных конструкций (`@import`, `javascript:`, HTML-тегов, data URI)
- Кэширование активных стилей по областям для производительности

![Превью](https://raw.githubusercontent.com/Stezkoy/flarum-modularis/main/img/prew.png)

## Установка

```bash
composer require stezkoy/flarum-modularis
php flarum migrate
php flarum cache:clear
```

## Требования

- PHP ^8.3
- Flarum ^2.0

## Лицензия

MIT · [Stezkoy](https://github.com/Stezkoy)
