<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');

		// Prevent some security threats, per Kevin
		// Turn on IE8-IE9 XSS prevention tools
		$this->output->set_header('X-XSS-Protection: 1; mode=block');
		// Don't allow any pages to be framed - Defends against CSRF
		$this->output->set_header('X-Frame-Options: DENY');
		// prevent mime based attacks
		$this->output->set_header('X-Content-Type-Options: nosniff');
		$this->output->set_header('Content-Security-Policy: ');
		$this->output->set_header('Referrer-Policy: no-referrer');
	}

	public function index()
	{
		$data['guestbook'] = $this->M_data->ambil_data()->result();
		$this->load->view('welcome_message');
	}

	function tambah_aksi()
	{
		$nama = $this->input->post('nama');
		$instansi = $this->input->post('instansi');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$keperluan = $this->input->post('keperluan');
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date("Y-m-d H:i:s");
		$secret_key = "6Lf0dNsaAAAAABGrtvRxwIunWo9hYDT6v03lLAjx";
		$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);
		$response = json_decode($verify);

		// captcha dimatikan sementara
		//if ($response->success) { // Jika proses validasi captcha berhasil
		$data = array(
			'nama' => $nama,
			'instansi' => $instansi,
			'alamat' => $alamat,
			'keperluan' => $keperluan,
			'no_hp' => $no_hp,
			'waktu' => $waktu
		);
		$this->M_data->input_data($data, 'guestbook');
		redirect('welcome/index');
		// } else { // Jika captcha tidak valid
		// 	echo "<h2>Captcha Tidak Valid</h2>";
		// 	echo "Silahkan klik kotak I'm not robot (reCaptcha) untuk verifikasi";
		// 	redirect('welcome/index');
		// }
	}
}
