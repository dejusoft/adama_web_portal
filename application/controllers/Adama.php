<?php
class Adama extends CI_Controller {
      public function index() {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('template/content');
            $this->load->view('template/footer');
      }
      public function e_services() {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('e_services/e_services');
            $this->load->view('template/footer');
      }
      public function life_event_model()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('life_event/life_event_model');
            $this->load->view('template/footer'); 
      }
      public function adama_app_store()
      {

            // $this->load->view('template/app_store_link');
            $this->load->view('template/header');

            $this->load->view('template/top_menu');
            $this->load->view('adama_app_store/app_store');
            $this->load->view('template/footer');   
      }


}
