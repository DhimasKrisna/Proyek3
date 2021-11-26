<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include tag META disini -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> <?= $title ?> </title>

    <!-- personal css -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/userLayanan/pengajuan.css">

    <!-- bootstrap css -->
    <link href="<?= base_url('') ?>assets/css/bootstrap.css" rel="stylesheet" />

    <!-- sb admin -->
    <link href="<?= base_url() ?>assets/css/admin/sb-admin-2.min.css" rel="stylesheet" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jquery -->
    <!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <?php
    $this->db->from('layanan_pertanyaan');
    $jumlah_pertanyaan = $this->db->count_all_results();
    ?>

    <script>
        function validate() {
            var output = true;
            $(".signup-error").html('');

            if ($("#personal-field").css('display') != 'none') {
                if (!($("#name").val())) {
                    output = false;
                    $("#name-error").html("Name harus diisi!");
                    console.log(output)
                }
                if (!($("#instansi").val())) {
                    output = false;
                    $("#instansi-error").html("Universitas/Instansi/Lembaga harus diisi!");
                    console.log(output)
                }
                if (!($("#alamat").val())) {
                    output = false;
                    $("#alamat-error").html("Alamat Rumah harus diisi!");
                    console.log(output)
                }
                if (!($("#jurusan").val())) {
                    output = false;
                    $("#jurusan-error").html("Jurusan/Program harus diisi!");
                    console.log(output)
                }
                if (!($("#status").val())) {
                    output = false;
                    $("#status-error").html("Status harus diisi!");
                    console.log(output)
                }
                if (!($("#NIK").val())) {
                    output = false;
                    $("#NIK-error").html("NIP/NIM/NIK harus diisi!");
                    console.log(output)
                }
                if (!($("#perihal").val())) {
                    output = false;
                    $("#perihal-error").html("Perihal Penelitian harus diisi!");
                    console.log(output)
                }
                if (!($("#waktu_mulai_penelitian").val())) {
                    output = false;
                    $("#waktu_penelitian-error").html("Waktu/Lama Penelitian harus diisi!");
                    console.log(output)
                }
                if (!($("#waktu_selesai_penelitian").val())) {
                    output = false;
                    $("#waktu_penelitian-error").html("Waktu/Lama Penelitian harus diisi!");
                    console.log(output)
                }
                if (!($("#lokasi_penelitian").val())) {
                    output = false;
                    $("#lokasi_penelitian-error").html("Lokasi/Tempat Penelitian harus diisi!");
                    console.log(output)
                }
                if (!($("#tembusan_surat").val())) {
                    output = false;
                    $("#tembusan_surat-error").html("Tembusan Surat harus diisi!");
                    console.log(output)
                }
                if (!($("#anggota_tim").val())) {
                    output = false;
                    $("#anggota_tim-error").html("Anggota Tim Peneliti harus diisi!");
                    console.log(output)
                }
                return output;
            }

            if ($("#upload-field").css('display') != 'none') {
                if (!($("#berkas").val())) {
                    output = false;
                    $("#berkas-error").html("Berkas harus diisi!");
                }

                return output;
            }

            if ($("#kuisioner-field").css('display') != 'none') {
                if (!($("#umur_responden").val())) {
                    output = false;
                    $("#umur_responden-error").html("Umur harus diisi!");
                }
                return output;
            }
        }

        $(document).ready(function() {
            $("#next").click(function() {
                var output = validate();
                if (output === true) {
                    var current = $(".active");
                    var next = $(".active").next("li");
                    if (next.length > 0) {
                        $("#" + current.attr("id") + "-field").hide();
                        $("#" + next.attr("id") + "-field").show();
                        $("#back").show();
                        $("#finish").hide();
                        $(".active").removeClass("active");
                        next.addClass("active");
                        if ($(".active").attr("id") == $("li").last().attr("id")) {
                            $("#next").hide();
                            $("#finish").show();
                        }
                    }
                }
            });

            $("#back").click(function() {
                var current = $(".active");
                var prev = $(".active").prev("li");
                if (prev.length > 0) {
                    $("#" + current.attr("id") + "-field").hide();
                    $("#" + prev.attr("id") + "-field").show();
                    $("#next").show();
                    $("#finish").hide();
                    $(".active").removeClass("active");
                    prev.addClass("active");
                    if ($(".active").attr("id") == $("li").first().attr("id")) {
                        $("#back").hide();
                    }
                }
            });

            $("input#finish").click(function(e) {
                var output = validate();
                var current = $(".active");
                console.log(output)
                if (output === true) {
                    return true;
                } else {
                    //prevent refresh
                    e.preventDefault();
                    $("#" + current.attr("id") + "-field").show();
                    $("#back").show();
                    $("#finish").show();
                }
            });
        });
    </script>
</head>

<body>