<?php
class Adama extends CI_Controller
{
      public function index()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('template/content');
            $this->load->view('template/footer');
      }
      public function e_services()
      {
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
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama_app_store/app_store');
            $this->load->view('template/footer');
      }
      public function citizens_call_center()
      {
            $this->load->view('template/header');

            $this->load->view('template/top_menu');
            $this->load->view('e_services/citizens_call_center');
            $this->load->view('template/footer');
      }
      public function About()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/about');
            $this->load->view('template/footer');
      }
      public function States()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/profile/state');
            $this->load->view('template/footer');
      }
      public function Districts()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/profile/district');
            $this->load->view('template/footer');
      }
      public function History()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/profile/history');
            $this->load->view('template/footer');
      }
      public function Economy()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/profile/economy');
            $this->load->view('template/footer');
      }
      public function Literature()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/socio_culture/Literature');
            $this->load->view('template/footer');
      }
      public function Tourism()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/socio_culture/tourism');
            $this->load->view('template/footer');
      }
      public function Lifestyle()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/socio_culture/lifestyle');
            $this->load->view('template/footer');
      }

      public function Census()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/profile/cencus');
            $this->load->view('template/footer');
      }

      public function Governor()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/governor/who_is_who');
            $this->load->view('template/footer');
      }
      public function ChiefMinister()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/governor/chief_minister');
            $this->load->view('template/footer');
      }
      public function CouncilMinister()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/governor/council_of_ministers');
            $this->load->view('template/footer');
      }

      public function Agricultural_department()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/governor/departments/agricultural');
            $this->load->view('template/footer');
      }
      public function directories()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/governor/directories/directories');
            $this->load->view('template/footer');
      }

      public function Mission()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/mission/mission');
            $this->load->view('template/footer');
      }
      public function Education_Mission()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/mission/education_missions');
            $this->load->view('template/footer');
      }

      public function Life_Mission()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/mission/life_mission');
            $this->load->view('template/footer');
      }
      public function People()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/people');
            $this->load->view('template/footer');
      }
      // Education Schemes
      public function Education()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/education/education');
            $this->load->view('template/footer');
      }
      public function Vocational()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/education/vocational');
            $this->load->view('template/footer');
      }
      public function Literacy_programmes()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/education/literacy_program');
            $this->load->view('template/footer');
      }
      public function Education_sector()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/education/education_guess');
            $this->load->view('template/footer');
      }
      public function Education_scheme()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/education/education_scheme');
            $this->load->view('template/footer');
      }
      public function Digital_Leaning_Resource()
      {

            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/education/digital_learning_resource');
            $this->load->view('template/footer');
      }
      public function Industrial_Training()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/education/industrial_training');
            $this->load->view('template/footer');
      }
      // welfare-institutions
      public function social_welfare_initiatives()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/social_life_walfare');
            $this->load->view('template/footer'); 
      }
      public function Women()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/social_life_walfare/women');
            $this->load->view('template/footer');
      }
      public function Children()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/social_life_walfare/children');
            $this->load->view('template/footer');
      }
      public function specially_need_citizens()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/social_life_walfare/specailly_abled_citizens');
            $this->load->view('template/footer');
      }
      public function Youth()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/social_life_walfare/youth');
            $this->load->view('template/footer');
      }
      public function Enterpreneurship()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/social_life_walfare/social_enterpreneurship');
            $this->load->view('template/footer');
      }
      public function social_life_walfare_other()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/social_life_walfare/other');
            $this->load->view('template/footer');
      }

      // Health CARE SERVICES
      public function Health_Sector()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/health/health_sector');
            $this->load->view('template/footer');
      }
      public function Emergecny_health_care()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/health/emergency_health_service');
            $this->load->view('template/footer');
      }
      public function Health_Campigns()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/health/health_campign');
            $this->load->view('template/footer');
      }
      public function National_Health_Mission()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/health/national_health_mission');
            $this->load->view('template/footer');
      }
      public function Palliative_care()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/health/palliative_care');
            $this->load->view('template/footer');
      }
      public function Vaccination()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/health/vaccination');
            $this->load->view('template/footer');
      }
      public function employeement()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/employee');
            $this->load->view('template/footer');
      }

      public function adama_ict()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/employee/adama_ict');
            $this->load->view('template/footer');
      }
      public function adama_public_services()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/employee/adama_public_services');
            $this->load->view('template/footer');
      }

      public function employeement_deparment()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/employee/employee_department');
            $this->load->view('template/footer');
      }
      public function official_job_portal()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/employee/official_job_portal');
            $this->load->view('template/footer');
      }
      public function self_employeement()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/employee/self_employeement');
            $this->load->view('template/footer');
      }
      public function special_disable_employeement()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/employee/special_disable_employee');
            $this->load->view('template/footer');
      }
      public function skill_development()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/skill_development');
            $this->load->view('template/footer');
      }
      public function adama_it_solotion()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/skill_development/it_solution');
            $this->load->view('template/footer');
      }
      public function adama_itc_academy()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/people/skill_development/ict_academy');
            $this->load->view('template/footer');
      }
      // business start heree
      public function business()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/business');
            $this->load->view('template/footer');
      }
      public function finance_your_project()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/business/finance_u_project');
            $this->load->view('template/footer');
      }

      public function easy_doing_business()
      {
            $this->load->view('template/header');
            $this->load->view('template/top_menu');
            $this->load->view('adama/business/easy_doing_business');
            $this->load->view('template/footer');
      }
}
