<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Key_model extends CI_Model
{

    /**
     * __construct
     *
     * @author  Chris Kacerguis <ckacerguis@apple.com>
     * @return  void
     */ 
    public function __construct() 
    {
        parent::__construct();
    }

    public function generate($length, $set = 'chars', $function = false)
    {
        $alphanum   = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $chars      = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789``-=~!@#$%^&*()_+,./<>?;:[]{}\|';

        $str = '';
        $max = strlen(${$set}) - 1;

        for ($i=0; $i < $length; $i++)
        $str .= ${$set}[mt_rand(0, $max)];

        if ($function !== false) {
            $str = call_user_func($function, $str);
        }

        return base64_encode($str);

    }

}

/* End of file key_model.php */
/* Location: ./application/models/key_model.php.php */
