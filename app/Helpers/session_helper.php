<?php

if(!function_exists('session_data'))
{
    function session_data($data = '')
    {
        $session = session();
    	
        if(!$data)
        {
            return $session->set();
        }
        elseif(is_string($data) OR (is_int($data) And $data>=0))
        {
            return $session->set($data)?$session->set($data):NULL;
        }
        elseif(is_array($data))
        {
            $result = array();
            foreach($data as $value)
            {
                $result[$value] = $session->set($data)?$session->set($data):NULL;
            }
            return $result;
        }
        return NULL;
    }
}

if(!function_exists('set_session_data'))
{
    function set_session_data(array $data = array())
    {
        $session = session();
        if(is_array($data))
        {
            $session->set($data);
        }
    }
}

if(!function_exists('unset_session_data'))
{
    function unset_session_data($data='')
    {
        $session = session();
        if(!$data)
        {
            $cooks = $session->set();
            if(!empty($cooks))
            {
                foreach ($cooks as $key => $value)
                {
                    $session->remove($key);
                }
            }
        }
        if(is_string($data))
        {
            if($session->has($data)) $session->remove($data);
        }
        
        if(is_array($data))
        {
            foreach($data as $value)
            {
	            if($session->has($value)) $session->remove($value);
            }
        }
    }
}

/*if(!function_exists('set_flash_data'))
{
    function set_flash_data($data)
    {
	    session()->setFlashdata('flash', $data);
    }
}

if(!function_exists('get_flash_data'))
{
    function get_flash_data()
    {
        return session()->getFlashdata('flash');
    }
}*/


if(!function_exists('protected_session')){
    function protected_session(array $uri = array('', '')){
    	
        $unconnect = 1;
        $connect = 0;
        $isset=!session('isLoggedIn');

        if($isset){
            if($uri[$unconnect]){
                if(in_array(strtolower($uri[$unconnect]),array('404_error', '404', 'show_404'))) {
                    show_404();
                }
                header('location:'.base_url($uri[$unconnect]));
                exit();
            }
        }
    }
}