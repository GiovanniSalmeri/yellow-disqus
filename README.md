<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Disqus 0.8.7
============
Show Disqus comments on blog.

<p align="center"><img src="disqus-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to show comments

[Disqus](https://disqus.com) is a comment service for websites. To use this extension open file `system/extensions/yellow-system.ini` and change `DisqusShortname: website`. You can find the name of your website in the Disqus dashboard. Comments are shown on blog pages. To show comments on other pages add a `[disqus]` shortcut to a page.

If you don't want that comments are shown on a page, set `Comment: exclude` in the [page settings](https://github.com/datenstrom/yellow-extensions/tree/master/source/core#settings-page) at the top of a page.

## Examples

Content file with comments:

    ---
    Title: Example page
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [disqus]

Layout file with comments:

    <?php $this->yellow->layout("header") ?>
    <div class="content">
    <div class="main" role="main">
    <h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $this->yellow->page->getContent() ?>
    <?php echo $this->yellow->page->getExtra("disqus") ?>
    </div>
    </div>
    <?php $this->yellow->layout("footer") ?>

Preventing that comments are shown:

    ---
    Title: Example page
    Comment: exclude
    ---
    This page does not show comments.

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`DisqusShortname` = your Disqus name  

## Installation

[Download extension](https://github.com/GiovanniSalmeri/yellow-disqus/archive/master.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Disqus](https://disqus.com). The service provider collects personal data and uses cookies.

## Developer

Giovanni Salmeri. [Get help](https://github.com/GiovanniSalmeri/yellow-disqus/issues).
