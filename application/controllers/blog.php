<?php
class Blog extends CI_Controller {

    function index()
    {
       $this->load->model('Blog_Model');

        $data['query'] = $this->Blog_Model->get_last_ten_entries();

        $this->load->view('blog', $data);        
    }
}
?>