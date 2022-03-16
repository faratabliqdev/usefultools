<?php

namespace UsefulTools;


define('distance_url', "https://maps.googleapis.com/maps/api/distancematrix/json?key=".env('GOOGLE_MAP_API_KEY'));

class UsefulTools
{

    public static function send_json($result, $type, $data)
    {
        $json = [
            'result' => $result,
            'type' => $type,
            'data' => $data
        ];

            return $json;
    }

    /*public static function random_string($length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }*/
}
