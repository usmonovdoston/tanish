<?php
/**
 * Copyright (c) Doston Usmonov
 * Time: 02.12.19 21:26
 */

namespace app\widgets\helpers;


class Count
{
    public static function getCount($table,$condition = [])
    {
        $cond = ($condition)?self::condition($condition):'';
        $sql = "SELECT count(*) count
                FROM %s
                %s";
        $sql = sprintf($sql,$table,$cond);
        return \Yii::$app->db->createCommand($sql)->queryOne()['count'];
    }
    public static function getNastelCount(){
        $sql = "SELECT COUNT(bd.id) count FROM bichuv_doc bd LEFT JOIN bichuv_slice_items bsi ON bd.id = bsi.bichuv_doc_id LEFT JOIN size ON bsi.size_id = size.id WHERE (bsi.type=1) AND ((document_type=7) AND (bd.type=1) AND (bd.status < 2))";
        return \Yii::$app->db->createCommand($sql)->queryOne()['count'];
    }
    protected static function condition($condition)
    {
        if($condition){
            $sql = "WHERE ";
            $i = 0;
            $and = " AND";
            foreach ($condition as $key => $value){
                $and = ($i<count($condition)-1)?$and:'';
                $sql .= " ({$key} {$value})";
                $i++;
            }
            return $sql;
        }
    }
}