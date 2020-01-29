<!DOCTYPE>
<html>
<head>
    <title>Klola</title>
    <link rel="icon" href="<?=base_url()?>img/Untitled-3.png" type="image">
</head>
<body style="font-family: lato">
        <div style="border: solid 1px; width: 700px">
            <div style="margin: 20px;">
                <img src="<?=base_url().'img/Untitled-1.png'?>" style="width: 100px;"/>
                <hr>
                <p>ID ORDER : <?= $print->result()[0]->id; ?></p>
                <hr>
                <table border="0">
                    <tr>
                        <td style="width: 230px;">SiCepat</td>
                        <td style="width: 230px;">Berat</td>
                        <td style="width: 230px;">Ongkir</td>
                    </tr>
                    <tr>
                        <td style="width: 230px;"><p style="font-weight: bold;">Reg</p></td>
                        <td style="width: 230px;"><p style="font-weight: bold;">0.5 Kg</p></td>
                        <td style="width: 230px;"><p style="font-weight: bold;">Rp 12.000</p></td>
                    </tr>
                </table>
                <hr>
                <table border="0">
                    <tr>
                        <td style="width: 350px;">Kepada: </td>
                        <td style="width: 350px; padding-left: 15px;">Dari:</td>
                    </tr>
                    <tr>
                        <td style="width: 350px;"><p style="font-weight: bold;"><?= $print->result()[0]->pelanggan_nama; ?></p></td>
                        <td style="width: 350px; padding-left: 15px;"><p style="font-weight: bold;"><?= $this->session->userdata('nama') ?></p></td>
                    </tr>
                    <tr>
                        <td style="width: 350px; text-align: left; vertical-align: top;">Jl. Sukasari No 63, Coblong Dago Bandung Jawa Barat Indonesia 12345</td>
                        <td style="width: 350px; text-align: left; vertical-align: top; padding-left: 15px;"><?= $this->session->userdata('hp') ?></td>
                    </tr>
                    <tr>
                        <td style="width: 350px;">081234567899</td>
                        <td style="width: 350px; padding-left: 15px;"></td>
                    </tr>
                </table>
                <hr>
<!--                 <table border="0">
                    <tr>
                        <td style="width: 350px;"><p style="font-weight: bold;">Produk</p></td>
                        <td style="width: 350px; padding-left: 20px;"><p style="font-weight: bold;">Qty</p></td>
                    </tr>
                    <tr>
                        <td style="width: 350px;">Nama Produk</td>
                        <td style="width: 350px; padding-left: 20px;">10</td>
                    </tr>
                </table> -->
            </div>
        </div>
</body>
</html>