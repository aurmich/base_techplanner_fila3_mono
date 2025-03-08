#!/bin/sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
php -r "unlink('composer.lock');"
rm composer.lock
rm package-lock.json
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
#mv composer.json composer_$(date +"%Y-%m-%d").json
#php composer.phar init

php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs filament/filament
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs coolsam/modules
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs nwidart/laravel-modules
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs doctrine/dbal
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs livewire/livewire
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs livewire/volt
### SPATIE
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs filament/spatie-laravel-tags-plugin
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs filament/spatie-laravel-media-library-plugin
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs filament/spatie-laravel-translatable-plugin
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-cookie-consent
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-data
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-event-sourcing
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-permission
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-queueable-action
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-model-status
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-model-states
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-query-builder
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-activitylog
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-schemaless-attributes
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-feed
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/laravel-health
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/security-advisories-health-check
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/cpu-load-health-check
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/crawler
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/url
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/color
### USER 
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs jenssegers/agent
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs laravel/passport
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs socialiteproviders/auth0
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs tightenco/parental
### NOTIFY
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs kreait/firebase-php
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs laravel-notification-channels/telegram
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs laravel/slack-notification-channel
### MEDIA
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs pbmedia/laravel-ffmpeg
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs intervention/image
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spatie/image
### PROFILE 
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs tightenco/parental
### UI
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs mhmiton/laravel-modules-livewire
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs laravel/breeze
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs owenvoke/blade-fontawesome
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs laravel/folio
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs cknow/laravel-money
php artisan folio:install
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs livewire/volt
php artisan volt:install
#php -d memory_limit=-1 composer.phar require -W guava/filament-icon-picker
## IMPORT/EXPORT
#php -d memory_limit=-1 composer.phar require -W konnco/filament-import
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs spipu/html2pdf
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs maatwebsite/excel
####
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs thecodingmachine/safe
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs symfony/dom-crawler
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs flowframe/laravel-trend
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs staudenmeir/laravel-adjacency-list
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs fidum/laravel-eloquent-morph-to-one
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs calebporzio/sushi
php -d memory_limit=-1 composer.phar require -W --ignore-platform-reqs predis/predis

### DEV
php -d memory_limit=-1 composer.phar require -W --dev --ignore-platform-reqs barryvdh/laravel-debugbar
php -d memory_limit=-1 composer.phar require -W --dev --ignore-platform-reqs barryvdh/laravel-ide-helper
php -d memory_limit=-1 composer.phar require -W --dev --ignore-platform-reqs thecodingmachine/phpstan-safe-rule
php -d memory_limit=-1 composer.phar require -W --dev --ignore-platform-reqs larastan/larastan
php -d memory_limit=-1 composer.phar require -W --dev --ignore-platform-reqs laravel/pint
php -d memory_limit=-1 composer.phar require -W --dev --ignore-platform-reqs pestphp/pest
php -d memory_limit=-1 composer.phar require -W --dev --ignore-platform-reqs pestphp/pest-plugin-laravel

### REMOVE
php -d memory_limit=-1 composer.phar remove laravel/sanctum
rm config/sanctum.php 
=======
=======
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)

##############  ####################
php -d memory_limit=-1 composer.phar require -W illuminate/contracts

############################ DEV ###############################
php -d memory_limit=-1 composer.phar require -W --dev laravel/pint
php -d memory_limit=-1 composer.phar require -W --dev nunomaduro/collision
php -d memory_limit=-1 composer.phar require -W --dev larastan/larastan
php -d memory_limit=-1 composer.phar require -W --dev orchestra/testbench
php -d memory_limit=-1 composer.phar require -W --dev pestphp/pest
php -d memory_limit=-1 composer.phar require -W --dev pestphp/pest-plugin-arch
php -d memory_limit=-1 composer.phar require -W --dev pestphp/pest-plugin-laravel
php -d memory_limit=-1 composer.phar require -W --dev phpstan/extension-installer
php -d memory_limit=-1 composer.phar require -W --dev phpstan/phpstan-deprecation-rules
php -d memory_limit=-1 composer.phar require -W --dev phpstan/phpstan-phpunit
php -d memory_limit=-1 composer.phar require -W --dev spatie/laravel-ray
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f755e5bcec (Squashed 'laravel/Modules/Xot/' content from commit 5d7fb5a1)
=======
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
