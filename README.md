Eloquent ORM for TYPO3 CMS
==========================

Because sometimes all you need is a query.

Go faster, I hate READMEs!
--------------------------

Cool story Bro. Read it or go away.

Installation
------------

Clone and composer install:

```
git clone https://github.com/cedricziel/typo3-eloquent.git typo3conf/ext/eloquent
cd typo3conf/ext/eloquent
composer install
```

Motivation
----------

Why did I create this?

I think the main motivation is a intrinsic motivation to make things easier. Easier for both experienced, as well as entry level developers. The persistence Layer in Extbase is a major performance buster. While controllers are cheap, the whole DataMapper pattern eats precious ms of your response time. - And what for? Domain Driven Design, they say.

Fact is that only a small percentage of all TYPO3 CMS developers really care about Domain Driven Design - especially when it comes to content elements. I dont think you should need to boot up the frameworks' persistence layer and create precious mapped Domain objects just for getting a row from your database.


Perspective
-----------

Simplicity also means less hurdles and still a need to care about when things become complex. In many cases you 'just want to query for something' and dont have to care about access restrictions and such. That's where this simple thing shines.

I hope to gradually grow it with more traits on the BaseModel first and foremost.

Booting Eloquent
----------------

Before you can use it, you need to initialize Eloquent ORM:

```
\CedricZiel\Eloquent\Utility\EloquentUtility::bootEloquent();
```

You may want to do this in an initialization Method such as `initializeIndexAction` to avoid overhead when you dont need it.

Usage
-----

Usage is simple. Inherit from `BaseModel` and set the `$table` field on the class to match the table.

```

// Retrieving All Records
$users = FeUser::all();

// Retrieving A Record By Primary Key
$user = FeUser::find(1);

// Retrieving A Model By Primary Key Or Throw An Exception

$model = FeUser::findOrFail(1);
$model = FeUser::where('votes', '>', 100)->firstOrFail();

```

See the Eloquent documentationfor more examples: http://laravel.com/docs/5.0/eloquent
