<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Post extends MY_Controller {



	function __construct() {

		parent::__construct();

		$this->load->database();

		$this->load->model('juggler/Postmodel');

    }

	

 	public function index()

    {

        $PostQry = $this->Postmodel->getPost();

        $this->load->view('juggler/post_list', ['PostQry'=>$PostQry]);



    }



    public function add(){

        $CatQry = $this->Postmodel->getCategory();

        $this->load->view('juggler/add_post',['CatQry'=>$CatQry]);



    }



	public function insert(){

	  $cat_slug = $this->input->post('cat_slug');

	 

	  // Slug Generator Start

	  $post_title = trim($this->input->post('post_title'));

      $post_url = $this->input->post('post_slug');

	  

	  if(empty($post_url)){

	  $post_url = $post_title;

	  }

	

    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($post_url)));   

    $selectQuery = $this->db->query("SELECT * FROM tbl_post WHERE post_slug LIKE '$slug%'");

	

	

    if($selectQuery->num_rows()>0){

		foreach($selectQuery->result() as $row){

			$data[] = $row->post_slug;

  		}

		 if(in_array($slug, $data)){

			$count = 0;

			while( in_array( ($slug . '-' . ++$count ), $data) );

			$slug = $slug . '-' . $count;

		 }

    }

	// Slug Generator End

	

	  $config['upload_path']   = './assets/images/post/';

      $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|GIF|PNG';

      $config['max_size']      = 2048;

      $this->load->library('upload', $config);

	  $this->upload->initialize($config);

	  $this->upload->do_upload('post_image');

	  $image = $this->upload->data();



		$data = array(

                'cat_slug' => $cat_slug,

                'post_title' => trim($this->input->post('post_title')),

                'post_sub_title' => trim($this->input->post('post_sub_title')),

				'post_slug' => $slug,

                'post_meta_title' => trim($this->input->post('post_meta_title')),

                'post_meta_keywords' => trim($this->input->post('post_meta_keywords')),

                'post_meta_description' => trim($this->input->post('post_meta_description')),

        		'post_short_description' => trim($this->input->post('post_short_description')),

        		'post_description' => trim($this->input->post('post_description')),

        		'post_date' => trim($this->input->post('post_date')),

        		'post_image' => $image['file_name'],

        		'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);



		$res = $this->db->insert('tbl_post', $data);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');

		}

		    redirect('juggler/post');

	}



	public function edit($post_id){

		$PostQry = $this->Postmodel->getPostByID($post_id);

	    $CatQry = $this->Postmodel->getCategory();

		$this->load->view('juggler/edit_post', ['PostQry'=>$PostQry,'CatQry'=>$CatQry]);

	}



	public function update(){

		$id = $this->input->post('id');

		$cat_slug = $this->input->post('cat_slug');

		

		// Slug Generator Start

		

        $PostQry = $this->Postmodel->getPostByID($id);

		

		$post_title = $this->input->post('post_title');

		

        $post_url = $this->input->post('post_slug');

		if(empty($post_url)){

			$post_url=$post_title;

		}

	

        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($post_url)));

   

        $selectQuery = $this->db->query("SELECT * FROM tbl_post WHERE post_slug LIKE '$slug%'");

	

	    if($PostQry->post_slug!=$slug){

	

        if($selectQuery->num_rows()>0){

		foreach($selectQuery->result() as $row){

			$data[] = $row->post_slug;

  		 }

		

		 if(in_array($slug, $data)){

			$count = 0;

			while( in_array( ($slug . '-' . ++$count ), $data) );

			$slug = $slug . '-' . $count;

		   }

       }

		}else{

		$slug = $slug;

		}

	  // Slug Generator End



	  $config['upload_path']   = './assets/images/post/';

      $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|GIF|PNG';

      $config['max_size']      = 2048;

      $this->load->library('upload', $config);

	  $this->upload->initialize($config);

	  $this->upload->do_upload('post_image');

	  $image = $this->upload->data();



		if($image['file_name']!==''){

		$data = array(

                'cat_slug' => $cat_slug,

                'post_title' => trim($this->input->post('post_title')),
                'post_sub_title' => trim($this->input->post('post_sub_title')),
				'post_slug' => $slug,

                'post_meta_title' => trim($this->input->post('post_meta_title')),

                'post_meta_keywords' => trim($this->input->post('post_meta_keywords')),

                'post_meta_description' => trim($this->input->post('post_meta_description')),

        		'post_short_description' => trim($this->input->post('post_short_description')),

        		'post_description' => trim($this->input->post('post_description')),

        		'post_date' => trim($this->input->post('post_date')),

        		'post_image' => $image['file_name'],

        		'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);

		}else{

		$data = array(

                'cat_slug' => $cat_slug,

                'post_title' => trim($this->input->post('post_title')),
                'post_sub_title' => trim($this->input->post('post_sub_title')),
				'post_slug' => $slug,

                'post_meta_title' => trim($this->input->post('post_meta_title')),

                'post_meta_keywords' => trim($this->input->post('post_meta_keywords')),

                'post_meta_description' => trim($this->input->post('post_meta_description')),

				'post_short_description' => trim($this->input->post('post_short_description')),

				'post_description' => trim($this->input->post('post_description')),

				'post_date' => trim($this->input->post('post_date')),

				'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);

		}



		$this->db->where('id', $id);

		$res = $this->db->update('tbl_post', $data);

		

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');

		}

		

		redirect('juggler/post');

	}

	

	

	

	public function delete($post_id){

		$res = $this->Postmodel->deletePostByID($post_id);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');

		}

		redirect('juggler/post');

			

	}

	

	

	/* Category Code Start Here */

	

	public function category()

    {

        $PageQry = $this->Postmodel->getCategory();

        $this->load->view('juggler/post_category', ['PageQry'=>$PageQry]);



    }



    public function add_category(){

        $this->load->view('juggler/add_post_category');



    }



	public function insert_category(){

	

	  // Slug Generator Start

	  $post_title = trim($this->input->post('category_name'));

      $post_url = $this->input->post('category_slug');

	  

	  if(empty($post_url)){

	  $post_url = $post_title;

	  }

	

    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($post_url)));   

    $selectQuery = $this->db->query("SELECT * FROM tbl_post_category WHERE category_slug LIKE '$slug%'");

	

	

    if($selectQuery->num_rows()>0){

		foreach($selectQuery->result() as $row){

			$data[] = $row->category_slug;

  		}

		 if(in_array($slug, $data)){

			$count = 0;

			while( in_array( ($slug . '-' . ++$count ), $data) );

			$slug = $slug . '-' . $count;

		 }

    }

	// Slug Generator End

	

	  $config['upload_path']   = './assets/images/post-category/';

      $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|GIF|PNG';

      $config['max_size']      = 2048;

      $this->load->library('upload', $config);

	  $this->upload->initialize($config);

	  $this->upload->do_upload('category_image');

	  $image = $this->upload->data();



		$data = array(

                'category_name' => trim($this->input->post('category_name')),

				'category_slug' => $slug,

        		'category_description' => trim($this->input->post('category_description')),

        		'category_image' => $image['file_name'],

        		'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);



		$res = $this->db->insert('tbl_post_category', $data);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');

		}

		    redirect('juggler/post/category');

	}



	public function edit_category($id){

		$PostQry = $this->Postmodel->getCategoryByID($id);

		$this->load->view('juggler/edit_post_category', ['PostQry'=>$PostQry]);

	}



	public function update_category(){

		$id = $this->input->post('id');

		

		

		// Slug Generator Start

		

        $CatQry = $this->Postmodel->getCategoryByID($id);

		

		$category_name = $this->input->post('category_name');

		

        $category_url = $this->input->post('category_slug');

		if(empty($category_url)){

			$category_url=$category_name;

		}

	

        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($category_url)));

   

        $selectQuery = $this->db->query("SELECT * FROM tbl_post_category WHERE category_slug LIKE '$slug%'");

	

	    if($CatQry->category_slug!=$slug){

	

        if($selectQuery->num_rows()>0){

		foreach($selectQuery->result() as $row){

			$data[] = $row->category_slug;

  		 }

		

		 if(in_array($slug, $data)){

			$count = 0;

			while( in_array( ($slug . '-' . ++$count ), $data) );

			$slug = $slug . '-' . $count;

		   }

       }

		}else{

		$slug = $slug;

		}

	  // Slug Generator End



	  $config['upload_path']   = './assets/images/post-category/';

      $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|GIF|PNG';

      $config['max_size']      = 2048;

      $this->load->library('upload', $config);

	  $this->upload->initialize($config);

	  $this->upload->do_upload('category_image');

	  $image = $this->upload->data();



		if($image['file_name']!==''){

		$data = array(

                'category_name' => trim($this->input->post('category_name')),

				'category_slug' => $slug,

        		'category_description' => trim($this->input->post('category_description')),

        		'category_image' => $image['file_name'],

        		'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);

		}else{

		$data = array(

                'category_name' => trim($this->input->post('category_name')),

				'category_slug' => $slug,

        		'category_description' => trim($this->input->post('category_description')),

        		'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);

		}



		$this->db->where('id', $id);

		$res = $this->db->update('tbl_post_category', $data);

		

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row not Updated.</div>');

		}

		

		redirect('juggler/post/category');

	}

	

	

	

	public function delete_category($id){

		$res = $this->Postmodel->deleteCategoryByID($id);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row not Deleted.</div>');

		}

		redirect('juggler/post/category');

			

	}

	

	

	/* Category Code End Here */

}

