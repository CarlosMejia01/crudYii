<?php

class Users extends CActiveRecord {

    public static function model($model=__CLASS__) {
        return parent::model($model);
    }

    public function tableName() {
        return "tbl_user";
    }
}



?>