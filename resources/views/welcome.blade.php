@extends('layouts.template-front')
@section('content')
    <div class="banner-image">
        <img src=" {{ asset('frontend/assets/images/pengurus-bso-2021.jpg') }}" class="img-fluid " alt="">
    </div>
    <div class="container-fluid banner ">
        <div class="container text-center">
        <h2>Selamat Datang </h2>
        <h3>di Website BSO HMJTI POLIJE </h3>
        <!-- <h3 class="fst-italic">
            “Bersinergi dari Hati, Berdedikasi untuk TI !”
        </h3> -->
        <h3 class="fst-italic"> <span id="typed" class="typed"></span></h3>
        </div>
    </div>
    <section class="container py-5 header__text h-100 w-100">
        <h1 class="text-center">BSO HMJTI POLIJE</h1>
        <div class="text-center py-2">
            <p>BSO HMJTI adalah badan semi otonom yg berada di kampus bondowoso, bso sendiri adalah tangan kanan dari hmjti yg bertugas untuk mewadahi(kritik dan saran), kegiatan (kegiatan proker) mahasiswa jurusan teknologi informasi yg berada di kampus bondowoso</p>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body header__ketua">
                <div class="d-flex justify-content-center">
                    <img src=" {{ asset('frontend/assets/images/ketua-wakil.jpg') }}" class="img-fluid w-50 mx-auto" alt="">
                </div>
<<<<<<< Updated upstream

              </div>

              <!-- <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3.5 15.75C3.5 8.98451 8.98451 3.5 15.75 3.5H29.75C30.7165 3.5 31.5 4.2835 31.5 5.25C31.5 6.2165 30.7165 7 29.75 7H15.75C10.9175 7 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z"
                  fill="#0EC8F8" />
                <path
                  d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z"
                  fill="#0EC8F8" />
              </svg> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link px-md-3 active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-md-3" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-md-3" href="#">Profil BSO HMJTI</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-md-3" href="#">Struktur Kepengurusan</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <main>
          <div class="banner-image">
            <img src=" {{ asset('frontend/assets/images/pengurus-bso-2021.jpg') }}" class="img-fluid " alt="">
          </div>
          <div class="container-fluid banner ">
            <div class="container text-center">
              <h2>Selamat Datang </h2>
              <h3>di Website BSO HMJTI POLIJE </h3>
              <!-- <h3 class="fst-italic">
                “Bersinergi dari Hati, Berdedikasi untuk TI !”
              </h3> -->
              <h3 class="fst-italic"> <span id="typed" class="typed"></span></h3>
            </div>
          </div>
          <section class="container py-5 header__text h-100 w-100">
              <h1 class="text-center">BSO HMJTI POLIJE</h1>
              <div class="text-center py-2">
                <p>BSO HMJTI adalah badan semi otonom yg berada di kampus bondowoso, bso sendiri adalah tangan kanan dari hmjti yg bertugas untuk mewadahi(kritik dan saran), kegiatan (kegiatan proker) mahasiswa jurusan teknologi informasi yg berada di kampus bondowoso</p>
              </div>
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="card">
                    <div class="card-body header__ketua">
                      <div class="d-flex justify-content-center">
                        <img src=" {{ asset('frontend/assets/images/ketua-wakil.jpg') }}" class="img-fluid w-50 mx-auto" alt="">
                      </div>
                      <div class="container">
                        <div class="row justify-content-md-center">
                          <div class="col col-lg-3">
                            <div class="text-center">
                              <h6 class="">Moch. Fahrony</h6>
                              <p>Ketua BSO HMJTI</p>
                              <small>Periode 2020-2021</small>
                            </div>
                          </div>
                          <div class="col-md-auto">
                          </div>
                          <div class="col col-lg-3">
                            <div class="text-center">
                              <h6 class="">Vita Nada Agustin</h6>
                              <p>Wakil BSO HMJTI</p>
                              <small>Periode 2020-2021</small>
                            </div>
                          </div>
=======
                <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="col col-lg-3">
                        <div class="text-center">
                        <h6 class="">Moch. Fahrony</h6>
                        <p>Ketua BSO HMJTI</p>
                        <small>Periode 2020-2021</small>
>>>>>>> Stashed changes
                        </div>
                    </div>
                    <div class="col-md-auto">
                    </div>
                    <div class="col col-lg-3">
                        <div class="text-center">
                        <h6 class="">Vita Nada Agustin</h6>
                        <p>Wakil BSO HMJTI</p>
                        <small>Periode 2020-2021</small>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section class="container header__divisi">
        <div class="row">
        <div class="col-lg-7 col-md-12 p-4 d-flex mx-auto">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3 p-3 text-center">
                    <svg width="99" height="98" viewBox="0 0 99 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M49.2751 98C76.337 98 98.2751 76.062 98.2751 49C98.2751 21.938 76.337 0 49.2751 0C22.2131 0 0.275085 21.938 0.275085 49C0.275085 76.062 22.2131 98 49.2751 98Z" fill="url(#paint0_linear_9_243)"/>
                    <path d="M68.7105 31.3059H30.3005C29.282 31.3063 28.3052 31.7111 27.585 32.4313C26.8648 33.1515 26.46 34.1283 26.4596 35.1469V63.3154C26.46 64.334 26.8648 65.3107 27.585 66.0309C28.3052 66.7512 29.282 67.156 30.3005 67.1563H68.7105C69.7291 67.156 70.7059 66.7512 71.4261 66.0309C72.1463 65.3107 72.5511 64.334 72.5515 63.3154V35.1469C72.5511 34.1283 72.1463 33.1515 71.4261 32.4313C70.7059 31.7111 69.7291 31.3063 68.7105 31.3059ZM68.7105 63.3154H30.3005V35.1469H68.7105V63.3154ZM43.1011 49.2311C44.1142 49.2318 45.1047 48.9319 45.9474 48.3695C46.7901 47.8071 47.447 47.0074 47.8351 46.0716C48.2232 45.1358 48.325 44.1059 48.1277 43.1122C47.9304 42.1185 47.4428 41.2057 46.7265 40.4891C46.0103 39.7726 45.0977 39.2846 44.1041 39.0868C43.1105 38.889 42.0806 38.9904 41.1446 39.3781C40.2086 39.7658 39.4086 40.4223 38.8458 41.2647C38.283 42.1071 37.9827 43.0975 37.9829 44.1106C37.9844 45.4684 38.5245 46.7701 39.4846 47.7301C40.4448 48.6901 41.7466 49.2299 43.1043 49.2311H43.1011ZM35.936 59.4744H50.2745C50.7158 59.5066 51.1519 59.3632 51.488 59.0755C51.8241 58.7877 52.0329 58.3788 52.069 57.9379V56.4013C52.069 53.8589 49.6602 51.7921 46.6915 51.7921C45.8271 51.7921 45.1952 52.4323 43.1067 52.4323C40.9539 52.4323 40.4338 51.7921 39.5218 51.7921C36.5531 51.7921 34.1443 53.8565 34.1443 56.4013V57.9379C34.1804 58.3783 34.3888 58.7867 34.7243 59.0744C35.0598 59.3621 35.4952 59.5059 35.936 59.4744ZM55.2684 54.3525H64.2307C64.4004 54.3521 64.563 54.2845 64.6829 54.1645C64.8029 54.0445 64.8705 53.882 64.871 53.7123V52.4314C64.8705 52.2617 64.8029 52.0992 64.6829 51.9792C64.563 51.8592 64.4004 51.7916 64.2307 51.7911H55.2684C55.0987 51.7916 54.9361 51.8592 54.8162 51.9792C54.6962 52.0992 54.6286 52.2617 54.6281 52.4314V53.7118C54.6285 53.8816 54.696 54.0443 54.816 54.1643C54.936 54.2844 55.0986 54.3521 55.2684 54.3525ZM55.2684 49.2311H64.2307C64.4004 49.2306 64.563 49.163 64.6829 49.0431C64.8029 48.9231 64.8705 48.7605 64.871 48.5909V47.3104C64.8705 47.1408 64.8029 46.9782 64.6829 46.8582C64.563 46.7383 64.4004 46.6707 64.2307 46.6702H55.2684C55.0987 46.6707 54.9361 46.7383 54.8162 46.8582C54.6962 46.9782 54.6286 47.1408 54.6281 47.3104V48.5909C54.6286 48.7605 54.6962 48.9231 54.8162 49.0431C54.9361 49.163 55.0987 49.2306 55.2684 49.2311ZM55.2684 44.1097H64.2307C64.4004 44.1092 64.563 44.0416 64.6829 43.9216C64.8029 43.8017 64.8705 43.6391 64.871 43.4695V42.189C64.8705 42.0193 64.8029 41.8568 64.6829 41.7368C64.563 41.6169 64.4004 41.5492 64.2307 41.5488H55.2684C55.0987 41.5492 54.9361 41.6169 54.8162 41.7368C54.6962 41.8568 54.6286 42.0193 54.6281 42.189V43.4695C54.6284 43.6393 54.6959 43.8021 54.8159 43.9222C54.9358 44.0424 55.0985 44.1101 55.2684 44.1106V44.1097Z" fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear_9_243" x1="92.1991" y1="73.99" x2="0.275089" y2="29.498" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#5FC3FF"/>
                    <stop offset="1" stop-color="#93BCD4"/>
                    </linearGradient>
                    </defs>
                    </svg>
                </div>
                <div class="col-sm-9 float-start p-3">
                    <h4>BPH</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis accusantium eius corrupti non nesciunt enim quia impedit magni nulla tempore officia rem dicta voluptas id, mollitia ea repellat libero quam.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 p-4">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3 p-3">
                    <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M49 98C76.062 98 98 76.062 98 49C98 21.938 76.062 0 49 0C21.938 0 0 21.938 0 49C0 76.062 21.938 98 49 98Z" fill="url(#paint0_linear_9_243)"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M54.7014 29.7529H40.841C36.5514 29.7529 32.8535 33.23 32.8535 37.5216V59.8404C32.8535 64.3737 36.3098 67.9883 40.841 67.9883H57.4848C61.7764 67.9883 65.2535 64.1341 65.2535 59.8404V40.7445L54.7014 29.7529Z" stroke="white" stroke-width="4.16667" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M54.1542 29.7296V35.79C54.1542 38.7483 56.5479 41.1483 59.5042 41.1546C62.2479 41.1608 65.0542 41.1629 65.2438 41.1504" stroke="white" stroke-width="4.16667" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M53.7583 56.4121H42.5146" stroke="white" stroke-width="4.16667" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M49.5052 46.095H42.5135" stroke="white" stroke-width="4.16667" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                    <linearGradient id="paint0_linear_9_243" x1="91.924" y1="73.99" x2="3.49987e-06" y2="29.498" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#5FC3FF"/>
                    <stop offset="1" stop-color="#93BCD4"/>
                    </linearGradient>
                    </defs>
                    </svg>
                </div>
                <div class="col-sm-9 float-start p-3">
                    <h4>Divisi Administrasi</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis accusantium eius corrupti non nesciunt enim quia impedit magni nulla tempore officia rem dicta voluptas id, mollitia ea repellat libero quam.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 p-4">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3 p-3">
                    <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M49 98C76.062 98 98 76.062 98 49C98 21.938 76.062 0 49 0C21.938 0 0 21.938 0 49C0 76.062 21.938 98 49 98Z" fill="url(#paint0_linear_9_246)"/>
                    <path d="M73.7774 44.3639V43.132C73.7774 42.9702 73.7456 42.81 73.6837 42.6605C73.6218 42.511 73.5311 42.3752 73.4167 42.2608C73.3023 42.1464 73.1664 42.0556 73.0169 41.9937C72.8674 41.9318 72.7072 41.9 72.5454 41.9001H50.9877V38.8205H56.5294C57.1828 38.8205 57.8095 38.5609 58.2716 38.0988C58.7336 37.6367 58.9932 37.0101 58.9932 36.3566V26.5016C58.9932 25.8481 58.7336 25.2214 58.2716 24.7594C57.8095 24.2973 57.1828 24.0377 56.5294 24.0377H41.7466C41.0932 24.0377 40.4665 24.2973 40.0044 24.7594C39.5423 25.2214 39.2827 25.8481 39.2827 26.5016V36.3566C39.2827 37.0101 39.5423 37.6367 40.0044 38.0988C40.4665 38.5609 41.0932 38.8205 41.7466 38.8205H47.2896V41.9001H25.7319C25.5701 41.9 25.4099 41.9318 25.2604 41.9937C25.1109 42.0556 24.9751 42.1464 24.8607 42.2608C24.7463 42.3752 24.6555 42.511 24.5937 42.6605C24.5318 42.81 24.4999 42.9702 24.5 43.132V44.3639C24.4999 44.5257 24.5318 44.686 24.5937 44.8354C24.6555 44.9849 24.7463 45.1208 24.8607 45.2352C24.9751 45.3496 25.1109 45.4403 25.2604 45.5022C25.4099 45.5641 25.5701 45.5959 25.7319 45.5959H33.7393V48.6764H29.4277C28.7743 48.6764 28.1476 48.936 27.6855 49.398C27.2235 49.8601 26.9639 50.4868 26.9639 51.1403V60.9944C26.9639 61.6478 27.2235 62.2745 27.6855 62.7366C28.1476 63.1986 28.7743 63.4582 29.4277 63.4582H41.7466C42.4001 63.4582 43.0268 63.1986 43.4888 62.7366C43.9509 62.2745 44.2105 61.6478 44.2105 60.9944V51.1393C44.2105 50.4859 43.9509 49.8592 43.4888 49.3971C43.0268 48.9351 42.4001 48.6755 41.7466 48.6755H37.4351V45.5959H60.8409V48.6764H56.5294C55.8759 48.6764 55.2492 48.936 54.7871 49.398C54.3251 49.8601 54.0655 50.4868 54.0655 51.1403V60.9944C54.0655 61.6478 54.3251 62.2745 54.7871 62.7366C55.2492 63.1986 55.8759 63.4582 56.5294 63.4582H68.8482C69.5017 63.4582 70.1284 63.1986 70.5905 62.7366C71.0525 62.2745 71.3121 61.6478 71.3121 60.9944V51.1393C71.3121 50.4859 71.0525 49.8592 70.5905 49.3971C70.1284 48.9351 69.5017 48.6755 68.8482 48.6755H64.5367V45.5959H72.544C72.7059 45.5961 72.8663 45.5644 73.016 45.5026C73.1656 45.4408 73.3016 45.3501 73.4162 45.2357C73.5307 45.1212 73.6216 44.9854 73.6836 44.8358C73.7455 44.6862 73.7774 44.5259 73.7774 44.3639ZM44.2105 33.8927V28.9655H54.0655V33.8932L44.2105 33.8927ZM39.2827 58.5314H31.8911V53.6032H39.2827V58.5314ZM66.3844 58.5314H58.9932V53.6032H66.3844V58.5314Z" fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear_9_246" x1="91.924" y1="73.99" x2="3.49987e-06" y2="29.498" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#5FC3FF"/>
                    <stop offset="1" stop-color="#93BCD4"/>
                    </linearGradient>
                    </defs>
                    </svg>
                </div>
                <div class="col-sm-9 float-start p-3">
                    <h4>Divisi Perhub</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ratione excepturi, cum pariatur sit maxime praesentium fuga, neque recusandae iusto, asperiores a voluptate animi natus incidunt rem iste tempore quia?</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 p-4">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3 p-3">
                    <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M49 98C76.062 98 98 76.062 98 49C98 21.938 76.062 0 49 0C21.938 0 0 21.938 0 49C0 76.062 21.938 98 49 98Z" fill="url(#paint0_linear_9_244)"/>
                    <path d="M67.5483 29.5848H30.5145C29.5324 29.5851 28.5906 29.9753 27.8962 30.6698C27.2018 31.3642 26.8115 32.306 26.8113 33.288V57.9776C26.8115 58.9596 27.2018 59.9014 27.8962 60.5958C28.5906 61.2903 29.5324 61.6805 30.5145 61.6808H45.3282L44.094 65.384H38.5385C38.2928 65.3801 38.0489 65.4251 37.8209 65.5164C37.5928 65.6077 37.3852 65.7435 37.2101 65.9158C37.0351 66.0881 36.896 66.2936 36.8011 66.5201C36.7062 66.7467 36.6574 66.9899 36.6574 67.2356C36.6574 67.4812 36.7062 67.7244 36.8011 67.951C36.896 68.1776 37.0351 68.383 37.2101 68.5553C37.3852 68.7276 37.5928 68.8634 37.8209 68.9547C38.0489 69.046 38.2928 69.091 38.5385 69.0872H59.5252C59.7709 69.091 60.0148 69.046 60.2429 68.9547C60.4709 68.8634 60.6785 68.7276 60.8536 68.5553C61.0286 68.383 61.1677 68.1776 61.2626 67.951C61.3575 67.7244 61.4063 67.4812 61.4063 67.2356C61.4063 66.9899 61.3575 66.7467 61.2626 66.5201C61.1677 66.2936 61.0286 66.0881 60.8536 65.9158C60.6785 65.7435 60.4709 65.6077 60.2429 65.5164C60.0148 65.4251 59.7709 65.3801 59.5252 65.384H53.9693L52.7351 61.6808H67.5483C68.5304 61.6805 69.4722 61.2903 70.1666 60.5958C70.861 59.9014 71.2513 58.9596 71.2515 57.9776V33.288C71.2513 32.306 70.861 31.3642 70.1666 30.6698C69.4722 29.9753 68.5304 29.5851 67.5483 29.5848V29.5848ZM66.3141 56.7429H31.7492V34.5227H66.3141V56.7429Z" fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear_9_244" x1="91.924" y1="73.99" x2="3.49987e-06" y2="29.498" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#5FC3FF"/>
                    <stop offset="1" stop-color="#93BCD4"/>
                    </linearGradient>
                    </defs>
                    </svg>

                </div>
                <div class="col-sm-9 float-start p-3">
                    <h4>Divisi Minbak</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ducimus consectetur explicabo alias rem quos eaque reprehenderit. Quos obcaecati est numquam nihil doloribus voluptatibus similique, reprehenderit eos quaerat, quo consequuntur.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 p-4">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3 p-3">
                    <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M49 98C76.062 98 98 76.062 98 49C98 21.938 76.062 0 49 0C21.938 0 0 21.938 0 49C0 76.062 21.938 98 49 98Z" fill="url(#paint0_linear_9_245)"/>
                    <path d="M70.6354 31.3063C70.4724 31.3067 70.3109 31.338 70.1597 31.3988L56.5816 36.4162L42.8477 31.5684C41.8103 31.2231 40.6896 31.2192 39.6498 31.5573L27.5269 35.7737C27.0525 35.9634 26.6458 36.2911 26.3595 36.7143C26.0731 37.1375 25.9202 37.6369 25.9206 38.1478V65.7996C25.9199 66.0086 25.9707 66.2146 26.0684 66.3994C26.1661 66.5843 26.3077 66.7422 26.4808 66.8595C26.654 66.9767 26.8532 67.0495 27.0611 67.0716C27.269 67.0937 27.4791 67.0644 27.673 66.9862L41.2506 61.9665L54.984 66.8138C56.0212 67.1599 57.1422 67.1641 58.182 66.8258L70.3048 62.609C70.7791 62.4195 71.1856 62.0921 71.4719 61.6692C71.7583 61.2464 71.9113 60.7474 71.9112 60.2367V32.5854C71.9112 32.2467 71.7769 31.9219 71.5377 31.6821C71.2985 31.4423 70.974 31.3072 70.6354 31.3063ZM43.8056 35.971L54.0262 39.5809V62.4121L43.8056 58.8041V35.971ZM29.7527 62.1306V39.0567L39.9734 35.5014V58.3529L39.9221 58.3714L29.7527 62.1306ZM68.079 59.3256L57.8584 62.879V40.0302L57.9097 40.0112L68.0795 36.253L68.079 59.3256Z" fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear_9_245" x1="91.924" y1="73.99" x2="3.49987e-06" y2="29.498" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#5FC3FF"/>
                    <stop offset="1" stop-color="#93BCD4"/>
                    </linearGradient>
                    </defs>
                    </svg>

                </div>
                <div class="col-sm-9 float-start p-3">
                    <h4>Divisi Kewirausahaan</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit sequi alias, repudiandae similique quibusdam hic impedit ducimus odit dicta aperiam pariatur est dolores perspiciatis autem blanditiis sunt ea nulla officiis.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        </div>
    </section>
    <section class="header__profile">
        <div class="container">
        <div class="row">
            <div class="col-lg-7 py-5">
            <div class="plyr__video-embed ratio ratio-16x9" id="player">
                <iframe src="https://www.youtube.com/embed/LNGe4gBhDk8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
            <div class="col-lg-5 py-5 align-self-center">
            <h4 class="mb-4">Video Profile BSO HMJTI </h4>
            <a href="https://www.youtube.com/watch?v=LNGe4gBhDk8" target="_blank" rel="noopener noreferrer">
                <svg width="47" height="33" viewBox="0 0 47 33" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="47" height="33" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_9_280" transform="translate(0 -0.0011553) scale(0.00125 0.0017803)"/>
                </pattern>
                <image id="image0_9_280" width="800" height="563" xlink:href="data:image/png;base64,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"/>
                </defs>
                </svg>
                Badan Semi Otonom HMJTI
            </a>
            </div>
        </div>
        </div>
    </section>
    <section class="header__blog py-5">
        <div class="container">
        <h1 class="text-center">BLOG</h1>
        <div class="row py-5">
            @forelse ($data as $item)
            <div class="col-lg-6 col-sm-12">
                <div class="row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2">{{ $item->name_category }}</strong>
                    <h3 class="mb-0">{{ ucwords($item->title) }}</h3>
                    <div class="mb-1 text-muted" style="font-size: 12px;">{{ $item->author }}| {{ $item->updated_at }}</div>
                    <p class="card-text mb-4 mt-3">
                        {!! substr($item->content, 0, 150)."[..]" !!}
                    </p>
                    <div class="d-flex justify-content-start">
                        <a href="#" class="btn btn-primary">Continue reading</a>
                    </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/blog/'.$item->images) }}" class="h-100" width="250"  alt="{{ $item->title }}" srcset="">
                    </div>
                </div>
            </div>
            @empty
                <div class="text-danger text-center">Data tidak ada</div>
            @endforelse
            <div class="d-flex justify-content-center py-5">
                <a href="{{ route('blog.front') }}" class="btn btn-primary">More new blog..</a>
            </div>
        </div>
    </section>
@endsection
