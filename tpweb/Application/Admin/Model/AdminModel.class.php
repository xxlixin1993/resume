<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model {
    private $field=array(
        'username',
        'id',
        'password',
        '_pk'=>'id',
        '_authinc'=>true
    );
}