<?php
namespace Admin\Model;
use Think\Model;
class PersonModel extends Model {
    private $field=array(
        'id',
        'my_desc',
        'my_social',
        'short_info',
        '_pk'=>'id',
    );
}