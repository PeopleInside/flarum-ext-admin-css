# Admin Custom CSS for Flarum

[![Flarum 2.x](https://img.shields.io/badge/Flarum-2.x-blue)](https://flarum.org)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/PeopleInside/flarum-ext-admin-css/blob/main/LICENSE)
[![Packagist](https://img.shields.io/badge/Packagist-peopleinside%2Fflarum--ext--admin--css-orange)](https://packagist.org/packages/peopleinside/flarum-ext-admin-css)

A lightweight extension for Flarum that allows administrators to inject custom CSS directly into the backend administration panel via a dedicated settings field, without modifying core files or themes.

A lightweight extension for Flarum that allows administrators to inject custom CSS directly into the backend administration panel via a dedicated settings field, without modifying core files or themes.

## How it works

1. The administrator enters custom CSS rules in the extension's settings textarea.
2. The settings are saved securely in the Flarum database.
3. On every admin page load, the extension retrieves the CSS, rigorously sanitizes it server-side, and injects it safely into the `<head>` of the admin document.
4. The custom styles are applied immediately to the admin interface, isolated from the public-facing forum.

## Features

- 🎨 **Direct Admin Styling** – Customize the Flarum backend appearance easily.
- 🔒 **Server-side Sanitization** – Built-in protection against XSS, `<script>` injection, and `</style>` tag breakouts.
- 🛡️ **Scoped Injection** – CSS is applied *only* to the admin panel, leaving the public forum untouched.
- ⚡ **Zero Compilation for Users** – Pre-compiled frontend assets are included; no Node.js or build step required for end users.
- 🔍 **Flarum 2.x Search Compatible** – Settings are automatically indexed in the admin dashboard search bar.

## Requirements

| Dependency | Version |
|------------|---------|
| PHP        | ≥ 8.3   |
| Flarum     | ^2.0.0-rc.6 |

## Disclaimer

This software is provided **"AS IS"**, without any warranty. While it has been tested and reasonable efforts are made to ensure security and reliability, no guarantees are provided. As an open project, anyone may contribute or report issues, but this does not imply endorsement or liability from the maintainers.

**You use this software entirely at your own risk.** The authors and contributors are not liable for any damages, data loss, or unexpected behavior resulting from its use, modification, or distribution. Always review and test the code independently before deploying it in critical or production environments.

## Installation

```bash
composer require peopleinside/flarum-ext-admin-css
