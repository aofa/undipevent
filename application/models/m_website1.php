<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_Website1 extends CI_Model {

    
    function recent_update() {
        $query= $this->db->query('SELECT * FROM kegiatan_eo ke, profil_eo po WHERE publish=1 AND ke.id_eo=po.id_eo ORDER BY tanggal_update DESC limit 5');
        return $query->result();
    }
    function event_terdekat($sekarang) {
        //$sekarang = date('Y-m-d');
        $query= $this->db->query("SELECT * FROM kegiatan_eo WHERE tanggal_acara > '$sekarang'  AND publish=1 ORDER BY tanggal_acara ASC limit 8");
        return $query->result();
    }

}
