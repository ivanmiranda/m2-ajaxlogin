# Ajax Login

Allows your customers access from a pop-up

# Use

Define that will be linked with to displayed pop access

![Slider Style 1](https://s17.postimg.org/oaqk3183z/ajaxlogin_config.png)

## Install

You have to add this repository to the list defined in composer.js Magento :

```
"repositories": [
    {
        "type": "composer",
        "url": "https://repo.magento.com/"
    },
    {
        "type": "git",
        "url": "git@icebrick.pengostores.mx:Magento2/ajaxlogin.git",
        "reference": "master"
    }
],
```
and require it

```
"require": {
    "magento/product-community-edition": "2.0.4",
    "composer/composer": "@alpha",
    "pengo/ajaxlogin": "dev-master"
},
```

Depending on whether it is a new or previous installation, run:

```
composer [install][update]
```
> 
NOTE : The container must have installed git and have linked certificates with a registered account


# To Do

- [ ] Include a customer registry by popup

--

**Happy coding!**
- [ivan miranda](http://ivanmiranda.me)