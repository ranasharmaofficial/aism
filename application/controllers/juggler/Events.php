<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('juggler/Eventsmodel');
    }
	
 	public function index()
    {
        $PageQry = $this->Eventsmodel->getEvents();
        $this->load->view('juggler/events', ['PageQry'=>$PageQry]);

    }

    public function add(){
        $this->load->view('juggler/add_events');

    }

	public function insert(){
	 
	  // Slug Generator Start
	  $post_title = trim($this->input->post('title'));
      $post_url = $this->input->post('slug');
	  
	  if(empty($post_url)){
	  $post_url = $post_title;
	  }
	
    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($post_url)));   
    $selectQuery = $this->db->query("SELECT * FROM tbl_events WHERE slug LIKE '$slug%'");
	
	
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
	
	  $config['upload_path']   = './assets/images/events/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|GIF|PNG';
      $config['max_size']      = 2048;
      $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  $this->upload->do_upload('image');
	  $image = $this->upload->data();

		$data = array(
                'title' => trim($this->input->post('title')),
				'slug' => $slug,
				'sub_title' => trim($this->input->post('sub_title')),
				'location' => trim($this->input->post('location')),
                'meta_title' => trim($this->input->post('meta_title')),
                'meta_keywords' => trim($this->input->post('meta_keywords')),
                'meta_description' => trim($this->input->post('meta_description')),
        		'short_description' => trim($this->input->post('short_description')),
        		'description' => trim($this->input->post('description')),        		
        		'date' => trim($this->input->post('date')),
        		'image' => $image['file_name'],
        		'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_events', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/events');
	}

	public function edit($id){
		$PageQry = $this->Eventsmodel->getEventsByID($id);
		$this->load->view('juggler/edit_events', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');
		
		// Slug Generator Start
		
        $EventsQry = $this->Eventsmodel->getEventsByID($id);
		
		$post_title = $this->input->post('title');
		
        $post_url = $this->input->post('slug');
		if(empty($post_url)){
			$post_url=$post_title;
		}
	
        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($post_url)));
   
        $selectQuery = $this->db->query("SELECT * FROM tbl_events WHERE slug LIKE '$slug%'");
	
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

	  $config['upload_path']   = './assets/images/events/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|GIF|PNG';
      $config['max_size']      = 2048;
      $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  $this->upload->do_upload('image');
	  $image = $this->upload->data();

		if($image['file_name']!==''){
		$data = array(
                'title' => trim($this->input->post('title')),
				'slug' => $slug,
				'sub_title' => trim($this->input->post('sub_title')),
				'location' => trim($this->input->post('location')),
                'meta_title' => trim($this->input->post('meta_title')),
                'meta_keywords' => trim($this->input->post('meta_keywords')),
                'meta_description' => trim($this->input->post('meta_description')),
        		'short_description' => trim($this->input->post('short_description')),
        		'description' => trim($this->input->post('description')),
        		'date' => trim($this->input->post('date')),
        		'image' => $image['file_name'],
        		'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}else{
		$data = array(
                'title' => trim($this->input->post('title')),
				'slug' => $slug,
                'meta_title' => trim($this->input->post('meta_title')),
                'meta_keywords' => trim($this->input->post('meta_keywords')),
                'meta_description' => trim($this->input->post('meta_description')),
        		'short_description' => trim($this->input->post('short_description')),
        		'description' => trim($this->input->post('description')),
        		'sub_title' => trim($this->input->post('sub_title')),
        		'location' => trim($this->input->post('location')),
        		'date' => trim($this->input->post('date')),
        		'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}

		$this->db->where('id', $id);
		$res = $this->db->update('tbl_events', $data);
		
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		
		redirect('juggler/events');
	}
	
	
	
	public function delete($id){
		$res = $this->Eventsmodel->deleteEventsByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		redirect('juggler/events');
			
	}
	
	
	
}
