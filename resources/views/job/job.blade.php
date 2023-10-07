@extends('layouts.app')

@section('title')
{{ "$job->name - PPW" }}
@endsection

@section('content')
<!-- Body main wrapper start -->
<div class="body-wrapper">
  <div
    class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---">
  </div>

  <!-- SHOP DETAILS AREA START -->
  <div class="ltn__shop-details-area pb-85 pt-75">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <!-- Shop Tab Start -->
          <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
            <div class="tab-content">
              <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                <div class="ltn__shop-details-tab-content-inner">
                  <div class="ltn__breadcrumb-list">
                    <ul>
                      <li><a href="{{ route('home') }}">
                          < Kembali</a>
                      </li>
                    </ul>
                  </div>
                  <h4 class="title-2 mt-20">{{ $job->name }}</h4>
                  <p>
                    {!! $job->text !!}
                  </p>
                  <div class="ltn__product-details-menu-2">
                    <ul>
                      <li>
                        <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal"
                          data-bs-target="#add_to_cart_modal">
                          <span>Kirim Lamaran</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Shop Tab End -->
        </div>
      </div>
    </div>
  </div>
  <!-- SHOP DETAILS AREA END -->

  <!-- MODAL AREA START (Add To Cart Modal) -->
  <div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="row" style="padding: 30px">
            <div>
              <label>Motivasi Anda:</label>
              <textarea cols="30" rows="10" style="margin-bottom: 0"></textarea>
            </div>
            <div class="pt-20">
              <label>Dokumen (CV, Identitas, dsb) *pdf:</label>
              <input type="file" style="margin-bottom: 0">
            </div>
            <div class="btn-wrapper pt-20">
              <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Kirim</button>
            </div>
          </div>
          {{-- <div class="modal-body">
            <div class="ltn__quick-view-modal-inner">
              <div class="modal-product-item">
                <div class="row">
                  <div class="col-12">
                    <!-- comment-reply -->
                    <div class="ltn__comment-reply-area ltn__form-box">
                      <form action="#">
                        <div class="input-item input-item-textarea">
                          <textarea placeholder="Lampirkan motivasi anda..."></textarea>
                        </div>
                        <div class="btn-wrapper">
                          <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                        </div>
                      </form>
                    </div>
                    <!-- additional-info -->
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL AREA END -->
</div>
<!-- Body main wrapper end -->
@endsection