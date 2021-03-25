<?php
class M_laporan extends CI_Model{

	function get_data_barang(){
		$hsl=$this->db->query("SELECT * from tbl_barang b,tbl_satuan s,tbl_kategori k WHERE b.satuan_id=s.satuan_id AND b.kategori_id=k.kategori_id");
		return $hsl;
	}
	function get_data_penjualan(){
		$hsl=$this->db->query("SELECT (j.jual_nofak) AS jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,jual_total,barang_id,barang_nama,barang_harjul_grosir,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual j, tbl_detail_jual dj WHERE j.jual_nofak=dj.jual_nofak ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_total_penjualan(){
		$hsl=$this->db->query("SELECT (j.jual_nofak) AS jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,jual_total,barang_id,barang_nama,barang_harjul_grosir,d_jual_qty,d_jual_diskon,sum(d_jual_total) as total FROM tbl_jual j, tbl_detail_jual dj WHERE j.jual_nofak=dj.jual_nofak ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_data_jual_pertanggal($tanggal){
		$hsl=$this->db->query("SELECT (j.jual_nofak) AS jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,barang_id,barang_nama,barang_harjul_grosir,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual j, tbl_detail_jual dj WHERE j.jual_nofak=dj.jual_nofak AND DATE(jual_tanggal)='$tanggal' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_data__total_jual_pertanggal($tanggal){
		$hsl=$this->db->query("SELECT (j.jual_nofak)AS jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,barang_id,barang_nama,barang_harjul_GROSIR,d_jual_qty,d_jual_diskon,SUM(d_jual_total) as total FROM tbl_jual j, tbl_detail_jual dj WHERE j.jual_nofak=dj.jual_nofak AND DATE(jual_tanggal)='$tanggal' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_bulan_jual(){
		$hsl=$this->db->query("SELECT DISTINCT DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan FROM tbl_jual");
		return $hsl;
	}
	function get_tahun_jual(){
		$hsl=$this->db->query("SELECT DISTINCT YEAR(jual_tanggal) AS tahun FROM tbl_jual");
		return $hsl;
	}
	function get_jual_perbulan($bulan){
		$hsl=$this->db->query("SELECT (j.jual_nofak)AS jual_nofak,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,barang_id,barang_nama,barang_harjul_grosir,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual j, tbl_detail_jual dj WHERE j.jual_nofak=dj.jual_nofak AND DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_total_jual_perbulan($bulan){
		$hsl=$this->db->query("SELECT (j.jual_nofak)AS jual_nofak,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,barang_id,barang_nama,barang_harjul_grosir,d_jual_qty,d_jual_diskon,SUM(d_jual_total) as total FROM tbl_jual j, tbl_detail_jual dj WHERE j.jual_nofak=dj.jual_nofak AND DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_jual_pertahun($tahun){
		$hsl=$this->db->query("SELECT (j.jual_nofak)AS jual_nofak,YEAR(jual_tanggal) AS tahun,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,barang_id,barang_nama,barang_harjul_grosir,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual j, tbl_detail_jual dj WHERE j.jual_nofak=dj.jual_nofak AND YEAR(jual_tanggal)='$tahun' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_total_jual_pertahun($tahun){
		$hsl=$this->db->query("SELECT (j.jual_nofak)AS jual_nofak,YEAR(jual_tanggal) AS tahun,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,barang_id,barang_nama,barang_harjul_grosir,d_jual_qty,d_jual_diskon,SUM(d_jual_total) as total FROM tbl_jual j, tbl_detail_jual dj WHERE j.jual_nofak=dj.jual_nofak AND YEAR(jual_tanggal)='$tahun' ORDER BY jual_nofak DESC");
		return $hsl;
	}
}