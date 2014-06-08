<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('key_model', 'key');
    }

    public function index()
    {
        

        $data['decent1'] = $this->key->generate(10, 'alphanum');
        $data['decent2'] = $this->key->generate(10, 'alphanum');
        $data['decent3'] = $this->key->generate(10, 'alphanum');

        $data['strong1'] = $this->key->generate(15, 'chars');
        $data['strong2'] = $this->key->generate(15, 'chars');
        $data['strong3'] = $this->key->generate(15, 'chars');

        $data['ftknox1'] = $this->key->generate(30, 'chars');
        $data['ftknox2'] = $this->key->generate(30, 'chars');
        $data['ftknox3'] = $this->key->generate(30, 'chars');

        $data['ci_key1'] = $this->key->generate(33, 'alphanum');
        $data['ci_key2'] = $this->key->generate(33, 'alphanum');
        $data['ci_key3'] = $this->key->generate(33, 'alphanum');
        
        $data['wpa_160'] = $this->key->generate(33, 'chars');

        $data['wpa_504'] = $this->key->generate(63, 'chars');

        $data['wep_641'] = $this->key->generate(5, 'alphanum', 'strtoupper');
        $data['wep_642'] = $this->key->generate(5, 'alphanum', 'strtoupper');
        $data['wep_643'] = $this->key->generate(5, 'alphanum', 'strtoupper');

        $data['wep_1281'] = $this->key->generate(13, 'alphanum', 'strtoupper');
        $data['wep_1282'] = $this->key->generate(13, 'alphanum', 'strtoupper');
        $data['wep_1283'] = $this->key->generate(13, 'alphanum', 'strtoupper');

 
        $data['wep_1521'] = $this->key->generate(16, 'alphanum', 'strtoupper');
        $data['wep_1522'] = $this->key->generate(16, 'alphanum', 'strtoupper');
        $data['wep_1523'] = $this->key->generate(16, 'alphanum', 'strtoupper');

        $data['wep_2561'] = $this->key->generate(29, 'alphanum', 'strtoupper');
        $data['wep_2562'] = $this->key->generate(29, 'alphanum', 'strtoupper');
        $data['wep_2563'] = $this->key->generate(29, 'alphanum', 'strtoupper');


        $this->load->view('keys', $data);
    }

    public function decent()
    {
        echo $this->key->generate(10, 'alphanum');
    }

    public function strong()
    {
        echo $this->key->generate(15, 'chars');
    }

    public function ftknox()
    {
        echo $this->key->generate(30, 'chars');
    }

    public function ci()
    {
        echo $this->key->generate(33, 'alphanum');
    }

    public function wpa160()
    {
        echo $this->key->generate(33, 'chars');
    }

    public function wpa504()
    {
        echo $this->key->generate(63, 'chars');
    }

    public function wep64()
    {
        echo $this->key->generate(5, 'alphanum', 'strtoupper');
    }

    public function wep128()
    {
        echo $this->key->generate(13, 'alphanum', 'strtoupper');
    }

    public function wep152()
    {
        echo $this->key->generate(16, 'alphanum', 'strtoupper');
    }    

    public function wep256()
    {
        echo $this->key->generate(29, 'alphanum', 'strtoupper');
    }    
}

/* End of file app.php */
/* Location: ./application/controllers/app.php */