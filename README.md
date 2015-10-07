Popular Tags
============

Popular Tags is a simple Craft CMS plugin that allows you to show the most used tags on your site. 

Installation
------------
* Place enclosed `populartags` folder within your `craft/plugins` folder.
* Login to the Craft CMS admin panel and navigate to the "Plugins" page to install and enable the plugin.


Sample Usage
-------------
* Create a list of the most popular 15 tags with title, slug and usage count.

```twig
    {% set tags = craft.popularTags.taglist(15) %}
    <ul>
        {% for tag in tags %}
            <li>{{tag.title}} - {{tag.slug}}<span class="count">({{tag.count}})</span></li>
        {% endfor %}
    </ul>
```

To Dos
------
* Add parameter that allows user to specify relation for tags (e.g. related to Blog Posts) -- currently counts are based upon global usage.

Warranty/License
------
There's no warranty of any kind. If you find a bug, please tell me and I may try to fix it. It's provided completely as-is; if something breaks, you lose data, or something else bad happens, the author(s) and owner(s) of this plugin are in no way responsible.

This plugin is owned by Phil Birnie (http://philbirnie.com). You can modify it and use it for your own personal or commercial projects, but you can't redistribute it.
