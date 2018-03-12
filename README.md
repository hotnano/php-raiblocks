# php-raiblocks

***WIP: Not recommended for production use***

A simple PHP RaiBlocks RPC Library.


## Install

Via Composer

``` bash
$ composer require hotnano/php-raiblocks
```

## Usage

``` php
$server = new HotNano\RaiBlocks\Server();
print json_encode($server->availableSupply()->run());
```

## Credits

- [Daniel Supernault](https://github.com/dansup)
- [Mr. Nano](https://github.com/hotnanocoin)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
