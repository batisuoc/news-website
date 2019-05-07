<?php

require_once 'database.php';

class News extends Database
{
	function getTinNoiBat($from, $sotin, $lang)
	{
		$sql = "SELECT idTin, TieuDe, Ngay, TomTat, urlHinh, loaitin.Ten AS TenLT
				FROM tin, loaitin
				WHERE tin.idLT = loaitin.idLT AND TinNoiBat = 1 AND tin.lang = '$lang'
				ORDER BY idTin DESC LIMIT $from, $sotin";
		$kq = $this->db->query($sql);
		if(!$kq) die('Lỗi trong hàm'.__FUNCTION__.' '.$this->db->error);
		return $kq;
	}

	function getTinMoi($from, $sotin, $lang)
	{
		$sql = "SELECT idTin, TieuDe, Ngay, TomTat, urlHinh, loaitin.Ten AS TenLT
				FROM tin, loaitin
				WHERE tin.idLT = loaitin.idLT AND tin.AnHien = 1 AND tin.lang = '$lang'
				ORDER BY idTin DESC LIMIT $from, $sotin";
		$kq = $this->db->query($sql);
		if(!$kq) die('Lỗi trong hàm'.__FUNCTION__.' '.$this->db->error);
		return $kq;
	}
}

?>