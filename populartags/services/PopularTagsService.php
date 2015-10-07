<?php
namespace Craft;

class PopularTagsService extends BaseApplicationComponent
{

    /**
     * Return Popular Tags as an array
     *
     * @param $count
     * @return array
     */
    public function taglist($count)
    {
        $tagListModel = new PopularTagsModel();
        return $tagListModel->taglist($count);
    }
}
