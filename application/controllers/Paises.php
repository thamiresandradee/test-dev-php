<?php
defined('BASEPATH') or exit('Ação não permitida');

class Paises extends CI_Controller{

    public function __construct(){

		parent::__construct();

        $this->load->model("paises_model");

	}

    public function index(){

		$data = array(
			'titulo' 		=> 'Lista de Países',
			'paises' => $this->core_model->get_all('paises'), //pega todos os países
		);

		//PARA DEBUG
		//echo'<pre>';
		//print_r($data['paises']);
		//exit();

		$this->load->view('layout/header', $data);
		$this->load->view('paises/list');
		$this->load->view('layout/footer');
	
	}

    public function list($ordenar = NULL, $tipo = NULL){

        $ordenar = $this->input->post('ordenar');
        $tipo = $this->input->post('tipopesq');

        //SE NÃO RECEBER NADA POR POST, CARREGARÁ A LISTAGEM PADRÃO COMO ESTÁ SALVA NO BANCO DE DADOS, SEM ORDENAÇÃO
        if(!$ordenar || !$tipo){

            $data = array(
                'titulo' 		=> 'Lista de Países - Ordenação pelo B.D.',
                'paises' => $this->core_model->get_all('paises'), //pega todos os países
            );

        }else{ //SENÃO, CARREGARÁ A LISTAGEM DE ACORDO COM A ORDENAÇÃO INFORMADA
            
            if($tipo == 'SIGLA'){

                $ordem = 'sigla';
                $titulo_ordem = 'Sigla';

            }if($tipo == 'NOME'){

                $ordem = 'nome';
                $titulo_ordem = 'Nome';

            }

            $data = array(
                'titulo' 		=> 'Lista de Países - Ordenado por '.$titulo_ordem,
                'tipo'          => $tipo,
                'paises' => $this->paises_model->get_all_order_by($ordem), //pega todos os países
            );

        }
        
		//PARA DEBUG
		//echo'<pre>';
		//print_r($data['paises']);
		//exit();

		$this->load->view('layout/header', $data);
		$this->load->view('paises/list');
		$this->load->view('layout/footer');
	
	}

    //LISTAGEM DE DADOS USANDO O PLUGGIN DATATABLE DO BOOTSTRAP
    public function listDatatable(){

        $data = array(
			'titulo' 		=> 'Lista de Países',
			'paises' => $this->core_model->get_all('paises'), //pega todos os países

            'styles' 		=> array(
                'css/plugins/dataTables.bootstrap4.min.css',
            ),

            'scripts' => array(
                'js/plugins/datatables/jquery.dataTables.min.js',
                'js/plugins/datatables/dataTables.bootstrap4.min.js',
                'js/plugins/datatables/util.js',
            ),

		);

        //PARA DEBUG
		//echo'<pre>';
		//print_r($data['styles']);
		//exit();

		$this->load->view('layout/header', $data);
		$this->load->view('paises/list-datatable');
		$this->load->view('layout/footer');

    }

}