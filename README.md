# Introduction

[![Build Status](https://travis-ci.org/cweagans/theforce.svg?branch=master)](https://travis-ci.org/cweagans/theforce)
[![Gratipay](https://img.shields.io/gratipay/cweagans.svg)](https://gratipay.com/cweagans/)

The Force is an autocompletion tool for PHP. It sort of works right now, and it's
not very fast. It's more of a work in progress.

Eventually, I hope to get The Force to the point of feature parity with 
[Jedi](https://github.com/davidhalter/jedi), the autocompletion library for Python.

I'll also be integrating this library with [ycmd](https://github.com/Valloric/ycmd)
when it gets to the point of usefulness.

# Architecture

The Force is essentially a socket server that can be directed by JSON commands
from a code editor. It behaves very similarly to [Omnisharp](http://www.omnisharp.net)
in that regard.

Code editors should be responsible for starting and stopping the server, as well
as sending commands to it. Pretty much all of the command handling is built in
the [Dispatcher](https://github.com/cweagans/theforce/master/src/Dispatcher.php)
component, and it's all pretty straightforward.

# Configuration

If you have a project with more than one directory where you want the parser to
discover PHP files, or you want to use a custom filemask to tell the parser what
is PHP and what isn't, you'll need to create a config file. These config files
are very straightforward, and can look something like this:

    paths[] = /Users/cweagans/Documents/Code/drupal
    paths[] = /Users/cweagans/Documents/Code/my-other-directory
    mask = "/^.+\.(php|inc|module|install)$/i"

The default behavior is to look for anything ending in .php. The regex above
should be appropriate for most Drupal installations, though some tweaking may be
necessary for your specific project. Note that if you have spaces or any weird
characters in your paths, you may need to wrap them in double quotes.

# Contributing

Pull requests, questions, comments, or suggestions are all very welcome. I want
this library to be as awesome as possible, and your help could make it happen.

In particular, if you're a Python developer, I'd love some help on integration
with YCMD.

Note that while the goal of this project is to provide fantastic PHP autocomplete
functionality, I'm not at all interested in supporting plugins for individual
editors. If you want code completion, you should integrate with YCMD instead, as
that's the end-goal for this library as well.

# Similar Projects

[PHPCodeIntel](https://github.com/deweller/PHPCodeIntel) works in a pretty similar
manner to this project. Unfortunately, there were a lot of design decisions in
that project that I'm not a fan of, so I'm building the tool that I want.

# Known issues

* **Indexer performance**: For large projects, the indexer is **slow**. One approach
  to solving this may be to use pthreads if the extension is available, but my first
  priority is to actually get the library working. At that point, we can start thinking
  about performance improvements.
* **Notices, warnings, and general lack of error checking**: Like I said, this is a
  work in progress. General hardening of the library will happen eventually.
* **Complete lack of tests**: I know, I know. Should have written them first.
* **Builtin symbols are ignored**: PHP ships with a ton of built-in symbols that
  this library doesn't currently know about. In the final 1.0.0 release, I'd like
  to ship with a couple of files that have function stubs and detailed docblocks
  for every built in PHP function and class (and their methods/properties). It
  shouldn't be too difficult to extract this information from the PHP docs. When
  that PHP file is generated, it should be as simple as always including it in
  the symbol table.

# Roadmap

These are the things I want to do, roughly in order of when I'm going to do them:

* Ensure that all variables in the AST produced by the PHP Parser have info about
  the variable type.
* Add scope-aware variable indexing
* Start integration with YCMD
* Add basic go-to-definition support
* Add command to re-parse a file (editors will use this when a file is saved)
* Add function autocompletion
* Add class name autocompletion
* Add class method autocompletion
* Make class method autocompletion context aware
  * Outside callers should only be able to access public properties/methods
  * Subclasses should be able to access private/protected properties/methods

# FAQ

* Q. Does it work right now?<br />
  A. Kind of. Code indexing mostly works, but you can't do anything useful with the data yet.

* Q. Why did you call it "The Force"?<br />
  A. Python has Jedi. PHP has "The Force". Also, you can answer "What do you use for
   code completion?" with "The Force".

* Q. When will it be complete?<br />
  A. When it's done.

* Q. How can I help?<br />
  A. See the "Contributing" section of this readme. If you need an idea for something
     to work on, see the "Known issues" section.
