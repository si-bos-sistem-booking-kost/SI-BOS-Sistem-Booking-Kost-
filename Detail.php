<h2>Detail Data Pemesanan</h2>
<input type=button class='tombol' value=Kembali onclick="window.location = 'media.php?page=pemesanan' "/>
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Transfer</th>
        <th>Tanggal Transaksi</th>
        <th>Jumlah</th>
        <th>Bank Tujuan</th>
        <th>Kode Transfer</th>
        <th>Type Bayar</th>
    </tr> 
    <?php
    $tampil = mysql_query("
        SELECT pelanggan.nama,
            pembayaran.*,
            bank.nama as nama_bank
        FROM pembayaran
            LEFT JOIN pemesanan
                ON pemesanan.id = pembayaran.pemesanan_id
            LEFT JOIN bank 
                ON bank.id = pembayaran.bank_id
            LEFT JOIN pelanggan
                ON pelanggan.id = pemesanan.pelanggan_id
        WHERE pembayaran.pemesanan_id = ".$_GET[id]);
    $no = 1;
    while ($r = mysql_fetch_array($tampil)) {
        echo "<tr>
            <td>$no</td>
            <td>$r[nama]</td>
            <td>$r[tanggal]</td>
            <td>$r[tgl_transaksi]</td>
            <td align='right'>Rp. ".number_format($r[jumlah],2,',','.')."</td>
            <td>$r[nama_bank]</td>
            <td>$r[kode_transfer]</td>
            <td>$r[type]</td>
        </tr>";
        $no++;
    }
    ?>
</table>
