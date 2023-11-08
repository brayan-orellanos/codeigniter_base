<?php

  class InicioModel extends CI_model 
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function add($params)
    {
      $result = [];
      $this->form_validation->set_rules('name', 'Nombre', 'required');

      if($this->form_validation->run() == TRUE)
      {
        $this->db->trans_start();
          $this->db->insert('skr_roles', ['name' => $params['name'], 'user_insert' => 1]);
        $this->db->trans_complete();

        if ($this->db->trans_status() == TRUE) {
          $result['value'] = True;
          $result['message'] = 'Los datos se han guardado satisfactoriamente';  
        }
        else {
          $result['value'] = False;
          $result['message'] = 'Ha ocurrido un error al guardar los datos';  
        }
      }
      else 
      {
        $result['value'] = False;
        $result['message'] = 'Faltan campos por completar';
      }

      return $result;
      exit();
    }
  }