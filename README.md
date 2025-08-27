# Hyperf Dumper

A lightweight wrapper around [symfony/var-dumper](https://symfony.com/doc/current/components/var_dumper.html) for the [Hyperf](https://github.com/hyperf/hyperf) framework, offering a Laravel-style [dump()](https://laravel.com/docs/12.x/helpers#method-dump) function within Hyperf.

The package provides convenient global `hd()` and `dump()` functions — mirroring Laravel’s `dump()` — for debugging variables seamlessly in both HTTP and CLI environments.

## 🧩 Install

```sh
composer require harryqt/hyperf-dumper
```

## 🚀 Usage

### In Controllers / HTTP context:

This will dump variables as a pretty HTML response.

```sh
return hd($var1, $var2, $var3);
```

### In CLI scripts:

This will dump variables in the terminal.

```sh
dump($var1, $var2, $var3);
```
