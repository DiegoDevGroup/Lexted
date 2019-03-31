# DiegoDev Group Laravel Extended 

A collections of code we use at the DiegoDev Group on Laravel Projects. Anyone is welcome to use, but you do so under your own risk and with no support or guarantee.

## Traits
* __SetsUuidWhenCreating__ - This sets the primary key of the model to a UUID. It allows you to pass a UUID if 
you have a workflow that creates a UUID by default. If the UUID is version 4 compliant, then the trait will 
just us the UUID passed to it. We use this from time to time when records are created on a mobile device then
passed to a backend via an API. They may already have a UUID associated with it. 
* __SetsCreatedByWhenCreating__ - This traits add the Authenticated ID to a field called `created_by` in the model. 

## Helpers 
For now, this is mainly a fork of the `string` and `array` Helpers from Laravel 5.7. These helpers are being 
deprecated and I like them. I may add to them as time goes on and I come across some good ones. 
