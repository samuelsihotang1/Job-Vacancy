<div class="body-wrapper">
  <!-- Body main wrapper start -->
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
                        <a href="#" wire:click.prevent="showApplyButton" class="theme-btn-1 btn btn-effect-1"
                          title="Add to Cart">
                          <span>{{ $apply != NULL ? 'Edit Lamaran' : 'Kirim Lamaran' }}</span>
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
  @if ($showApply)
  <div wire:transition.opacity.duration.500ms
    style="background-color: rgba(0, 0, 0, 0.404); position: fixed; top: 0; left: 0; z-index: 1060; width: 100%; height: 100%;">
    <div class="modal-dialog modal-md" wire:click.outside="showApplyButton">
      <div class="modal-content">
        <div class="modal-header">
          <button wire:click="showApplyButton" type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form enctype="multipart/form-data" wire:submit.prevent="{{ $apply ? 'updateApply' : 'applyJob' }}" class="row"
          style="padding: 30px" {{-- method="POST" --}}>
          <div>
            <label>Motivasi Anda:</label>
            <textarea id="motivation" name="motivation" wire:model="motivation" cols="30" rows="10"
              style="margin-bottom: 0" required></textarea>
          </div>
          @error('motivation')
          <strong style="font-size: 15px">{{ $message }}</strong>
          @enderror
          <div class="pt-20">
            <label>Dokumen (CV, Identitas, dsb) *pdf:</label>
            <input type="file" id="document" name="document" wire:model="document" accept=".pdf"
              style="margin-bottom: 0">
          </div>
          @error('document')
          <strong style="font-size: 15px">{{ $message }}</strong>
          @enderror
          <div class="btn-wrapper pt-20">
            <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Kirim</button>
          </div>
        </form>
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
  @endif
  <!-- MODAL AREA END -->
  <!-- Body main wrapper end -->
</div>