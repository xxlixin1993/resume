<?php
namespace Admin\Model;
use Think\Model;
class PhotoModel extends Model {
    private $field=array(
        'id',
        'pname',
        'ptitle',
        'pinfo',
        'classes',
        '_pk'=>'id',
        '_authinc'=>true
    );
}