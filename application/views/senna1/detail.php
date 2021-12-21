<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Author - SenNovel </title>
        <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
        <!-- Favicon icon -->
        <link href="<?php echo base_url('templates/img/favicon.jpg'); ?>" rel="icon">
        <link rel="stylesheet" href="<?= base_url('templates/senna/vendor/owl-carousel/css/owl.carousel.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('templates/senna/vendor/owl-carousel/css/owl.theme.default.min.css');?>">
        <link href="<?= base_url('templates/senna/vendor/jqvmap/css/jqvmap.min.css');?>" rel="stylesheet">
        <link href="<?= base_url('templates/senna/css/style.css')?>" rel="stylesheet">    
    </head>

    <body>

        <!--*******************
            Preloader start
        ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!--*******************
            Preloader end
        ********************-->


        <!--**********************************
            Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
                Nav header start
            ***********************************-->
            <div class="nav-header">
                <a href="<?php echo site_url('senna/dashboard'); ?>" class="brand-logo">
                    <!-- <img class="logo-abbr" src="<?= base_url('templates/senna/images/emblem.png');?>" alt=""> -->
                    <h2 class="logo-abbr" style="color:#fff;">SN</h2>
                    <h3 class="brand-title" style="color:#fff;">SenNovel</h3>
                    <!-- <img class="logo-compact" src="<?= base_url('templates/senna/images/logo-text.png'); ?>" alt=""> -->
                    <!-- <img class="brand-title" src="<?= base_url('templates/senna/images/logo-text.png'); ?>" alt=""> -->
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
                Nav header end
            ***********************************-->

            <!--**********************************
                Header start
            ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">                            
                            </div>
                            <ul class="navbar-nav header-right">                                
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <i class="mdi mdi-account"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="<?php echo site_url('senna/profile'); ?>" class="dropdown-item">
                                            <i class="icon-user"></i>
                                            <span class="ml-2">Profile </span>
                                        </a>
                                        <!-- <a href="./email-inbox.html" class="dropdown-item">
                                            <i class="icon-envelope-open"></i>
                                            <span class="ml-2">Inbox </span>
                                        </a> -->
                                        <a href="<?php echo site_url('auth/logout'); ?>" class="dropdown-item">
                                            <i class="icon-key"></i>
                                            <span class="ml-2">Logout </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                        <li><a href="<?php echo site_url('senna/dashboard'); ?>" aria-expanded="false">
                            <i class="icon icon-home"></i><span class="nav-text">Dashboard</span></a>
                            <!-- <ul aria-expanded="false">
                                <li><a href="./index.html">Dashboard 1</a></li>
                                <li><a href="./index2.html">Dashboard 2</a></li>
                            </ul> -->
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon icon-book-open-2"></i><span class="nav-text">Daftar Buku</span></a>
                                <ul aria-expanded="false">
                                    <?php
                                        foreach ($book as $book) {
                                    ?>
                                        <li><a href="<?php echo site_url('senna/dashboard/detail/'.$book['id']); ?>"><?= $book["judul"];?></a></li>
                                    <?php } ?>
                                    <li>
                                        <a data-toggle="modal" data-target=".bd-example-modal-lg"><i class="icon icon-window-add"></i><span class="nav-text">Tambah Buku</span></a>
                                    </li>                            
                                </ul>                           
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                    class="icon icon-settings-gear-64"></i><span class="nav-text">Setting</span></a>
                            <ul aria-expanded="false">
                                <li><a href="./app-profile.html">Profile</a></li>
                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                    <ul aria-expanded="false">
                                        <li><a href="./email-compose.html">Compose</a></li>
                                        <li><a href="./email-inbox.html">Inbox</a></li>
                                        <li><a href="./email-read.html">Read</a></li>
                                    </ul>
                                </li>                                
                            </ul>
                        </li>
                    </ul>
                </div>


            </div>
            <!--**********************************
                Sidebar end
            ***********************************-->

            <!--**********************************
                Content body start
            ***********************************-->
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12"> 
                            <img src="<?php echo base_url(); ?>templates/img/books/<?php echo $detail[0]["cover"]; ?>" alt="<?= $detail[0]["judul"];?>" height="256" class="cover cover-xlg edit-cover">                        
                        </div>
                        <div class="col-lg-8 col-lg-offset-1 col-sm-12 col-md-8 col-md-offset-1">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-pills mb-4">
                                        <li class=" nav-item">
                                            <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Detail Cerita</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Daftar Isi</a>
                                        </li>                                        
                                    </ul>
                                    <div class="tab-content">
                                        <div id="navpills-1" class="tab-pane active">                                                                  
                                            <div class="row">
                                                <div class="col-md-3" style=" float: left; width: 25%; margin-top: 6px;">
                                                    <label for="judul" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Judul</h5></label>
                                                </div>
                                                <div class="col-md-9" style=" float: left; width: 75%; margin-top: 6px;">
                                                    <!-- <input type="text" id="judul" name="judul" placeholder="Cerita Tak Berjudul" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;" value="<?= $detail[0]["judul"];?>" readonly> -->
                                                    <h5 style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"><?= $detail[0]["judul"];?></h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3" style=" float: left; width: 25%; margin-top: 6px;">
                                                    <label for="author" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Author</h5></label>
                                                </div>
                                                <div class="col-md-9" style=" float: left; width: 75%; margin-top: 6px;">
                                                    <!-- <input type="text" id="author" name="author" placeholder="Nama Penulis" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;" value="<?= $detail[0]["author"];?>" readonly> -->
                                                    <h5 style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"><?= $detail[0]["author"];?></h5>
                                                </div>
                                            </div>                                            
                                            <div class="row">
                                                <div class="col-md-3" style=" float: left; width: 25%; margin-top: 6px;">
                                                    <label for="genre" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Genre</h5></label>
                                                </div>
                                                <div class="col-md-9" style=" float: left; width: 75%; margin-top: 6px;">
                                                    <!-- <input type="text" id="author" name="author" placeholder="Nama Penulis" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;" value="<?= $detail[0]["genre"];?>" readonly> -->
                                                    <h5 style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"><?= $detail[0]["genre"];?></h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3" style=" float: left; width: 25%; margin-top: 6px;">
                                                    <label for="sinopsis" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Sinopsis</h5></label>
                                                </div>
                                                <div class="col-md-9" style=" float: left; width: 75%; margin-top: 6px;">
                                                    <!-- <textarea id="sinopsis" placeholder="Tuliskan Deskripsi Cerita" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; height:200px" readonly><?= $detail[0]["sinopsis"];?></textarea> -->
                                                    <h5 style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"><?= $detail[0]["sinopsis"];?></h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3" style=" float: left; width: 25%; margin-top: 6px;">
                                                    <label for="genre" style="padding: 12px 12px 12px 0; display: inline-block;" readonly><h5>Status</h5></label>
                                                </div>
                                                <div class="col-md-9" style=" float: left; width: 75%; margin-top: 6px;">
                                                    <!-- <input type="text" id="author" name="author" placeholder="Nama Penulis" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;" value="<?= $detail[0]["status"];?>" readonly> -->
                                                    <h5 style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"><?= $detail[0]["status"];?></h5>
                                                </div>
                                            </div>
                                            <div class="row" style="float:right; margin-right: 1px;">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon icon-simple-remove"></i> Hapus</button>
                                                &nbsp;
                                                <button type="button" data-toggle="modal" data-target="#edit-book" class="btn btn-success"><i class="icon icon-edit-72"></i> Edit Detail</button>
                                            </div>                                               
                                        </div>
                                        <div id="navpills-2" class="tab-pane">
                                            <a href="<?= site_url('senna/post/new_chapter/'.$detail[0]["id"])?>">
                                            <button type="button" class="btn btn-rounded btn-primary" style="margin-bottom: 10px;">
                                                <span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                                            </span>Chapter Baru</button></a>
                                            <?php
                                                foreach ($detail as $key => $val) {
                                                    echo '<div class="part-list text-left" style="text-align: left;">
                                                            <div class="story-part" id="" style="padding: 15px 0; border-top: solid 1px #eee; color: #6f6f6f;">
                                                                <div class="part-meta vcenter" style="width: calc(95% - 28px - 24px - 24px - 62px); display: inline-block; vertical-align: middle; float: none;">
                                                                    <div class="part-name col-xs-12" style="margin-bottom: 6px; width: 100%; float: left; position: relative; min-height: 1px; padding-left: 10px; padding-right: 10px;">
                                                                        <a href="#" class="auto-shorten on-navigate" style="font-size: 18px; color: #222; font-weight: 700; text-decoration: none; background: 0 0; cursor: pointer;">'.$val["judul_chapters"].'</a>
                                                                    </div>
                                                                    <div class="part-detail">
                                                                        <div class="col-xs-10 col-sm-5" style="position: relative; min-height: 1px; padding-left: 10px; padding-right: 10px;">
                                                                            <span class="publish-stated" style="color: #00b2b2; font-size: 14px;">'.$val["type"].'</span>
                                                                            <span> - '.date("d F Y", strtotime($val["tanggal"])).' </span>
                                                                        </div>                                                            
                                                                    </div>
                                                                </div>
                                                                <div class="basic-dropdown" style="float: right;">
                                                                    <div class="dropdown">
                                                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                                                                            More Menu
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="'.site_url('welcome/read/').$val["id_chapter"].'"><i class="icon icon-e-reader"></i> Preview</a>                                                                    
                                                                            <a class="dropdown-item" href="'.site_url('senna/post/edit_chapter/'.$val['id_chapter']).'"><i class="icon icon-edit-72"></i> Edit</a>
                                                                            <a class="dropdown-item" href="#"><i class="icon icon-circle-remove"></i> Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                    
                                                            </div>
                                                        </div>';
                                                }
                                            ?>                                                                                                                                                                                                            
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
                Content body end
            ***********************************-->


            <!--**********************************
                Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                    <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
                </div>
            </div>
            <!--**********************************
                Footer end
            ***********************************-->            
        </div>
        <!-- Modal Tambah Buku -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Book</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('senna/post/new_story');?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container" style=" border-radius: 5px; background-color: #fff; padding: 20px;">
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="judul" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Judul</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <input type="text" id="judul" name="judul" placeholder="Cerita Tak Berjudul" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="author" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Author</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <input type="text" id="author" name="author" placeholder="Nama Penulis" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="cover" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Cover</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <input type="file" id="cover" name="cover" placeholder="Choose Your Cover" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="genre" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Genre</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <select id="genre" name="genre" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;">
                                            <option value="">~ Pilih Genre ~</option>
                                            <option value="Fan Fiction">Fan Fiction</option>
                                            <option value="Romance">Romance</option>
                                            <option value="Fantasy">Fantasy</option>
                                            <option value="Action">Action</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="sinopsis" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Sinopsis</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <textarea id="sinopsis" name="sinopsis" placeholder="Tuliskan Deskripsi Cerita" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; height:200px"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="genre" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Status</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <select id="status" name="status" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;">
                                            <option value="">~ Status ~</option>
                                            <option value="Complete">Complete</option>
                                            <option value="OnGoing">OnGoing</option>
                                        </select>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Modal edit Buku -->
        <div class="modal fade bd-example-modal-lg" id="edit-book" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Detail Buku</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('senna/post/edit_book');?>" method="post">
                        <div class="modal-body">
                            <div class="container" style=" border-radius: 5px; background-color: #fff; padding: 20px;">
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="judul" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Judul</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <input type="text" id="judul" name="judul" placeholder="Cerita Tak Berjudul" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;" value="<?= $detail[0]["judul"];?>">
                                        <input type="hidden" id="id" name="id" placeholder="Cerita Tak Berjudul" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;" value="<?= $detail[0]["id"];?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="author" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Author</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <input type="text" id="author" name="author" placeholder="Nama Penulis" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;" value="<?= $detail[0]["author"];?>">
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="genre" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Genre</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <input type="text" id="genre" name="genre" placeholder="Genre Buku" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;" value="<?= $detail[0]["genre"];?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="sinopsis" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Sinopsis</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <textarea id="content" name="sinopsis" placeholder="Tuliskan Deskripsi Cerita" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; height:200px"><?= $detail[0]["sinopsis"];?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                        <label for="genre" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Status</h5></label>
                                    </div>
                                    <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                        <input type="text" id="status" name="status" placeholder="Status Buku" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;" value="<?= $detail[0]["status"];?>">
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
        <!--**********************************
            Main wrapper end
        ***********************************-->  
          
        <!--**********************************
            Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="<?= base_url('templates/senna/vendor/global/global.min.js');?>"></script>
        <script src="<?= base_url('templates/senna/js/quixnav-init.js')?>"></script>
        <script src="<?= base_url('templates/senna/js/custom.min.js'); ?>"></script>


        <!-- Vectormap -->
        <script src="<?= base_url('templates/senna/vendor/raphael/raphael.min.js'); ?>"></script>
        <script src="<?= base_url('templates/senna/vendor/morris/morris.min.js'); ?>"></script>


        <script src="<?= base_url('templates/senna/vendor/circle-progress/circle-progress.min.js'); ?>"></script>
        <script src="<?= base_url('templates/senna/vendor/chart.js/Chart.bundle.min.js'); ?>"></script>

        <script src="<?= base_url('templates/senna/vendor/gaugeJS/dist/gauge.min.js'); ?>"></script>

        <!--  flot-chart js -->
        <script src="<?= base_url('templates/senna/vendor/flot/jquery.flot.js'); ?>"></script>
        <script src="<?= base_url('templates/senna/vendor/flot/jquery.flot.resize.js'); ?>"></script>

        <!-- Owl Carousel -->
        <script src="<?= base_url('templates/senna/vendor/owl-carousel/js/owl.carousel.min.js'); ?>"></script>

        <!-- Counter Up -->
        <script src="<?= base_url('templates/senna/vendor/jqvmap/js/jquery.vmap.min.js'); ?>"></script>
        <script src="<?= base_url('templates/senna/vendor/jqvmap/js/jquery.vmap.usa.js'); ?>"></script>
        <script src="<?= base_url('templates/senna/vendor/jquery.counterup/jquery.counterup.min.js'); ?>"></script>


        <script src="<?= base_url('templates/senna/js/dashboard/dashboard-1.js'); ?>"></script>
        <script>
            var config = {
            "toolbarGroups" :
                [
                    { name:'document', group: ['mode', 'document', 'doctools' ]},
                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ]},
                    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                    { name: 'forms', groups: [ 'forms' ] },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                    { name: 'links', groups: [ 'links' ] },
                    { name: 'insert', groups: [ 'insert' ] },
                    { name: 'styles', groups: [ 'styles' ] },
                    { name: 'colors', groups: [ 'colors' ] },
                    { name: 'tools', groups: [ 'tools' ] },
                    { name: 'others', groups: [ 'others' ] },
                    { name: 'about', groups: [ 'about' ] }
                ],
                "removeButtons": 'Source,Image,Save,NewPage,ExportPdf,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,BGColor,Maximize,ShowBlocks'
            };
            CKEDITOR.replace('sinopsis', config);

            var config = {
            "toolbarGroups" :
                [
                    { name:'document', group: ['mode', 'document', 'doctools' ]},
                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ]},
                    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                    { name: 'forms', groups: [ 'forms' ] },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                    { name: 'links', groups: [ 'links' ] },
                    { name: 'insert', groups: [ 'insert' ] },
                    { name: 'styles', groups: [ 'styles' ] },
                    { name: 'colors', groups: [ 'colors' ] },
                    { name: 'tools', groups: [ 'tools' ] },
                    { name: 'others', groups: [ 'others' ] },
                    { name: 'about', groups: [ 'about' ] }
                ],
                "removeButtons": 'Source,Image,Save,NewPage,ExportPdf,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,BGColor,Maximize,ShowBlocks'
            };
            CKEDITOR.replace('content', config);
        </script>

    </body>

</html>