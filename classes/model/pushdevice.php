<?php

namespace MobilePush;

use Orm\Model;

class Model_PushDevice extends Model {


    protected static $_table_name = "push_device";
    protected static $_write_connection = 'master_db';
    protected static $_connection = 'slave_db';
    protected static $_primary_key = array('id');

    protected static $_properties = array(
        'id',
        'uid',
        'title',
        'content',
        'images',
        'comment_count',
        'rate_count',
        'createtime',
        'updatetime',
        'join_date',
        'start_date',
        'end_date',
        'max_user_count',
        'user_count',
        'ordering',
    );


}