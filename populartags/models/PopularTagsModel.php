<?php
namespace Craft;

class PopularTagsModel extends BaseModel
{
    /**
     * Queries Database to get most popular tags
     *
     * @param int $count
     * @return array
     */
    public function taglist($count)
    {
        /** @var DbCommand $query */
        $query = craft()->db->createCommand();

        $query->select('COUNT(*) as count, {{relations}}.targetId, {{elements_i18n}}.slug, title')
            ->from('relations')
            ->join('tags', '{{relations}}.targetId={{tags}}.id')
            ->join('content', '{{content}}.elementId={{tags}}.id')
            ->join('elements_i18n', '{{elements_i18n}}.elementId={{tags}}.id')
            ->group('{{relations}}.targetId')
            ->setOrder('count DESC, title ASC');
        $query->limit($count);
        return $query->queryAll();
    }
}
