<?php
Class Video extends MY_Controller
{
	 function __construct()
    {
        parent::__construct();
        //load model san pham
        $this->load->model('video_model');
    }
	function index()
	{
	    
	}
}