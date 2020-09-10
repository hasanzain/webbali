<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitoring extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('customer')=='') {
            redirect('auth');
        }
        
    }

    public function index()
    {
        $this->load->view('header/header');
        $this->load->view('v_monitoring');
        $this->load->view('header/footer');
    }

    public function detail()
    {
        $this->load->view('header/header');
        $this->load->view('v_detail');
        $this->load->view('header/footer');
    }

    public function relay()
    {

        $data = array(
            'relay' => $this->db->get('relay')
        );
        $this->load->view('header/header');
        $this->load->view('v_relay', $data);
        $this->load->view('header/footer');
   
        
    }

    public function update_relay()
    {
        $id = $this->input->get('id');
        $nilai = $this->input->get('nilai');
        
        if ($nilai == 1) {
            $nilaibaru = 0;
            $button = 'danger';
            $status = 'OFF';
        }else{
            $nilaibaru = 1;
            $button = 'success';
            $status = 'ON';
        }
        $object = array(
            'button' => $button,
            'status' => $status,
            'nilai' => $nilaibaru
         );

        $this->db->where('id', $id);
        $this->db->update('relay', $object);
        redirect('monitoring/relay');
        
        
    }

    public function chart()
    {
        $this->load->view('header/header');
        $this->load->view('v_chart');
        $this->load->view('header/footer');
    }

        public function Report()
    {
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $tabel = $this->input->post('fromreport');
        $tanggal = $this->input->post('tanggal');
        $until = $this->input->post('until');
        $customer = $this->session->userdata('customer');
        
        
        $data = array(
            'tabel' => $this->db->get('report')->result_array()
        );
        
        if ($tabel != null) {
            if ($tanggal != null) {
                $this->db->where('customer', $customer);

                if ($until != null) {
                    $this->db->where('tanggal BETWEEN "'. date('Y-m-d', strtotime($tanggal)). '" and "'. date('Y-m-d', strtotime($until)).'"');
                }else{
                    $this->db->where('tanggal', $tanggal);

                }
                
                
                
                // Panggil class PHPExcel nya
                $excel = new PHPExcel();

                // Settingan awal fil excel
                $excel->getProperties()->setCreator('My Notes Code')
                                    ->setLastModifiedBy('My Notes Code')
                                    ->setTitle("REPORT ".$tabel)
                                    ->setSubject($tabel)
                                    ->setDescription("Laporan Semua Data Siswa")
                                    ->setKeywords("Data Siswa");

                // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
                $style_col = array(
                    'font' => array('bold' => true), // Set font nya jadi bold
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
                    ),
                    'borders' => array(
                        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
                    )
                );

                // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
                $style_row = array(
                    'alignment' => array(
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
                    ),
                    'borders' => array(
                        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
                    )
                );

                $excel->setActiveSheetIndex(0)->setCellValue('A1', "FORM REPORT"); // Set kolom A1 dengan tulisan "DATA SISWA"
                $excel->getActiveSheet()->mergeCells('A1:D1'); // Set Merge Cell pada kolom A1 sampai E1
                $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
                $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
                $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

                // Buat header tabel nya pada baris ke 3
                $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
                $excel->setActiveSheetIndex(0)->setCellValue('B3', "NILAI"); // Set kolom B3 dengan tulisan "NIS"
                $excel->setActiveSheetIndex(0)->setCellValue('C3', "TANGGAL"); // Set kolom C3 dengan tulisan "NAMA"
                $excel->setActiveSheetIndex(0)->setCellValue('D3', "WAKTU"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"


                // Apply style header yang telah kita buat tadi ke masing-masing kolom header
                $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
                $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
                $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
                $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);

                // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
                //$siswa = $this->SiswaModel->view();
                $export = $this->db->get($tabel)->result_array();

                $no = 1; // Untuk penomoran tabel, di awal set dengan 1
                $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
                foreach($export as $key){ // Lakukan looping pada variabel siswa
                    $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
                    $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $key['nilai']);
                    $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $key['tanggal']);
                    $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $key['waktu']);
                    
                    // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
                    $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
                    $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
                    $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
                    $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
                    
                    $no++; // Tambah 1 setiap kali looping
                    $numrow++; // Tambah 1 setiap kali looping
                }

                // Set width kolom
                $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
                $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
                $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
                $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
                
                // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
                $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

                // Set orientasi kertas jadi LANDSCAPE
                $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

                // Set judul file excel nya
                $excel->getActiveSheet(0)->setTitle("Form Report");
                $excel->setActiveSheetIndex(0);

                // Proses file excel
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment; filename="Form Report.xlsx"'); // Set nama file excel nya
                header('Cache-Control: max-age=0');

                $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
                $write->save('php://output');


            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tanggal tidak boleh kosong</div>');
                redirect('monitoring/report');
            }
        }else{
            $this->load->view('header/header');
            $this->load->view('v_report',$data);
            $this->load->view('header/footer');
        }
        
       
    }

    public function adduser()
    {
       
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[admin.email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('customer', 'customer', 'trim|required');

        
        if ($this->form_validation->run() == FALSE) {
        $this->load->view('header/header');
        $this->load->view('v_adduser');
        $this->load->view('header/footer');
        } else {
            $data = array(
                'email' => htmlspecialchars($this->input->post('email',true)),
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'customer' => htmlspecialchars($this->input->post('customer',true)),
                );
            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil ditambahkan</div>');
            redirect('monitoring/adduser');
            
            
        }
    }
}