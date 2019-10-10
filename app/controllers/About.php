<?php  

class About extends Controller{
	public function index($name = 'Tang', $occuption = 'Student', $age = 22)
	{
		$data['name'] = $name;
		$data['occuption'] = $occuption;
		$data['age'] = $age;
		$data['jadul'] = 'About Me';
		$this->view('template/header',$data);
		$this->view('about/index', $data);
		$this->view('template/footer');
	}

	public function page()
	{
		$data['jadul'] = 'Pages';
		$this->view('template/header',$data);
		$this->view('about/page');
		$this->view('template/footer');
	}
}