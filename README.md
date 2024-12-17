# Let's Teach Application

This is a basic BigCommerce app with two screens, a catalog summary view and list of orders that can be cancelled, built using Laravel and React. 

It's meant to fast track your ability to take a concept for an app to something usable within the BigCommerce control panel. A live store can install this app while it runs locally.

A walkthrough going over the steps taken to produce this app, along with the steps required to create the app in BigCommerce, can be read [here](https://medium.com/p/711ceceb5006).

## Prerequisites & Installation

Before jumping in, you'll want to make sure you have the system requirements met:
- PHP ([Installation Guide](https://www.php.net/manual/en/install.php))
- Composer ([Installation Guide](https://getcomposer.org/doc/00-intro.md)) 
- Laravel ([Installation Guide](https://laravel.com/docs/10.x))

To ease PHP development and enable the app you develop to be easily shared, you’ll want to use either Valet or Homestead, depending on your OS:

- Local SSL Cert (Recommend Valet or Homestead to ease set up)
  - Mac OS: Valet ([Installation Guide](https://laravel.com/docs/10.x/valet))
  - Windows / Linux: Homestead ([Installation Guide](https://laravel.com/docs/10.x/homestead))

We’ll be using Valet for some of the steps below, but the functionality to host and share sites is similar across both Valet and Homestead. What’s more important in this tutorial is how to configure Laravel to use React and connect with BigCommerce.

To install PHP dependancies:

```bash
composer install
```
And JS dependancies:
```bash
npm install
```
