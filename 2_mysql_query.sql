SELECT 
    max(tb_mahasiswa_nilai.nilai),
    tb_mahasiswa.mhs_nama
FROM
    tb_mahasiswa_nilai
join
    tb_mahasiswa on tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id
join
    tb_matakuliah on tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id
where
    tb_matakuliah.mk_kode = 'MK303';