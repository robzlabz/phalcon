<?php


namespace Eva\EvaBlog\Entities;


class Tags extends \Eva\EvaEngine\Model
{
    protected $tableName = 'blog_tags';

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var string
     */
    public $tagName;
     
    /**
     *
     * @var integer
     */
    public $parentId;
     
    /**
     *
     * @var integer
     */
    public $rootId;
     
    /**
     *
     * @var integer
     */
    public $sortOrder;
     
    /**
     *
     * @var integer
     */
    public $count;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'tagName' => 'tagName', 
            'parentId' => 'parentId', 
            'rootId' => 'rootId', 
            'sortOrder' => 'sortOrder', 
            'count' => 'count'
        );
    }

    public function initialize()
    {
        $this->hasManyToMany(
            'id',
            'Eva\EvaBlog\Entities\PostsTags',
            'tag_id',
            'post_id',
            'Eva\EvaBlog\Entities\Posts',
            'id',
            array('alias' => 'Posts')
        );

    }
}