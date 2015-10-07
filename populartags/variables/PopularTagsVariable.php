<?php

namespace Craft;


class PopularTagsVariable
{

    /**
     * Usage: {% set tags = craft.popularTags.taglist(15) %}
     *
     * @param int $count
     * @return array
     */
    public function taglist($count = 10)
    {
        return craft()->popularTags->taglist($count);
    }
}
