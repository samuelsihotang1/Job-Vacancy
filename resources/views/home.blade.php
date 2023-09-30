@extends('layouts.app')

@section('title')
Homepage - PPW
@endsection

@section('content')
<div class="wrapper">

  <!-- HEADER AREA START (header-5) -->
  <header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-2">
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black ltn__logo-right-menu-option plr--9---">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
            <div class="site-logo-wrap">
              <div class="site-logo">
                <a href="index.html"><img src="img/logo-3.png" alt="Logo" /></a>
              </div>
            </div>
          </div>
          <div class="col header-menu-column menu-color-white">
            <div class="header-menu d-none d-xl-block">
              <nav>
                <div class="ltn__main-menu">
                  <ul style="justify-content: flex-end;">
                    <li class="special-link"><a href="index.html">BERANDA</a></li>
                    <li class="special-link"><a href="contact.html">KONTAK</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>

          <div class="ltn__header-options ltn__header-options-2">
            <!-- header-search-1 -->

            <!-- user-menu -->
            <div class="ltn__drop-menu user-menu">
              <ul>
                <li>
                  <a href="#"><i class="icon-notification"></i>
                    <sup>2</sup></a>
                </li>
              </ul>
            </div>
            <!-- user-menu -->
            <div class="ltn__drop-menu user-menu">
              <ul>
                <li>
                  <a href="#"><i class="icon-user"></i></a>
                  <ul>
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ltn__header-middle-area end -->
  </header>
  <!-- HEADER AREA END -->
  <div class="ltn__utilize-overlay"></div>

  <div
    class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
            <div class="section-title-area ltn__section-title-2">
              <h1 class="section-title white-color">Daftar Pekerjaan</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- PRODUCT DETAILS AREA START -->
  <div class="ltn__product-area ltn__product-gutter pt-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-lg-2 mb-120">
          {{-- <div class="ltn__shop-options">
            <ul>
              <li>
                <div class="short-by text-center">
                  <select class="nice-select">
                    <option>Default sorting</option>
                    <option>Sort by popularity</option>
                    <option>Sort by new arrivals</option>
                    <option>Sort by price: low to high</option>
                    <option>Sort by price: high to low</option>
                  </select>
                </div>
              </li>
              <!-- <li>
                <div class="showing-product-number text-right text-end">
                  <span>Showing 9 of 20 results</span>
                </div>
              </li> -->
            </ul>
          </div> --}}
          <div class="tab-content">
            <div class="tab-pane fade active show" id="liton_product_list">
              <div class="ltn__product-tab-content-inner ltn__product-list-view">
                <div class="row">
                  <!-- ltn__product-item -->
                  <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3">
                      <div class="product-info">
                        <div class="product-price">
                          <a href="product-details.html">
                            <span>Kepanitiaan Bebras</span>
                          </a>
                        </div>
                        <h2 class="product-title" style="font-size: 18px;">Oleh BAAK</h2>
                        <div class="product-brief">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit
                            nesciunt, aliquid, deleniti non et ut dolorem!</p>
                        </div>
                        <div class="product-hover-action">
                          <ul>
                            <li>
                              <a href="#" title="Add to Cart">
                                <i class="fas fa-arrow-right" alt="Arrow Icon"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ltn__product-item -->
                  <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3">
                      <div class="product-info">
                        <div class="product-price">
                          <a href="product-details.html">
                            <span>Kepanitiaan Bebras</span>
                          </a>
                        </div>
                        <h2 class="product-title" style="font-size: 18px;">Oleh BAAK</h2>
                        <div class="product-brief">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit
                            nesciunt, aliquid, deleniti non et ut dolorem!</p>
                        </div>
                        <div class="product-hover-action">
                          <ul>
                            <li>
                              <a href="#" title="Add to Cart">
                                <i class="fas fa-arrow-right" alt="Arrow Icon"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ltn__product-item -->
                  <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3">
                      <div class="product-info">
                        <div class="product-price">
                          <a href="product-details.html">
                            <span>Kepanitiaan Bebras</span>
                          </a>
                        </div>
                        <h2 class="product-title" style="font-size: 18px;">Oleh BAAK</h2>
                        <div class="product-brief">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit
                            nesciunt, aliquid, deleniti non et ut dolorem!</p>
                        </div>
                        <div class="product-hover-action">
                          <ul>
                            <li>
                              <a href="#" title="Add to Cart">
                                <i class="fas fa-arrow-right" alt="Arrow Icon"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ltn__product-item -->
                  <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3">
                      <div class="product-info">
                        <div class="product-price">
                          <a href="product-details.html">
                            <span>Kepanitiaan Bebras</span>
                          </a>
                        </div>
                        <h2 class="product-title" style="font-size: 18px;">Oleh BAAK</h2>
                        <div class="product-brief">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit
                            nesciunt, aliquid, deleniti non et ut dolorem!</p>
                        </div>
                        <div class="product-hover-action">
                          <ul>
                            <li>
                              <a href="#" title="Add to Cart">
                                <i class="fas fa-arrow-right" alt="Arrow Icon"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ltn__product-item -->
                  <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3">
                      <div class="product-info">
                        <div class="product-price">
                          <a href="product-details.html">
                            <span>Kepanitiaan Bebras</span>
                          </a>
                        </div>
                        <h2 class="product-title" style="font-size: 18px;">Oleh BAAK</h2>
                        <div class="product-brief">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit
                            nesciunt, aliquid, deleniti non et ut dolorem!</p>
                        </div>
                        <div class="product-hover-action">
                          <ul>
                            <li>
                              <a href="#" title="Add to Cart">
                                <i class="fas fa-arrow-right" alt="Arrow Icon"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                </div>
              </div>
            </div>
          </div>
          <div class="ltn__main-menu">
            <ul style="justify-content: center">
              <li class="special-link"><button>Tampilkan Lagi</button></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mb-120">
          <aside class="sidebar ltn__shop-sidebar" style="position: sticky; top: 120px">
            <!-- Category Widget -->
            <div class="widget ltn__menu-widget">
              <h4 class="ltn__widget-title ltn__widget-title-border">Kategori Pekerjaan</h4>
              <ul>
                <li>
                  <a href="#">Jam Karya <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                </li>
                <li>
                  <a href="#">Kompetisi <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                </li>
                <li>
                  <a href="#">Organisas <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                </li>
                <li>
                  <a href="#">Asisten dosen <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                </li>
              </ul>
            </div>
            <div>
              <input type="text" name="search" value="" placeholder="Search here..." />
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <!-- PRODUCT DETAILS AREA END -->
</div>
@endsection

@section('script')
<!-- LOGIN AREA END -->
<!-- All JS Plugins -->
<script src="js/plugins.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
@endsection