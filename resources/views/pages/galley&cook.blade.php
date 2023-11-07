@extends('layouts.app')

@section('title')
    Galley & Cook | Rhapsody Hospitality Development Center
@endsection

@section('content')
    <div
        class="breadcumb-wrapper"
        style="background: url('/img/breadcumb/breadcumb-bg.png');
            background-repeat: no-repeat;
            background-size: cover;"
    >
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Galley & Cook</h1>
                <p class="breadcumb-text">Executive Class Hybrid</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Galley & Cook</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
      Course Area
  ==============================-->
    <section class="course-details space-top space-extra-bottom">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner mega-hover course-img" data-aos="fade-up"
                     data-aos-duration="1000">
                    <div class="carousel-item active">
                        <img src="/img/course/cook3.jpg" class="d-block w-100" alt="cook1">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/course/cook2.jpg" class="d-block w-100" alt="cook2">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/course/cook1.jpg" class="d-block w-100" alt="cook3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box" data-aos="fade-up" data-aos-duration="1000">
                        <table>
                            <tbody>
                            <tr>
                                <th><i class="far fa-hourglass"></i>Duration:</th>
                                <td>3 Month</td>
                            </tr>
                            <tr>
                                <th><i class="far fa-clock"></i>Weekly Study:</th>
                                <td>3x/week</td>
                            </tr>
                            <tr>
                                <th><i class="fa-solid fa-suitcase"></i>Course Type:</th>
                                <td>Hybrid (online & offline)</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="https://forms.gle/F4qyodkw1TyzhRJ97" class="vs-btn"
                        >Daftar Sekarang</a
                        >
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category" data-aos="fade-right" data-aos-duration="1000">
                        <a href="#">Executive Class Hybrid</a>
                    </div>
                    <h2 class="course-title" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">Galley & Cook</h2>
                    <h5 class="border-title2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">Overview</h5>
                    <p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="150">
                        Galley & Cook adalah program pelatihan Executive yang merupakan
                        trobosan terbaru dari LPK Rhapsody yang dirancang untuk
                        mempersiapkan peserta dengan keterampilan dan pengetahuan yang
                        diperlukan untuk sukses dalam keterampilan memasak profesional
                        serta pengetahuan mendalam tentang operasional galley kapal pesiar
                        atau restoran. peserta akan mendalami berbagai aspek teoritis
                        dalam seni memasak, termasuk teknik memasak, penggunaan
                        bahan-bahan, pengolahan makanan, serta kebersihan dan keselamatan
                        makanan. Mereka juga akan mempelajari tata cara pengelolaan galley
                        atau dapur restoran yang efisien. Pelatihan ini akan memberikan
                        pemahaman yang kokoh agar dapat menjadi koki profesional yang
                        terampil, dan juga pelatihan bahasa inggris industri perhotelan.
                    </p>
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">Pelatihan Singkat untuk Langsung Terjun ke Dunia Kerja</h5>
                    <p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="250">
                        Pelatihan Executive Class ini berlangsung selama 3 bulan, yang
                        mencakup 2 bulan pertama untuk teori, yang dapat diikuti baik
                        secara online maupun offline untuk memberikan fleksibilitas kepada
                        peserta. Setelah menyelesaikan komponen teori selama 2 bulan
                        pertama, peserta akan melanjutkan ke 1 bulan terakhir, yang akan
                        berfokus pada praktek secara offline. Selama periode ini, peserta
                        akan memiliki kesempatan untuk mengaplikasikan pengetahuan yang
                        telah mereka peroleh dalam situasi dunia nyata dan disisipkan
                        dengan pelatihan Technical Interview interview yang berisi
                        pertanyaan terkini yang kami ambil langsung dari mitra-mitra kami
                    </p>
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        Keuntungan yang Kamu Dapatkan Mengikuti Program Executive Class
                    </h5>
                    <p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="350">
                        Kami akan memberikan banyak keuntungan untuk kamu yang mempunyai
                        tekad kuat untuk ingin bekerja di luar negeri, tidak peduli dari
                        latar belakang apa.
                    </p>
                    <div class="list-style1 vs-list" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                        <ul>
                            <li>
                                Sistem pembelajaran yang fleksibel atau dapat diikuti dimana
                                saja
                            </li>
                            <li>
                                Durasi pembelajaran yang singkat untuk langsung terjun ke
                                dunia kerja
                            </li>
                            <li>Sertifikasi profesional untuk melamar kerja</li>
                            <li>Pembayaran tidak harus full diawal</li>
                            <li>
                                Pelatihan Technical Interview dengan Mitra Perhotelan dan
                                Kapal Pesiar
                            </li>
                            <li>
                                Dibimbing dan dilatih oleh instruktur berpengalaman di
                                industri
                            </li>
                            <li>
                                Mendapat peluang untuk langsung bekerja di luar negeri atau
                                kapal pesiar
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="inner-video-box">
                      <img
                        src="assets/img/course/course-details-2.jpg"
                        alt="blog video"
                      />
                      <a
                        href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                        class="play-btn position-center popup-video"
                        ><i class="fas fa-play"></i
                      ></a>
                    </div> -->
                    <!-- <h5 class="border-title2">Syllabus</h5>

                    <div class="accordion accordion-style4" id="faqVersion2">
                      <div class="accordion-item active">
                        <div class="accordion-header" id="headingOne">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="true"
                            aria-controls="collapseOne"
                          >
                            <span class="button-label">Week 1</span>
                            Getting started with Extensive Reading
                          </button>
                        </div>
                        <div
                          id="collapseOne"
                          class="accordion-collapse collapse show"
                          aria-labelledby="headingOne"
                          data-bs-parent="#faqVersion2"
                        >
                          <div class="accordion-body">
                            <div class="syllabus-list">
                              <div class="syllabus-img">
                                <img
                                  src="assets/img/course/course-syllabus-1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">Introduction</h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-img">
                                <img
                                  src="assets/img/course/course-syllabus-2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">
                                  What do you understand by Extensive Reading?
                                </h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">Why Extensive Reading?</h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  illum dolore eu fugiat proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">
                                  Incorporating Extensive Reading
                                </h6>
                                <p class="syllabustext">
                                  lit esse cillum dolore eu ferit in voluptate velit
                                  esse cillum dolore eu fugiat nulla pariatur. Ex
                                  cepteur sint upidatat non illum dolore eu fugiat
                                  proident.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo"
                            aria-expanded="false"
                            aria-controls="collapseTwo"
                          >
                            <span class="button-label">Week 2</span>
                            Practical pre-reading activities with graded readers
                          </button>
                        </div>
                        <div
                          id="collapseTwo"
                          class="accordion-collapse collapse"
                          aria-labelledby="headingTwo"
                          data-bs-parent="#faqVersion2"
                        >
                          <div class="accordion-body">
                            <div class="syllabus-list">
                              <div class="syllabus-img">
                                <img
                                  src="assets/img/course/course-syllabus-1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">Introduction</h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-img">
                                <img
                                  src="assets/img/course/course-syllabus-2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">
                                  What do you understand by Extensive Reading?
                                </h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">Why Extensive Reading?</h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  illum dolore eu fugiat proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">
                                  Incorporating Extensive Reading
                                </h6>
                                <p class="syllabustext">
                                  lit esse cillum dolore eu ferit in voluptate velit
                                  esse cillum dolore eu fugiat nulla pariatur. Ex
                                  cepteur sint upidatat non illum dolore eu fugiat
                                  proident.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingThree">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"
                            aria-expanded="false"
                            aria-controls="collapseThree"
                          >
                            <span class="button-label">Week 3</span>
                            Activities with graded readers
                          </button>
                        </div>
                        <div
                          id="collapseThree"
                          class="accordion-collapse collapse"
                          aria-labelledby="headingThree"
                          data-bs-parent="#faqVersion2"
                        >
                          <div class="accordion-body">
                            <div class="syllabus-list">
                              <div class="syllabus-img">
                                <img
                                  src="assets/img/course/course-syllabus-1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">Introduction</h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-img">
                                <img
                                  src="assets/img/course/course-syllabus-2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">
                                  What do you understand by Extensive Reading?
                                </h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">Why Extensive Reading?</h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  illum dolore eu fugiat proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">
                                  Incorporating Extensive Reading
                                </h6>
                                <p class="syllabustext">
                                  lit esse cillum dolore eu ferit in voluptate velit
                                  esse cillum dolore eu fugiat nulla pariatur. Ex
                                  cepteur sint upidatat non illum dolore eu fugiat
                                  proident.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingFour">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseFour"
                            aria-expanded="false"
                            aria-controls="collapseFour"
                          >
                            <span class="button-label">Week 4</span>
                            Practical post-reading
                          </button>
                        </div>
                        <div
                          id="collapseFour"
                          class="accordion-collapse collapse"
                          aria-labelledby="headingFour"
                          data-bs-parent="#faqVersion2"
                        >
                          <div class="accordion-body">
                            <div class="syllabus-list">
                              <div class="syllabus-img">
                                <img
                                  src="assets/img/course/course-syllabus-1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">Introduction</h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-img">
                                <img
                                  src="assets/img/course/course-syllabus-2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">
                                  What do you understand by Extensive Reading?
                                </h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">Why Extensive Reading?</h6>
                                <p class="syllabustext">
                                  Reprehenderit in voluptate velit esse cillum dolore eu
                                  fugiat nulla pariatur. Ex cepteur sint upidatat non
                                  illum dolore eu fugiat proident.
                                </p>
                              </div>
                            </div>
                            <div class="syllabus-list">
                              <div class="syllabus-content">
                                <h6 class="syllabustitle">
                                  Incorporating Extensive Reading
                                </h6>
                                <p class="syllabustext">
                                  lit esse cillum dolore eu ferit in voluptate velit
                                  esse cillum dolore eu fugiat nulla pariatur. Ex
                                  cepteur sint upidatat non illum dolore eu fugiat
                                  proident.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <h5 class="border-title2" data-aos="fade-right" data-aos-duration="1000">
                        Kapan kamu ingin mengikuti pelatihan ini?
                    </h5>
                    <p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">
                        Ayo daftarkan dirimu sekarang untuk meraih pekerjaan impianmu
                        diluar negeri dan langsung terjun ke dunia kerja dalam waktu yang
                        singkat
                    </p>
                    <a href="https://forms.gle/F4qyodkw1TyzhRJ97" class="vs-btn" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100"
                    >Daftar Sekarang</a
                    >
                    <span class="available-badge" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="150">Available now</span>
                    <!-- <div class="mt-4 pt-lg-2">
                      <h5 class="border-title2">What will you achieve?</h5>
                      <div class="list-style1 vs-list">
                        <ul>
                          <li>
                            Apply extensive reading in the classroom to help students
                            learn English more effectively.
                          </li>
                          <li>
                            Integrate extensive reading into a school learning
                            programme.
                          </li>
                          <li>
                            Identify practical pre-reading activities to get students
                            interested in their graded readers.
                          </li>
                          <li>
                            Identify practical while-reading activities to use with
                            students.
                          </li>
                          <li>
                            Identify practical post-reading activities to use with
                            students.
                          </li>
                        </ul>
                      </div>
                    </div> -->
                    <!-- <h5 class="border-title2">Who will you learn with?</h5>
                    <div
                      class="row vs-carousel gx-40"
                      data-slide-show="2"
                      data-lg-slide-show="2"
                      data-md-slide-show="2"
                      data-sm-slide-show="2"
                      data-center-mode="true"
                    >
                      <div class="col-sm-6 col-lg-4">
                        <div class="team-style1">
                          <div class="team-img">
                            <img
                              class="w-100"
                              src="assets/img/team/team-1-1.jpg"
                              alt="teacher"
                            />
                          </div>
                          <div class="team-content">
                            <div class="team-review">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i
                              ><i class="fas fa-star"></i><i class="fas fa-star"></i
                              ><i class="fas fa-star"></i>
                            </div>
                            <h4 class="team-name">
                              <a href="team-details.html">Thomas Walimes</a>
                            </h4>
                            <p class="team-degi">Science Tutor</p>
                            <p class="team-text">
                              I taught English and trained teachers for a decade then
                              moved into workplace learning
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-4">
                        <div class="team-style1">
                          <div class="team-img">
                            <img
                              class="w-100"
                              src="assets/img/team/team-1-2.jpg"
                              alt="teacher"
                            />
                          </div>
                          <div class="team-content">
                            <div class="team-review">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i
                              ><i class="fas fa-star"></i><i class="fas fa-star"></i
                              ><i class="fas fa-star"></i>
                            </div>
                            <h4 class="team-name">
                              <a href="team-details.html">Nohima Homminu</a>
                            </h4>
                            <p class="team-degi">English Tutor</p>
                            <p class="team-text">
                              I taught English and trained teachers for a decade then
                              moved into workplace learning
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-4">
                        <div class="team-style1">
                          <div class="team-img">
                            <img
                              class="w-100"
                              src="assets/img/team/team-1-3.jpg"
                              alt="teacher"
                            />
                          </div>
                          <div class="team-content">
                            <div class="team-review">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i
                              ><i class="fas fa-star"></i><i class="fas fa-star"></i
                              ><i class="fas fa-star"></i>
                            </div>
                            <h4 class="team-name">
                              <a href="team-details.html">Kaylin Moore</a>
                            </h4>
                            <p class="team-degi">Math Tutor</p>
                            <p class="team-text">
                              I taught English and trained teachers for a decade then
                              moved into workplace learning
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-4">
                        <div class="team-style1">
                          <div class="team-img">
                            <img
                              class="w-100"
                              src="assets/img/team/team-1-4.jpg"
                              alt="teacher"
                            />
                          </div>
                          <div class="team-content">
                            <div class="team-review">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i
                              ><i class="fas fa-star"></i><i class="fas fa-star"></i
                              ><i class="fas fa-star"></i>
                            </div>
                            <h4 class="team-name">
                              <a href="team-details.html">Kaylin Moore</a>
                            </h4>
                            <p class="team-degi">History Tutor</p>
                            <p class="team-text">
                              I taught English and trained teachers for a decade then
                              moved into workplace learning
                            </p>
                          </div>
                        </div>
                      </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
@endsection
