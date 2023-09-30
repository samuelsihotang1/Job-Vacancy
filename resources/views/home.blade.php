@extends('layouts.app')

@section('title')
{!! $oncategory ? "$oncategory->name - PPW" : 'Homepage - PPW' !!}
@endsection

@section('content')
<div class="wrapper">
  <div
    class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
            <div class="section-title-area ltn__section-title-2">
              <h1 class="section-title white-color">Daftar Pekerjaan
                @if (request()->route()->named('category'))
                <span style="font-size: 2.2rem"> - {{ $oncategory->name }}</span>
                @endif
              </h1>
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
                  @foreach ($jobs as $job)
                  <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3">
                      <div class="product-info">
                        <div class="product-price">
                          <a href="{{ $job->name_slug }}">
                            <span>{{ $job->name }}</span>
                          </a>
                        </div>
                        <h2 class="product-title" style="font-size: 18px;">Oleh {{ $job->user->name }}</h2>
                        <div class="product-brief">
                          <p>{{$job->short_text}}</p>
                        </div>
                        <div class="product-hover-action">
                          <ul>
                            <li>
                              <a href="{{ $job->name_slug }}" title="Add to Cart">
                                <i class="fas fa-arrow-right" alt="Arrow Icon"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
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
                @foreach ($categories as $category)
                <li>
                  <a href="{{ $category == $oncategory ? route('home') : route('category',$category->name_slug)}}" {!!
                    $category==$oncategory ? 'style="color: #80B500"' : '' !!}>{{ $category->name }}
                    <span>
                      <i class="fas fa-long-arrow-alt-right" {!! $category==$oncategory ? 'style="color: #80B500"' : ''
                        !!}></i>
                    </span>
                  </a>
                </li>
                @endforeach
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