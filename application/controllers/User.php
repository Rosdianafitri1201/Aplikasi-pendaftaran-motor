<?php

    class User extends CI_Controller{
        function data(){
            $this->load->view('v_user');
        }   
        function pegawai(){
            $this->load->view('v_pegawai');
        }   
        function siswa(){
            $this->load->view('v_siswa');
        }   
        function transaksi(){
            $this->load->view('v_transaksi');
        }   
        function stok(){
            $this->load->view('v_stok');
        }   
           

    }

?>