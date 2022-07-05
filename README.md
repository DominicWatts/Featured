# Magento 2 Featured Products Page and Widget ##

[![M2 Coding Standard](https://github.com/DominicWatts/Featured/actions/workflows/phpcs.yml/badge.svg)](https://github.com/DominicWatts/Featured/actions/workflows/phpcs.yml)

[![M2 PHPStan](https://github.com/DominicWatts/Featured/actions/workflows/phpstan.yml/badge.svg)](https://github.com/DominicWatts/Featured/actions/workflows/phpstan.yml)

[![PHP Compatibility](https://github.com/DominicWatts/Featured/actions/workflows/phpcompatibility.yml/badge.svg)](https://github.com/DominicWatts/Featured/actions/workflows/phpcompatibility.yml)

[![php-cs-fixer](https://github.com/DominicWatts/Featured/actions/workflows/phpcsfixer.yml/badge.svg)](https://github.com/DominicWatts/Featured/actions/workflows/phpcsfixer.yml)

Frontend controller to display featured products with layered navigation.

For products to display they must be on set as featured yes under the selected store scope.  Plus any additional rules that would apply to a product collection on your store such as visibility or stock.

The widget needs to be configured from the admin

## Attribute configuration ## 

![Attribute Screenshot](https://i.snag.gy/9cZiy0.jpg)

## Landing page ##

![Landing page screenshot](https://i.snag.gy/zVZ0n4.jpg)

## Widget Configuration ##

![Widget Config](https://i.snag.gy/wvdsfK.jpg)

## Widget Screenshot ##

![Widget screenshot](https://i.snag.gy/bzyjxg.jpg)

# Install instructions #

`composer require dominicwatts/featured`

`php bin/magento setup:upgrade`

`php bin/magento setup:di:compile`

# Usage instructions #

Set featured attribute to yes on products

Go to `/featured`

Configure widget in backend

