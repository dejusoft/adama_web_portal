<?php
class Adama extends CI_Controller {
      public function index() {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('template/content');
            $this->load->view('template/footer');
      }

}
