# Disqus 0.8.8

Show Disqus comments on blog.

<p align="center"><img src="disqus-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/GiovanniSalmeri/yellow-disqus/archive/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to show comments

[Disqus](https://disqus.com) is a comment service for websites. To use this extension open file `system/extensions/yellow-system.ini` and change `DisqusShortname: website`. You can find the name of your website in the Disqus dashboard. Comments are shown on blog pages. To show comments on other pages add a `[disqus]` shortcut to a page.

If you don't want comments to be shown on a page, set `Comment: exclude` in the [page settings](https://github.com/annaesvensson/yellow-core#settings-page) at the top of a page.

You should know that the service provider collects personal data and uses cookies.

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

Preventing comments being shown:

    ---
    Title: Example page
    Comment: exclude
    ---
    This page does not show comments.

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

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`DisqusShortname` = your Disqus name  

## Acknowledgements

This extension uses [Disqus](https://disqus.com). Thank you for the free service.

## Developer

Giovanni Salmeri. [Get help](https://datenstrom.se/yellow/help/).
