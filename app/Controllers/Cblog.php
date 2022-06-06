<?php

namespace App\Controllers;

use App\Models\Mblog;
use App\Controllers\BaseController;

class Cblog extends BaseController
{

	protected  $Mblog;
	public function __construct()
	{
		$this->Mblog = new Mblog();
	}
	public function index()
	{
		$blog = $this->Mblog->findAll();

		$data = [
			// "id_program"    => $this->request->getVar('id_program'),
			// "id_user"    => $this->request->getVar('id_user'),
			// //"judul"    => $this->request->getVar('judul'),
			// "cover"    => $this->request->getVar('cover'),
			// "deskripsi"    => $this->request->getVar('deskripsi'),
			// "status"    => $this->request->getVar('status'),
			'blog' => $blog
		];
		return view('blog/index', $data);
	}

	///punya denise
	// private $blog = '';
	// public function __construct()
	// {
	// 	$this->blog = new Mblog();
	// }

	// //show blog list
	// public function index()
	// {
	// 	$session = session();
	// 	$data['data'] = $this->blog->orderBy('id_program', 'DESC')->findAll();
	// 	return view('/blog/blog', $data);
	// }

	// //insert data
	// public function store()
	// {
	// 	$data = [
	// 		"id_program"    => $this->request->getVar('id_program'),
	// 		"id_user"    => $this->request->getVar('id_user'),
	// 		"judul"    => $this->request->getVar('judul'),
	// 		"cover"    => $this->request->getVar('cover'),
	// 		"deskripsi"    => $this->request->getVar('deskripsi'),
	// 		"status"    => $this->request->getVar('status'),
	// 	];
	// 	$this->blog->insert($data);
	// 	$session = session();
	// 	$session->setFlashdata('msg', 'Blog Successfully Added');
	// 	return $this->response->redirect(site_url('/blog'));
	// }
	// // delete blog
	// public function delete($id)
	// {
	// 	// $id = $this->request->getVar('delete_id');8
	// 	// $data['blog'] = $this->blog->where('id_program', $id)->delete($id);
	// 	// return $this->response->redirect(site_url('/blog'));
	// 	$this->Cblog->delete($id);
	// 	return redirect()->to('/admin');
	// }
	////////////akhir punya denise

	//////////////////////////awal code kak eka
	// public function index()
	// {
	// 	$model = new Mblog();
	// 	$x['data']  = $model->tampilBlog()->getResultArray();
	// 	return view('admin/blog/v_blog_admin', $x);
	// }

	// public function tambahDataBlog()
	// {

	// 	if ($this->request->getMethod() == 'post') {
	// 		$data = [
	// 			"id_program"    => $this->request->getPost('id_program'),
	// 			"id_user"    => $this->request->getPost('id_user'),
	// 			"judul"    => $this->request->getPost('judul'),
	// 			"cover"    => $this->request->getPost('cover'),
	// 			"deskripsi"    => $this->request->getPost('deskripsi'),
	// 			"status"    => $this->request->getPost('status'),
	// 		];

	// 		$Mblog = new \App\Models\Mblog();
	// 		if ($Mblog->insert($data)) {
	// 			session()->setFlashdata('success', 'Data berhasil disimpan');
	// 			return redirect()->to('admin/v_blog_admin');
	// 		}
	// 	}
	// 	return view('admin/blog/tambahblog');


	// }

	///////////////////////akhir code kak eka





	// public function hapus($id_program){
	//         $model = new Mblog();
	//         $model->deleteBlog($id_blog);
	//         return redirect()->to('/Cblog');
	//     }

	// public function destroy($id)
	// {
	// 	$query = DB::table('blog')->where('id',$id)->delete();
	// 	return redirect('admin');
	// }

}
