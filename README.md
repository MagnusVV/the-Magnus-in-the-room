![Lightsabercat](https://media.giphy.com/media/xBAreNGk5DapO/giphy.gif)

# My cats!

It's a simple little page with three clickable links, each leading to a page that builds a little differently depending on the link being clicked. Each of my cats have their own little facts page, and the third page is about them both. The pages contain short fact texts about the cats, as well as six randomised pictures per page. The image bank contains 12 pictures for each facts page, so the images shown will be slightly different every time you click one of the links (or update the page).

This is my very first project, built with PHP and some HTML and CSS.

https://magnusvargvinter.000webhostapp.com/index.php
# Installation

All six php-files used are placed in the root folder. Images used are in the "images" folder and its three subfolders.

# Code Review

Code review written by [Filip Jonasson](https://github.com/filjon2001).

1. `index.php:9-15` - Even if the <p>-tag is included, this is some kind of heading, so <article> could be replaced by <heading>. If not, you could put the <h2>-tag inside a <heading>-tag.
2. `index.php:9, 17 & header.php: 15 etc.` - Some classes are not used in CSS. I can't find either .main, .header, .header-section, .introduction, .cat-facts, .navigation or .footer-section. Instead you could just style the whole tag, as you've done in some cases, like header {}. If you want to specify what a tag does, write it in the comments instead (which you've done excellent throughout your code).
3. `index.php:27` - As written above, this is a class that's not been used in CSS. It's sad though when the class name is both funny and true. In this case, maybe you should consider to style it in CSS, as it's the core purpose of the website(?).
4. `index.php:13 & arrays.php:11, 13, 15, 22, 24, 26` - The text on these lines are pretty long. If you want to make it more readable you could turn on Word Wrap in VSCode by clicking View > Word Wrap. Then your text will break row automatically when it's "too" long.
5. `header.php:20` - If I have to remark on one last thing, you could have little bit more detailed alt-text to your logo. "Vargvinter-logo" doesn't say that much to a person using a screen reader.

# Testers

Tested by the following people:

1. Josef Forkman
2. Dan Fogelberg
