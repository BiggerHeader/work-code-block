<?php
/**
 * Created by PhpStorm.
 * User: 140439
 * Date: 2018/3/1
 * Time: 10:24
 */

/**
 * 生成access_token和token_time
 *
 * @return $token_arr  array  包含access_token和token_time的数组
 */
function generate_access_token($nonce)
{
    /* $str = md5(uniqid(md5(microtime(true)),true));  //生成一个不会重复的字符串
     $str = sha1($str);  //加密*/

    $access_token = sha1(microtime() . mt_rand(100000, 999999));
    $token_time = time() + 3600 * 2; // 两小时过期

    return $token_arr = array(
        'access_token' => $access_token,
        'token_time' => $token_time,
    );
}