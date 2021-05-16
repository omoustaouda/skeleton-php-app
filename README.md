[![Build Status](https://travis-ci.com/omoustaouda/skeleton-php-app-base.svg?branch=main)](https://travis-ci.com/omoustaouda/skeleton-php-app-base)
[![Test Coverage](https://api.codeclimate.com/v1/badges/9397880447ea4a163aa2/test_coverage)](https://codeclimate.com/github/omoustaouda/skeleton-php-app-base/test_coverage)
[![Maintainability](https://api.codeclimate.com/v1/badges/9397880447ea4a163aa2/maintainability)](https://codeclimate.com/github/omoustaouda/skeleton-php-app-base/maintainability)


# Base PHP app template

This repo provides a skeleton for a minimal PHP app.

What is provided is:
 - **filesystem**: src, testing directories and structure
 - **container**: PHP-DI is installed and configured (see `src/container.php`)
 - **testing framework**: PHPUnit is ready to be used (tests can be run via `$ make tests`)
 - **docker-compose.yml**: PHP 8 Alpine image is used
- **logger**: Monolog is being used

What is NOT included is:
 - HTTP router
 - ORM or DB library

In order to keep the skeleton as minimal and flexible as possible, no specific framework (i.e. Lumen, Slim, Symfony, ...) is being used.
The components present have been installed and configured ad-hoc.

### First run
```bash
$ make composer-install
$ make tests
```

### License
AGPLv3 with "Commons Clause" License Condition v1.0. See [./LICENSE](LICENSE)
