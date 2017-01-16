<?php
class property extends MX_Controller
{

function __construct() {
parent::__construct();
}
function manage(){
  $this->load->module('site_security');
  $this->site_security->_make_sure_is_admin();

  $data['query']=$this->get('created');
  $data['view_module']="property";
  $data['view_file']="manage";
  $this->load->module('templates');
  $this->templates->admin($data);
}
function create(){
  $this->load->library('session');
  $this->load->module('site_security');
  $this->site_security->_make_sure_is_admin();
  $update_id=$this->uri->segment(3);
  $submit=$this->input->post('submit', TRUE);
  if($submit=="Submit"){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('propertyname', 'ชื่อประกาศ', 'required|max_length[240]');
    $this->form_validation->set_rules('proptype', 'ประเภทการประกาศ', 'required');
    $this->form_validation->set_rules('ptype', 'ประเภทอสังหาริมทรัพย์', 'required');

    if($this->form_validation->run()== TRUE){
      $data=$this->fetch_data_from_post();
      if(is_numeric($update_id)){
        $this->_update($update_id, $data);
        $flash_msg="ปรับปรุงข้อมูลเรียบร้อย";
        $value='<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
        $this->session->set_flashdata('item', $value);
        redirect('property/create/'.$update_id);
      }else{
        $this->_insert($data);
        $update_id=$this->get_max();
        $flash_msg="สร้างรายการประกาศเรียบร้อย";
        $value='<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
        $this->session->set_flashdata('item', $value);
        redirect('property/create/'.$update_id);
    }
  }
}
  if((is_numeric($update_id))&&($submit!="Submit")){
    $data=$this->fetch_data_from_db($update_id);
  }else{
    $data=$this->fetch_data_from_post();
  }
  if(!is_numeric($update_id)){
    $data['headline']="สร้างรายการประกาศ";
  }else{
    $data['headline']="ปรับปรุงรายการประกาศ";
  }
  $data['update_id']=$update_id;
  $data['flash'] = $this->session->flashdata('item');
  $data['view_module']="property";
  $data['view_file']="create";
  $this->load->module('templates');
  $this->templates->admin($data);
}
function fetch_data_from_post(){
  $data['propertyname']=$this->input->post('propertyname',TRUE);
  $data['proptype']=$this->input->post('proptype',TRUE);
  $data['ptype']=$this->input->post('ptype',TRUE);
  $data['ntype']=$this->input->post('ntype',TRUE);
  $data['ndetail']=$this->input->post('ndetail',TRUE);
  $data['detail']=$this->input->post('detail',TRUE);
  return $data;
}
function fetch_data_from_db($update_id){
  $query=$this->get_where($update_id);
  foreach ($query->result() as $row) {
    $data['propertyname']=$row->propertyname;
    $data['proptype']=$row->proptype;
    $data['ptype']=$row->ptype;
    $data['ntype']=$row->ntype;
    $data['ndetail']=$row->ndetail;
    $data['detail']=$row->detail;
  }

  if(!isset($data)){
    $data="";
  }
  return $data;
}
function del(){
  $id=$this->uri->segment(3);
  $this->_delete($id);
  redirect('property/manage/');
}
function get($order_by)
{
    $this->load->model('mdl_property');
    $query = $this->mdl_property->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by)
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_property');
    $query = $this->mdl_property->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{

    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_property');
    $query = $this->mdl_property->get_where($id);
    return $query;
}

function get_where_custom($col, $value)
{
    $this->load->model('mdl_property');
    $query = $this->mdl_property->get_where_custom($col, $value);
    return $query;
}

function _insert($data)
{
    $this->load->model('mdl_property');
    $this->mdl_property->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_property');
    $this->mdl_property->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_property');
    $this->mdl_property->_delete($id);
}

function count_where($column, $value)
{
    $this->load->model('mdl_property');
    $count = $this->mdl_property->count_where($column, $value);
    return $count;
}

function get_max()
{
    $this->load->model('mdl_property');
    $max_id = $this->mdl_property->get_max();
    return $max_id;
}

function _custom_query($mysql_query)
{
    $this->load->model('mdl_property');
    $query = $this->mdl_property->_custom_query($mysql_query);
    return $query;
}

}
