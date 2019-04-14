<?php
require_once 'db.connect.php';
class crud_application
{
    public function call_value($str_query)
    {
        $usr = new db();
        $link = $usr->db_connect();
        $call_query = mysqli_query($link, $str_query);
        if ($call_query) 
        {
            $return = mysqli_fetch_array($link, $str_query);
        } 
        else 
        {
            echo 'Sorry, error to execute query on database';
        }
        return $return;
    }

    public function delete_insert_update($str_query)
    {
        $usr = new db();
        $link = $usr->db_connect();
        $call_query = mysqli_query($link, $str_query);
        if ($call_query) 
        {
            $return = true;
        } 
        else 
        {
            $return = false;
            echo 'Sorry, error to execute query on database';
        }
        return $return;
    }
}
