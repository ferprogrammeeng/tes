<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume - Start Bootstrap Theme</title>
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script type="text/javascript">
        function init() {
            var info_window = new google.maps.InfoWindow();

            // menentukan level zoom
            var zoom = 13;

            // menentikan latitude dan longitude
            var pos = new google.maps.LatLng(0.45966, 101.410347);

            // menentukan opsi peta
            var options = {
                center: pos,
                zoom: zoom,
                mapTypeId: google.maps.MapTypeId.HYBRID,
            };

            // membuat peta
            var map = new google.maps.Map(document.getElementById('map'), options);

            info_window = new google.maps.InfoWindow({
                content: 'loading...',
            });

            // menampung lokasi dalam 1 array
            var lokasi = [
                ['Kost Putri 4 bersaudara', 0.4778591953872022, 101.37374725109986],
                ['Alfa Kos', 0.47503928206457596, 101.37257067595861],
                ['Kost Putri Kamboja Unri', 0.4817393791441927, 101.37472506639598],
                ['Kost Putri ARNI', 0.46906772605703195, 101.37199008307414],
                ['Kost Panamp Raya', 0.4724688694280787, 101.3846599958255],
                ['Kost Syariah Panam', 0.47274482234524356, 101.38778684708456],
                ['Kost Putri Muslimah', 0.46369206968047244, 101.38339878062907],
                ['Kost Panam ALKahfi Pekanbaru', 0.46224873610399314, 101.3835224989752],
                ['OYO 91642 Fhazel Residence Syariah', 0.4628673076727357, 101.38579066865418],
                ['De,Kost  Panam', 0.46336216488889387, 101.39086312084535],
                ['Zifer Kost Panam', 0.46534159340750775, 101.39828622161292],
                ['Kost Pria', 0.4594252944398629, 101.37564520069807],
                ['Kost Nasya 1', 0.45762290777985504, 101.38470033854267],
                ['Kost Putri Rumah Panam', 0.4744022522659213, 101.39770368770841],
                ['Kost Putri Jingga Kampar', 0.4692359207731749, 101.36302153224024],
                ['Kost Putri Mandala', 0.46142689430991674, 101.36971288025222],
                ['Kost Putra Rizki', 0.4586156755514466, 101.35314814051115],
            ];

            // meloop lokasi
            for (var i = 0; i < lokasi.length; i++) {
                var lat_lng = new google.maps.LatLng(lokasi[i][1], lokasi[i][2]);

                // membuat marker
                var marker = new google.maps.Marker({
                    position: lat_lng,
                    map: map,
                    title: lokasi[i][0],
                    animation: google.maps.Animation.BOUNCE,
                });

                // menambahkan event ketita marker di klik
                google.maps.event.addListener(marker, 'click', function() {
                    info_window.setContent('<b>' + this.title + '</b>');
                    info_window.open(map, this);
                });
            }

        }

        google.maps.event.addDomListener(window, 'load', init);
    </script>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        #map {
            height: 500px;
            width: 500px;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/rmh.jpg" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Pemetaan Wailayah Panam</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Daftar Jual</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Daftar Sewa</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    SIG
                    <span class="text-primary">Pencarian</span>
                    Perumahan
                    <span class="text-primary">Pekanbaru</span>
                </h1>
                <div class="subheading mb-5">
                </div>
                <p class="lead mb-5">Aplikasi ini menyediakan lokasi pencarian,penjualan dan penyewaan di wilayah Pekanbaru dan sekitarnya</p>
                <div class="social-icons">
                    <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Lokasi Wilayah Pekanbaru</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1" id="map">

                    </div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
       
        <hr class="m-0" />
        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">Interests</h2>
                <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
                <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Awards & Certifications</h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Google Analytics Certified Developer
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Mobile Web Specialist - Google Certification
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - University of Colorado Boulder - Emerging Tech Competition 2009
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        2
                        <sup>nd</sup>
                        Place - University of Colorado Boulder - Emerging Tech Competition 2008
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - James Buchanan High School - Hackathon 2006
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        3
                        <sup>rd</sup>
                        Place - James Buchanan High School - Hackathon 2005
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>