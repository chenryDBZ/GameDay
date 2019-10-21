<?php


namespace App;


class Game
{
    protected $data = array();

    public function __construct($import)
    {
        $this->data = json_decode($import, true);
    }

    public function getData()
    {
        return $this->data;
    }

    public function build_list($array)
    {
        $list = '<ol>';
        foreach ($array as $key => $value) {
            foreach ($value as $key => $index) {
                if (is_array($index)) {
                    $list .= self::build_list($index);
                } else {
                    $list .= "<li>$index</li>";
                }
            }
        }
        $list .= '</ol>';
        return $list;
    }

    public function get_List()
    {
        return $this->build_list($this->data);
    }

}