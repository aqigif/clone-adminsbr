<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model
{
    private $_table = "blog";
    
    public $id_blog;
    public $judul;
    public $isi;
    public $gambar = "default.jpg";
    public $tanggal;
    public $author;

    public function rules()
    {
        return [

            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],

            ['field' => 'isi',
            'label' => 'Isi',
            'rules' => 'required'],

            ['field' => 'author',
            'label' => 'Author',
            'rules' => 'required']
        ];
    }

    


    private function _uploadImage()
    {
        $config['upload_path']          = './asset/img/blog/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_blog;
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        
        print_r($this->upload->display_errors());
    }

    private function _postBlog(){
        $config['upload_path'] = './asset/img/blog/';
        if (!is_dir($config['upload_path'])){
            mkdir($config['upload_path'], 0777,TRUE);
        }
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2000';
        $config['remove_spaces'] = true;
        $config['overwrite'] = false;
        $config['encrypt_name'] = true;
        $config['max_width']  = '';
        $config['max_height']  = '';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
 
        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
    }

    private function _deleteImage($id){
    $blog = $this->getById($id);
        if ($blog->gambar != "default.jpg") {
            $filename = explode(".", $blog->gambar)[0];
            return array_map('unlink', glob(FCPATH."/asset/img/blog/$filename.*"));
        }
    }

public function getAll()
    {
        $this->db->order_by('tanggal', 'desc');
        $query = $this->db->get($this->_table); 
        return $query->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_blog" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_blog = uniqid();
        $this->gambar = $this->_uploadImage();
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->tanggal = date("Y-m-d");
        $this->author = $post["author"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        
        $this->id_blog = $post["id_blog"];
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->tanggal = date("Y-m-d");
        $this->author = $post["author"];
        $this->db->update($this->_table, $this, array('id_blog' => $post['id_blog']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_blog" => $id));
    }
}
