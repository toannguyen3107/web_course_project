<?php 
class DetailProduct extends Controller{
    public function index($name=''){
        // $user = $this->model('User');
        // $user->name = $name;

        $this->view('detailProduct/index', []);
    }
}