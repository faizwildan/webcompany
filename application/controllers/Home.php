<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/index');
        $this->load->view('template/home_footer');
    }

    public function about()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/about');
        $this->load->view('template/home_footer');
    }

    public function portofolio()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/portofolio');
        $this->load->view('template/home_footer');
    }

    public function team()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/team');
        $this->load->view('template/home_footer');
    }

    public function myAccount()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/myAccount');
        $this->load->view('template/home_footer');
    }

    public function signin()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/signin');
        $this->load->view('template/home_footer');
    }

    public function login()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/login');
        $this->load->view('template/home_footer');
    }

    public function blog()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/blog');
        $this->load->view('template/home_footer');
    }

    public function contact()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/contact');
        $this->load->view('template/home_footer');
    }

    public function register()
    {
        $this->load->view('template/auth_header');
        $this->load->view('auth/register');
        $this->load->view('template/auth_footer');
    }
}
