<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function index()
	{
		$this->load->model('post');
    $data['posts']=$this->post->get_posts();
		//echo "<pre>";print_r($data['posts']);echo "</pre>";
		$this->load->view('post_index',array('posts'=>$data['posts']));
	}
}
