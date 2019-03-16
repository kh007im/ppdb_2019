<?php

class Template
{
	protected $_ci;
	function __construct()
	{
		$this->_ci = &get_instance();
	}
	
	function home($template,$data=NULL)
	{
		$data['_content']=$this->_ci->load->view($template,$data,true);
		$data['_header']=$this->_ci->load->view('home/header',$data,true);
		$data['_top_menu']=$this->_ci->load->view('home/top_menu',$data,true);
		$data['_menu']=$this->_ci->load->view('home/menu',$data,true);
		$data['_menu2']=$this->_ci->load->view('home/menu2',$data,true);
		$data['_kontak']=$this->_ci->load->view('home/kontak',$data,true);
		$data['_footer']=$this->_ci->load->view('home/footer',$data,true);
		$this->_ci->load->view('home/home.php',$data);
	}
	
	function ppdb($content,$data=null)
	{
		$data['_content']=$this->_ci->load->view($content,$data,true);
		$data['_top_menu']=$this->_ci->load->view('ppdb/top_menu',$data,true);
		$this->_ci->load->view('ppdb/template_ppdb',$data);
	}
	
	function dashboard_user($content,$data=null)
	{
		$data['_content']=$this->_ci->load->view($content,$data,true);
		$data['_top_menu']=$this->_ci->load->view('ppdb/dashboard/top_menu',$data,true);
		$this->_ci->load->view('ppdb/dashboard/template',$data);
	}
	
	function admin($content,$data=null)
	{
		$data['_content']=$this->_ci->load->view($content,$data,true);
		$data['_top_menu']=$this->_ci->load->view('admin/top_menu',$data,true);
		$data['_sidebar']=$this->_ci->load->view('admin/sidebar',$data,true);
		$data['_beranda']=$this->_ci->load->view('admin/beranda',$data,true);
		$data['_home']=$this->_ci->load->view('admin/home',$data,true);
		$this->_ci->load->view('admin/template',$data);
	}
}