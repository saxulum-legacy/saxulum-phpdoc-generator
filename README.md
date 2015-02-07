# saxulum-phpdoc-generator

[![Build Status](https://api.travis-ci.org/saxulum/saxulum-phpdoc-generator.png?branch=master)](https://travis-ci.org/saxulum/saxulum-phpdoc-generator)
[![Total Downloads](https://poser.pugx.org/saxulum/saxulum-phpdoc-generator/downloads.png)](https://packagist.org/packages/saxulum/saxulum-phpdoc-generator)
[![Latest Stable Version](https://poser.pugx.org/saxulum/saxulum-phpdoc-generator/v/stable.png)](https://packagist.org/packages/saxulum/saxulum-phpdoc-generator)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/saxulum/saxulum-phpdoc-generator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/saxulum/saxulum-phpdoc-generator/?branch=master)

## Features

This library allow to generate phpdoc based on objects.

## Requirements

* php: >=5.3

## Installation

Through [Composer](http://getcomposer.org) as [saxulum/saxulum-phpdoc-generator][1].

## Usage

Watch the original [phpDocumentor documentation][2]

#### Code

```{.php}
$documentor = new Documentor(array(
    new ParamRow('string', 'name'),
    new ReturnRow('string'),
));
```

#### Output

```{.php}
/**
 * @param string $name
 * @return string
 */
```

[1]: https://packagist.org/packages/saxulum/saxulum-phpdoc-generator
[2]: http://www.phpdoc.org/docs/latest/index.html