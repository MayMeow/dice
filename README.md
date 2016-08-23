# Dice

Very simple dice roller

## Installation

Download this repository to your source code

## Usage

Create new dice

```php
$dice = new Dice();
```

To roll dice use, following script throw 1 times with standard (cube dice) dice.

```php
$dice->roll();
```

If you want throw more with another dice or you want throw more times use

```php
// throw 3 times with stanard cube Dice
$dice->roll('3x6');

// throw 5 times with non standar dice
$dice->roll('5x20');
```

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## History

TODO: Write history

## Credits

[Charlotta Jung - asunay](https://github.com/asunay)

## License

MIT
