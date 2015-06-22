<?php
namespace Admin\Model;
use Think\Model;
class BlogModel extends Model {
    private $field=array(
        'id',
        'title',
        'content',
        'short_info',
        'classifyid',
        '_pk'=>'id',
        '_authinc'=>true
    );
}