<?php

class KeyController extends Controller 
{

    public function __construct()
    {
        $this->random = new \chriskacerguis\Randomstring\Randomstring();
    }

    public function all()
    {
        $data['decent'][0]  = $this->random->generate(10);
        $data['decent'][1]  = $this->random->generate(10);
        $data['decent'][2]  = $this->random->generate(10);

        $data['strong'][0]  = $this->random->generate(15, true);
        $data['strong'][1]  = $this->random->generate(15, true);
        $data['strong'][2]  = $this->random->generate(15, true);

        $data['ftknox'][0]  = $this->random->generate(30, true);
        $data['ftknox'][1]  = $this->random->generate(30, true);
        $data['ftknox'][2]  = $this->random->generate(30, true);

        $data['ci'][0]      = $this->random->generate(33);
        $data['ci'][1]      = $this->random->generate(33);
        $data['ci'][2]      = $this->random->generate(33);
        
        $data['wpa_160'][0] = $this->random->generate(33, true);

        $data['wpa_504'][0] = $this->random->generate(63, true);

        $data['wep_64'][0]  = $this->random->generate(5, false, 'strtoupper');
        $data['wep_64'][1]  = $this->random->generate(5, false, 'strtoupper');
        $data['wep_64'][2]  = $this->random->generate(5, false, 'strtoupper');

        $data['wep_128'][0] = $this->random->generate(13, false, 'strtoupper');
        $data['wep_128'][1] = $this->random->generate(13, false, 'strtoupper');
        $data['wep_128'][2] = $this->random->generate(13, false, 'strtoupper');

        $data['wep_152'][0] = $this->random->generate(16, false, 'strtoupper');
        $data['wep_152'][1] = $this->random->generate(16, false, 'strtoupper');
        $data['wep_152'][2] = $this->random->generate(16, false, 'strtoupper');

        $data['wep_256'][0] = $this->random->generate(29, false, 'strtoupper');
        $data['wep_256'][1] = $this->random->generate(29, false, 'strtoupper');
        $data['wep_256'][2] = $this->random->generate(29, false, 'strtoupper');

        $data['ip_address'] = Request::server('REMOTE_ADDR');

        // Change everything to be base64_encoded
        array_walk_recursive($data, function(&$value, $key){
            $value = base64_encode($value);
        });

        return View::make('layout', $data);
    }

    public function decent()
    {
        $data['key'] = $this->random->generate(10);
        return View::make('single', $data);
    }

    public function strong()
    {
        $data['key'] = $this->random->generate(15, true);
        return View::make('single', $data);
    }

    public function ftknox()
    {
        $data['key'] = $this->random->generate(30, true);
        return View::make('single', $data);
    }

    public function ci()
    {
        $data['key'] = $this->random->generate(33);
        return View::make('single', $data);
    }

    public function wpa160()
    {
        $data['key'] = $this->random->generate(33, true);
        return View::make('single', $data);
    }

    public function wpa504()
    {
        $data['key'] = $this->random->generate(63, true);
        return View::make('single', $data);
    }

    public function wep64()
    {
        $data['key'] = $this->random->generate(5, false, 'strtoupper');
        return View::make('single', $data);
    }

    public function wep128()
    {
        $data['key'] = $this->random->generate(13, false, 'strtoupper');
        return View::make('single', $data);
    }

    public function wep152()
    {
        $data['key'] = $this->random->generate(16, false, 'strtoupper');
        return View::make('single', $data);
    }

    public function wep256()
    {
        $data['key'] = $this->random->generate(29, false, 'strtoupper');
        return View::make('single', $data);
    }

    public function ip_address()
    {
        $data['key'] = Request::server('REMOTE_ADDR');
        return View::make('single', $data);
    }

}
