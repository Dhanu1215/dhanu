<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
     
    public  function __construct()
     {
     	parent::__construct();
        $this->load->model('User_model','user_model');
        $this->load->library('form_validation');
        
     }
	
	public function index()
	{
		
		$result=$this->user_model->getData('product');
		$product_category=$this->user_model->getData('product_category');
        $product_size=$this->user_model->getData('product_size');

		$data=array('userlist'=>$result,'product_category'=>$product_category,'product_size'=>$product_size);
		// echo"<pre>";
		// print_r($data);
		// exit();
		$this->load->view("user",$data);
	}

	public function addProduct()
	{

		$this->form_validation->set_rules('product_name','product_name','required');
		$this->form_validation->set_rules('product_category','product_category','required');
		$this->form_validation->set_rules('product_size','product_size','required');
		$this->form_validation->set_rules('product_stock','product_stock','required');
		$this->form_validation->set_rules('product_price','product_price','required');

		if($this->form_validation->run()==false)
		{

			$this->session->set_flashdata('message',validation_errors());
				
			redirect('user/index');
		}

		$form_data = array('product_name' => $this->input->post('product_name'), 
			                'product_category' => $this->input->post('product_category'),
			                'product_size' => $this->input->post('product_size'),
			                'product_stock' => $this->input->post('product_stock'),
			                'product_price' => $this->input->post('product_price'));

		$result=$this->user_model->setData('product',$form_data);
		if(isset($result))
		{

          $this->session->set_flashdata('message','Product Added Successfully');
			 redirect('user/index');
		}
		else
		{
			 $this->session->set_flashdata('message','Sorry... Product Not Added ');
			redirect('user/index');

		}
	}



	public function updateProduct()
	{

		$this->form_validation->set_rules('product_name','product_name','required');
		$this->form_validation->set_rules('product_id','product_id','required');
		$this->form_validation->set_rules('product_category','product_category','required');
		$this->form_validation->set_rules('product_size','product_size','required');
		$this->form_validation->set_rules('product_stock','product_stock','required');
		$this->form_validation->set_rules('product_price','product_price','required');

		if($this->form_validation->run()==false)
		{

			$this->session->set_flashdata('message',validation_errors());
				
			redirect('user/index');
		}

		$form_data = array('product_name' => $this->input->post('product_name'), 
			                'product_category' => $this->input->post('product_category'),
			                'product_size' => $this->input->post('product_size'),
			                'product_stock' => $this->input->post('product_stock'),
			                'product_price' => $this->input->post('product_price'));

		$where = array('product_id' => $this->input->post('product_id'));
		// print_r($where);
		// exit();

		$result=$this->user_model->updateData('product',$form_data,$where);
		if(isset($result))
		{

          $this->session->set_flashdata('message','Product Updated Successfully');
			 redirect('user/index');
		}
		else
		{
			 $this->session->set_flashdata('message','Sorry... Product Not Updated ');
			redirect('user/index');

		}
	}
	public function deleteProduct()
	{


		if(!$this->input->get('id'))
		{

			$this->session->set_flashdata('message',validation_errors());
				
			redirect('user/index');
		}

	

		$where = array('product_id' => $this->input->get('id'));
		// print_r($where);
		// exit();

		$result=$this->user_model->deleteData('product',$where);
		if(isset($result))
		{

          $this->session->set_flashdata('message','Product Deleted Successfully');
			 redirect('user/index');
		}
		else
		{
			 $this->session->set_flashdata('message','Sorry... Product Not Deleted ');
			redirect('user/index');

		}

	}

	public function addProductCategory()
	{

		$this->form_validation->set_rules('product_category','product_category','required');

		if($this->form_validation->run()==false)
		{

			$this->session->set_flashdata('message',validation_errors());
				
			redirect('user/index');
		}

		$form_data = array( 'product_category' => $this->input->post('product_category'));

		$result=$this->user_model->setData('product_category',$form_data);
		if(isset($result))
		{

          $this->session->set_flashdata('message','Product Category Added Successfully');
			 redirect('user/index');
		}
		else
		{
			 $this->session->set_flashdata('message','Sorry... Product Category Not Added ');
			redirect('user/index');

		}
	}



	public function updateProductCategory()
	{

		$this->form_validation->set_rules('product_id','product_id','required');
		$this->form_validation->set_rules('product_category','product_category','required');

		if($this->form_validation->run()==false)
		{

			$this->session->set_flashdata('message',validation_errors());
				
			redirect('user/index');
		}

		$form_data = array( 
			                'product_category' => $this->input->post('product_category'));

		$where = array('product_id' => $this->input->post('product_id'));
		// print_r($where);
		// exit();

		$result=$this->user_model->updateData('product_category',$form_data,$where);
		if(isset($result))
		{

          $this->session->set_flashdata('message','Product Category Updated Successfully');
			 redirect('user/index');
		}
		else
		{
			 $this->session->set_flashdata('message','Sorry... Product Category Not Updated ');
			redirect('user/index');

		}
	}
	public function deleteProductCategory()
	{


		if(!$this->input->get('id'))
		{

			$this->session->set_flashdata('message',validation_errors());
				
			redirect('user/index');
		}

	

		$where = array('product_id' => $this->input->get('id'));
		// print_r($where);
		// exit();

		$result=$this->user_model->deleteData('product_category',$where);
		if(isset($result))
		{

          $this->session->set_flashdata('message','Product Category Deleted Successfully');
			 redirect('user/index');
		}
		else
		{
			 $this->session->set_flashdata('message','Sorry... Product Category Not Deleted ');
			redirect('user/index');

		}

	}

	public function addProductSize()
	{

		$this->form_validation->set_rules('product_size','product_size','required');

		if($this->form_validation->run()==false)
		{

			$this->session->set_flashdata('message',validation_errors());
				
			redirect('user/index');
		}

		$form_data = array( 'product_size' => $this->input->post('product_size'));

		$result=$this->user_model->setData('product_size',$form_data);
		if(isset($result))
		{

          $this->session->set_flashdata('message','Product size Added Successfully');
			 redirect('user/index');
		}
		else
		{
			 $this->session->set_flashdata('message','Sorry... Product size Not Added ');
			redirect('user/index');

		}
	}



	public function updateProductSize()
	{

		$this->form_validation->set_rules('product_id','product_id','required');
		$this->form_validation->set_rules('product_size','product_size','required');

		if($this->form_validation->run()==false)
		{

			$this->session->set_flashdata('message',validation_errors());
				
			redirect('user/index');
		}

		$form_data = array( 
			                'product_size' => $this->input->post('product_size'));

		$where = array('product_id' => $this->input->post('product_id'));
		// print_r($where);
		// exit();

		$result=$this->user_model->updateData('product_size',$form_data,$where);
		if(isset($result))
		{

          $this->session->set_flashdata('message','Product size Updated Successfully');
			 redirect('user/index');
		}
		else
		{
			 $this->session->set_flashdata('message','Sorry... Product size Not Updated ');
			redirect('user/index');

		}
	}
	public function deleteProductSize()
	{


		if(!$this->input->get('id'))
		{

			$this->session->set_flashdata('message',validation_errors());
				
			redirect('user/index');
		}

	

		$where = array('product_id' => $this->input->get('id'));
		// print_r($where);
		// exit();

		$result=$this->user_model->deleteData('product_size',$where);
		if(isset($result))
		{

          $this->session->set_flashdata('message','Product size Deleted Successfully');
			 redirect('user/index');
		}
		else
		{
			 $this->session->set_flashdata('message','Sorry... Product size Not Deleted ');
			redirect('user/index');

		}

	}

}
        