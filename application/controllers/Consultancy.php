<?php

class Consultancy extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "consultancy_v";

        $this->load->model("consultancy_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->consultancy_model->get();
        if($item)
        $viewData->subViewFolder = "update";
        else
        $viewData->subViewFolder = "no_content";

    /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
    $viewData->viewFolder = $this->viewFolder;
    $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form(){

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }
    public function save(){

        $this->load->library("form_validation");
        $this->form_validation->set_rules("interview", "mülakat simülasyonu", "required|trim");
        $this->form_validation->set_rules("resourcespage", "Kariyer Kaynakları", "required|trim");
        $this->form_validation->set_message(
            array(
                "required"     => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );
        // Form Validation Calistirilir..
        // TRUE - FALSE
        $validate = $this->form_validation->run();

        // Monitör Askısı
        // monitor-askisi

        if($validate){

            $insert = $this->consultancy_model->add(
                array(
                    "interview_simulation"         => $this->input->post("interview"),
                    "resources"                    => $this->input->post("resourcespage")
                )
            );

            // TODO Alert sistemi eklenecek...
            if($insert){

                redirect(base_url("consultancy"));

            } else {

                redirect(base_url("consultancy"));

            }

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

        // Başarılı ise
            // Kayit işlemi baslar
        // Başarısız ise
            // Hata ekranda gösterilir...

    }

    public function update_form($id){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->consultancy_model->get(
            array(
                "id"    => $id,
            )
        );
        
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


    }

    public function update($id){

        $this->load->library("form_validation");
        $this->load->library("form_validation");
        $this->form_validation->set_rules("interview", "mülakat simülasyonu", "required|trim");
        $this->form_validation->set_rules("resourcespage", "Kariyer Kaynakları", "required|trim");
        $this->form_validation->set_message(
            array(
                "required"     => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        // Form Validation Calistirilir..
        // TRUE - FALSE

        $validate = $this->form_validation->run();

        if($validate){

            $update = $this->consultancy_model->update(
                array(
                    "id"    => $id
                ),
                $data = array(
                    "interview_simulation"         => $this->input->post("interview"),
                    "resources"                    => $this->input->post("resourcespage"),
                )
            );
            $update = $this->consultancy_model->update(array("id" => $id), $data);

            // TODO Alert sistemi eklenecek...
            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("consultancy"));

        } else {

            $viewData = new stdClass();

            /** Tablodan Verilerin Getirilmesi.. */
            $item = $this->consultancy_model->get(
                array(
                    "id"    => $id,
                )
            );

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            $viewData->item = $item;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

        // Başarılı ise
        // Kayit işlemi baslar
        // Başarısız ise
        // Hata ekranda gösterilir...

    }
}
