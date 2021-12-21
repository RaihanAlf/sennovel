<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>SenNovel</title>
        <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
        <!-- Favicons -->
        <link href="<?php echo base_url('templates/img/favicon.jpg'); ?>" rel="icon">
        <link href="<?php echo base_url('templates/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo base_url('templates/assets/aos/aos.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/remixicon/remixicon.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
        
        <!-- Template Main CSS File -->
        <link href="<?php echo base_url('templates/css/main.css'); ?>" rel="stylesheet">
        <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
        <!-- <style type="text/css">
            * {
            box-sizing: border-box;
            }

            input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            }

            label {
            padding: 12px 12px 12px 0;
            display: inline-block;
            }

            input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            }

            input[type=submit]:hover {
            background-color: #45a049;
            }

            .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            }

            .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
            }

            .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
            }
        </style> -->
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="<?php echo site_url('welcome'); ?>"><span>Sen</span>Novel</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo site_url('welcome'); ?>">Home</a></li>
                    <li><a class="nav-link scrollto active" href="<?php echo site_url('senna/stories/new_story'); ?>">tes</a></li>
                    <li class="dropdown"><a href="#"><span>Stories</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#">Fantasy <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="<?php echo site_url(''); ?>">I'll Live Until The End</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Fan Fiction <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="<?php echo site_url('Stories/third'); ?>">Tensura FanFic</a></li>
                                    <li><a href="#">The Cry of War</a></li>
                                    <li><a href="<?php echo site_url('Stories/first'); ?>">Stuck With You</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Romance <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">His Queen</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('welcome/action'); ?>">Action</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="<?php echo site_url('senna/stories/new_story'); ?>"><i class="bi bi-plus-lg" style="margin-right: 10px;"></i>New Story</a></li> -->
                    <li>
                        <a data-bs-toggle="modal" data-bs-target="#new_story">
                            <i class="bi bi-plus-lg" style="margin-right: 10px;"></i>New Story
                        </a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="<?php echo site_url('auth/logout'); ?>" class="get-started-btn scrollto">Sign Out</a>
            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container" data-aos="zoom-out" data-aos-delay="100">
                <div class="row">
                    <div class="col-xl-6">
                        <h1>Welcome Author</h1>
                        <h2>Will there be a new story today? or there be a new chapter?</h2>
                        <h2>It's time to work! Let's pour all your creativity into your books</h2>
                        <a href="#team" class="btn-get-started scrollto">Books List</a>
                    </div>
                </div>
            </div>
        </section><!-- End Hero -->

        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Book</h2>
                <p>Here is some of my current books</p>
                </div>

                <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="<?php echo base_url('templates/img/books/book1.png'); ?>" class="img-fluid" alt="">
                        <div class="social">
                        <a href="https://www.wattpad.com/story/280986042-stuck-with-you" target="_blank"><span class="iconify" data-icon="simple-icons:wattpad"></span></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Stuck With You</h4>
                        <span>Status : Ongoing</span>
                        <a href="<?php echo site_url('Stories/first'); ?>" class="btn btn-danger" style="float: right; margin-bottom: 10px;">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="<?php echo base_url('templates/img/books/book2.png'); ?>" class="img-fluid" alt="">
                        <div class="social">
                        <a href="https://www.wattpad.com/story/282418939-the-cry-of-war" target="_blank"><span class="iconify" data-icon="simple-icons:wattpad"></span></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>The Cry of War</h4>
                        <span>Status : Ongoing</span>
                        <a href="<?php echo site_url('Stories/second'); ?>" class="btn btn-danger" style="float: right; margin-bottom: 10px;">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="<?php echo base_url('templates/img/books/book4.jpeg'); ?>" class="img-fluid" alt="">
                        <div class="social">
                        <a href="https://www.wattpad.com/story/273717348-this-time-i-will-save-you-my-queen-tensura-fanfic" target="_blank"><span class="iconify" data-icon="simple-icons:wattpad"></span></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>This Time I Will Save You My Queen</h4>
                        <span>Status : Ongoing</span>
                        <a href="<?php echo site_url('Stories/third_info'); ?>" class="btn btn-danger" style="float: right; margin-bottom: 10px;">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="<?php echo base_url('templates/img/books/book4.jpg'); ?>" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>The Cry of War</h4>
                        <span>Status : Ongoing</span>
                    </div>
                    </div>
                </div> -->

                </div>

            </div>
        </section>

         <!-- ======= Footer ======= -->
        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>R.Novel</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                   
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
        </footer>

        <!-- Full screen modal -->
        <div class="modal fade" id="new_story" tabindex="-1">
            <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Story</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container" style=" border-radius: 5px; background-color: #fff; padding: 20px;">
                            <form action="<?= base_url('senna/post/new_story');?>" method="post" enctype="multipart/form-data">
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
                                <br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="<?php echo base_url('templates/assets/aos/aos.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/glightbox/js/glightbox.min.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/php-email-form/validate.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/purecounter/purecounter.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/swiper/swiper-bundle.min.js'); ?>"></script>

        <!-- Template Main JS File -->
        <script src="<?php echo base_url('templates/js/main.js'); ?>"></script>
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
        </script>
    </body>
</html>