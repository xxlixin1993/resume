<?php
namespace Admin\Model;
use Think\Model;
class ClassifyModel extends Model {
    private $field=array(
        'id',
        'value',
        '_pk'=>'id',
        '_authinc'=>true
    );
}