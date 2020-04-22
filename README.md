# Google Tag Manager extension for Magento 2

## Description

Whit this module you can insert the Google Tag Manager code in your magento site.
In the admin sections, `WS EXtensions -> Google Tag Manager` you can
* Enable/Disable the module
* Inser the Header code
* Insert the Body code

## Setup

You can install this module via Composer or a manual setup.
To install it with composer you can insert this rows in your magento's composer.json
```
"require": {
	"ws/tagmanager": "1.0.*"
    },
```
```
"repositories": {
	"m2_warehouse":{
            "type": "git",
            "url": "git@github.com:wallaceer/m2_tagmanager.git"
        }
    }
```
  
After edited composer.json 
- launch composer update
- verify the module status with `bin/magento module:status | grep Ws_Tagmanager`
- enable the module, if necessary, with `bin/magento module:enable Ws_Tagmanager`
- run bin/magento setup:upgrade
    
For a manual installation:
* copy the module in your magento `app/code`
* run `bin/magento setup:upgrade`
* verify the module status with `bin/magento module:status | grep Ws_Tagmanager`


In every case remember to launch the command `bin/magento setup:upgrade` for cleaning the cache

## Note
This module was developed with Magento 2.3.4 CE   