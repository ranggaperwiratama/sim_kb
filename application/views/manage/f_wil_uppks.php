<?php
$mode	= $this->uri->segment(3);

if ($mode == "edit" || $mode == "act_edit") {
	$act		= "act_edit";
	$idp		= $datpil->ID_WILAYAH_UPPKS;
	$kode_rt				= $datpil->KODE_RT;
	$kode_rw				= $datpil->KODE_RW;
	$kode_kelurahan			= $datpil->KODE_KELURAHAN;
	$kode_kecamatan			= $datpil->KODE_KECAMATAN;
	$sumber_modal_saat_ini		= $datpil->SUMBER_MODAL_SAAT_INI;
	$nama_kelompok_uppks			= $datpil->NAMA_KELOMPOK_UPPKS;
	$jenis_usaha				= $datpil->JENIS_USAHA;
	$sumber_dana_pernah_diperoleh				= $datpil->SUMBER_DANA_PERNAH_DIPEROLEH;
	$total_modal_saat_ini				= $datpil->TOTAL_MODAL_SAAT_INI;
	$nama_ketua_uppks				= $datpil->NAMA_KETUA_UPPKS;
	$tgl_lahir_ketua_uppks				= $datpil->TGL_LAHIR_KETUA;
	$no_telp				= $datpil->NO_TELP;
	$no_fax				= $datpil->NO_FAX;
	$no_hp				= $datpil->NO_HP;
	$email				= $datpil->EMAIL;
	$kode_pos				= $datpil->KODE_POS;
} else {
	$act		= "act_add";
	$idp		= "";
	$kode_rt				= "";
	$kode_rw				= "";
	$kode_kelurahan			= "";
	$kode_kecamatan			= "";
	$sumber_modal_saat_ini		= "";
	$nama_kelompok_uppks			= "";
	$jenis_usaha				= "";
	$sumber_dana_pernah_diperoleh				= "";
	$total_modal_saat_ini				= "";
	$nama_ketua_uppks				= "";
	$tgl_lahir_ketua_uppks				= "";
	$no_telp				= "";
	$no_fax				= "";
	$no_hp				= "";
	$email				= "";
	$kode_pos				= "";
}
?>
<form action="<?=base_URL()?>index.php/manage/wil_uppks/<?=$act?>" method="post">
<input type="hidden" name="idp" value="<?=$idp?>"></input>
	<fieldset><legend>Form UPPKS</legend>
	
	<br>
	<label style="width: 200px; float: left">Kecamatan</label>
	<select id="selectKec" onchange="changeFuncKec();">
	<?php $kecamatan = $this->db->query("SELECT kode_kecamatan, nama_kecamatan FROM master_kecamatan")->result(); ?>
	<option value="" selected="selected" disabled="disabled">---</option>
	<?php foreach ($kecamatan as $key => $kec): ?>
	<option value="<?php echo $kec->kode_kecamatan ?>"><?php echo $kec->nama_kecamatan ?></option>
	<?php endforeach; ?>
	</select>  
	<script type="text/javascript">
	   function changeFuncKec() {
		var selectBox = document.getElementById("selectKec");
		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
		document.getElementById('kecamatan').value = selectedValue;
	   }
	</script>
	<input id="kecamatan" class="input-small" type="hidden" name="kode_kecamatan" placeholder="" value="<?=$kode_kecamatan?>" required>
	<br>	
	<?php $kelurahan = $this->db->query("SELECT kode_kelurahan, nama_kelurahan FROM master_kelurahan")->result(); ?>
	<label style="width: 200px; float: left">Kelurahan</label>
	<select id="selectKel" onchange="changeFuncKel();">
	<option value="" selected="selected" disabled="disabled">---</option>
	<?php foreach ($kelurahan as $key => $kel): ?>
	<option value="<?php echo $kel->kode_kelurahan ?>"><?php echo $kel->nama_kelurahan ?></option>
	<?php endforeach; ?>
	</select>  
	<script type="text/javascript">
	   function changeFuncKel() {
		var selectBox = document.getElementById("selectKel");
		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
		document.getElementById('kelurahan').value = selectedValue;
	   }
	</script>
	<input id="kelurahan" class="input-small" type="hidden" name="kode_kelurahan" placeholder="" value="<?=$kode_kelurahan?>" required>
	<br>
	<label style="width: 200px; float: left">RW</label>
	<select id="selectRW" onchange="changeFuncRW();">
	<?php $rw = $this->db->query("SELECT kode_rw, nama_rw FROM master_rw")->result(); ?>
	<option value="" selected="selected" disabled="disabled">---</option>
	<?php foreach ($rw as $key => $w): ?>
	<option value="<?php echo $w->kode_rw ?>"><?php echo $w->nama_rw ?></option>
	<?php endforeach; ?>
	</select>  
	<script type="text/javascript">
	   function changeFuncRW() {
		var selectBox = document.getElementById("selectRW");
		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
		document.getElementById('rw').value = selectedValue;
	   }
	</script>
	<input id="rw" class="input-small" type="hidden" name="kode_rw" placeholder="" value="<?=$kode_rw?>" required>
	<br>	
	<label style="width: 200px; float: left">RT</label>
	<select id="selectRT" onchange="changeFuncRT();">
	<option value="" selected="selected" disabled="disabled">---</option>
	<?php $rt = $this->db->query("SELECT kode_rt, angka_rt FROM master_rt")->result(); ?>
	<?php foreach ($rt as $key => $t): ?>
	<option value="<?php echo $t->kode_rt ?>"><?php echo $t->angka_rt ?></option>
	<?php endforeach; ?>
	</select>  
	<script type="text/javascript">
	   function changeFuncRT() {
		var selectBox = document.getElementById("selectRT");
		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
		document.getElementById('rt').value = selectedValue;
	   }
	</script>
	<input id="rt" class="input-small" type="hidden" name="kode_rt" placeholder="" value="<?=$kode_rt?>" required>
	<br>
	<label style="width: 200px; float: left">Kode Pos</label><input class="input-xxlarge" type="text" name="kode_pos" placeholder="" value="<?=$kode_pos?>" required>
	<br>
	<label style="width: 200px; float: left">Nama Kelompok UPPKS</label><input class="input-xxlarge" type="text" name="nama_kelompok_uppks" placeholder="" value="<?=$nama_kelompok_uppks?>" required>
	<br>	
	<label style="width: 200px; float: left">Nama Ketua UPPKS</label><input class="input-xxlarge" type="text" name="nama_ketua_uppks" placeholder="" value="<?=$nama_ketua_uppks?>" required>
	<br>
	<label style="width: 200px; float: left">Nama Tgl Lahir Ketua</label><input class="input-xxlarge" type="date" name="tgl_lahir_ketua_uppks" placeholder="" value="<?=$tgl_lahir_ketua_uppks?>" required>
	<br>	
	<label style="width: 200px; float: left">No Telp</label><input class="input-xxlarge" type="text" name="no_telp" placeholder="" value="<?=$no_telp?>" required>
	<br>	
	<label style="width: 200px; float: left">No HP</label><input class="input-xxlarge" type="text" name="no_hp" placeholder="" value="<?=$no_hp?>" required>
	<br>	
	<label style="width: 200px; float: left">No Fax</label><input class="input-xxlarge" type="text" name="no_fax" placeholder="" value="<?=$no_fax?>" required>
	<br>
	<label style="width: 200px; float: left">Email</label><input class="input-xxlarge" type="text" name="email" placeholder="" value="<?=$email?>" required>
	<br>
	
	<label style="width: 200px; float: left">Sumber Modal Pernah Diperoleh</label>
	<select id="selectP" onchange="changeFuncP();">
	<?php $pernah = array('APBN','APBD','KRISTA','KUR','PNPM', 'Lainnya'); ?>
	<option value="" selected="selected" disabled="disabled">---</option>
	<?php foreach ($pernah as $key => $p): ?>
	<option value="<?php echo $p ?>"><?php echo $p ?></option>
	<?php endforeach; ?>
	</select>  
	<script type="text/javascript">
	   function changeFuncP() {
		var selectBox = document.getElementById("selectP");
		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
		document.getElementById('p').value = selectedValue;
	   }
	</script>
	<input id="p" class="input-small" type="hidden" name="sumber_dana_pernah_diperoleh" placeholder="" value="<?=$sumber_dana_pernah_diperoleh?>" required>
	<br>
	<label style="width: 200px; float: left">Sumber Modal Saat Ini</label>
	<select id="selectS" onchange="changeFuncS();">
	<?php $saat = array('APBN','APBD','KRISTA','KUR','PNPM', 'Lainnya'); ?>
	<option value="" selected="selected" disabled="disabled">---</option>
	<?php foreach ($saat as $key => $s): ?>
	<option value="<?php echo $s ?>"><?php echo $s ?></option>
	<?php endforeach; ?>
	</select>  
	<script type="text/javascript">
	   function changeFuncS() {
		var selectBox = document.getElementById("selectS");
		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
		document.getElementById('s').value = selectedValue;
	   }
	</script>
	<input id="s" class="input-small" type="hidden" name="sumber_modal_saat_ini" placeholder="" value="<?=$sumber_modal_saat_ini?>" required>
	<br>	
	<label style="width: 200px; float: left">Jumlah Modal Saat Ini</label><input class="input-xxlarge" type="text" name="total_modal_saat_ini" placeholder="" value="<?=$total_modal_saat_ini?>" required>
	<br>
	
	<label style="width: 200px; float: left"></label><button type="submit" class="btn btn-primary">Submit</button>
	</fieldset>
</form>


