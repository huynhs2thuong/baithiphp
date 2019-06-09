<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Googlelogin extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('user_model');
	require_once APPPATH.'third_party/src/Google_Client.php';
	require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';
}
	
	public function index()
	{
		$this->load->view('login_view');
	}
	
	public function login()
	{
	
		$clientId = '770715063299-8k55igpo8qervn3bgfh7f52s4ave0k1s.apps.googleusercontent.com'; //Google client ID
		$clientSecret = '9nBfet3kk6KcpZTISYfHg51L'; //Google client secret
		$redirectURL = base_url() .'googlelogin/login';
		
		//https://curl.haxx.se/docs/caextract.html
		
		//Call Google API
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		
		if(isset($_GET['code']))
		{
			$gClient->authenticate($_GET['code']);
			$_SESSION['token'] = $gClient->getAccessToken();
			header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
		}

		if (isset($_SESSION['token'])) 
		{
			$gClient->setAccessToken($_SESSION['token']);
		}
		
		if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
			/*echo "<pre>";
			print_r($userProfile);
			die;*/
			$data = array(
                 'email'    => $userProfile['email'],
                 'name'     => $userProfile['name'],
                 'password' => '123456'
			);
			if($this->user_model->create($data))
                {
                	 $from_email = "thuongs2love@gmail.com"; //Email khi khách hàng nhận mail và bấm reply -> sẽ gửi tới dchi này
        $to_email = /*$this->session->userdata('user_email')*/ $data['email'];

        $subject = 'Bạn đã đăng kí thành công';
      	$bodyCart ="chúc mừng {$data1['name']} đã đăng kí gmail thành công mật khẩu mặc định của bạn là 123456 ";
        $body   = $bodyCart;
           
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        //$config['smtp_host'] = 'tls://smtp.googlemail.com';
        $config['smtp_user'] = 'thuongs2love@gmail.com';
        $config['smtp_pass'] = '10062018'; 
        $config['smtp_port'] = 465;
        //$config['smtp_port'] = 579;
        $config['mailtype']  = 'html';
        $config['starttls']  = true;
        $config['newline']   = "\r\n";

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from($from_email, 'Pham Hieu Dong A');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($body);
      
        //Send mail
        if($this->email->send())
        {
            $this->session->set_flashdata("email_sent","Successfully.");

        }
        else{
            $this->session->set_flashdata("email_sent","You have encountered an error");
             ob_start();
              $this->email->print_debugger();
              $error = ob_end_clean();
              $errors[] = $error;
             // print_r($errors);

        }
        //hiển thị ra view
      
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Đăng ký thành viên thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
             $user = $this->_get_user_info();
                //gắn session id của thành viên đã đăng nhập
                $this->session->set_userdata('user_id_login', $user->id);
                
                $this->session->set_flashdata('message', 'Đăng nhập thành công');
                redirect();
            /* $user_id = $this->session->userdata('user_id_login');
       		 $user = $this->user_model->get_info($user_id);*/
        /*if(!$user)
        {
            redirect();
        }
    
        $this->data['user']  = $user;
        */
          $this->data['temp'] = 'site/user/index';
        $this->load->view('site/layout', $this->data);

        } 
		else 
		{
            $url = $gClient->createAuthUrl();
		    header("Location: $url");
            exit;
        }
	}
	private function _get_user_info()
    {
        $email = $userProfile['email'];
                 
        $name = $userProfile['name'];
       /* $password = md5($password);*/
        
        $where = array('email' => $email , 'name' => $name);
        $user = $this->user_model->get_info_rule($where);
        return $user;
    }	
}
