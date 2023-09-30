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
                      <li><a href="{{ url()->previous() }}">
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
              <div class="tab-pane fade" id="liton_tab_details_1_2">
                <div class="ltn__shop-details-tab-content-inner">
                  <h4 class="title-2">Customer Reviews</h4>
                  <div class="product-ratting">
                    <ul>
                      <li>
                        <a href="#"><i class="fas fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fas fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fas fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fas fa-star-half-alt"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="far fa-star"></i></a>
                      </li>
                      <li class="review-total"><a href="#"> ( 95 Reviews )</a></li>
                    </ul>
                  </div>
                  <hr />
                  <!-- comment-area -->
                  <div class="ltn__comment-area mb-30">
                    <div class="ltn__comment-inner">
                      <ul>
                        <li>
                          <div class="ltn__comment-item clearfix">
                            <div class="ltn__commenter-img">
                              <img src="img/testimonial/1.jpg" alt="Image" />
                            </div>
                            <div class="ltn__commenter-comment">
                              <h6><a href="#">Adam Smit</a></h6>
                              <div class="product-ratting">
                                <ul>
                                  <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="far fa-star"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit
                                corporis iste magnam ratione.</p>
                              <span class="ltn__comment-reply-btn">September 3, 2020</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="ltn__comment-item clearfix">
                            <div class="ltn__commenter-img">
                              <img src="img/testimonial/3.jpg" alt="Image" />
                            </div>
                            <div class="ltn__commenter-comment">
                              <h6><a href="#">Adam Smit</a></h6>
                              <div class="product-ratting">
                                <ul>
                                  <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="far fa-star"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit
                                corporis iste magnam ratione.</p>
                              <span class="ltn__comment-reply-btn">September 2, 2020</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="ltn__comment-item clearfix">
                            <div class="ltn__commenter-img">
                              <img src="img/testimonial/2.jpg" alt="Image" />
                            </div>
                            <div class="ltn__commenter-comment">
                              <h6><a href="#">Adam Smit</a></h6>
                              <div class="product-ratting">
                                <ul>
                                  <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                  </li>
                                  <li>
                                    <a href="#"><i class="far fa-star"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit
                                corporis iste magnam ratione.</p>
                              <span class="ltn__comment-reply-btn">September 2, 2020</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- comment-reply -->
                  <div class="ltn__comment-reply-area ltn__form-box mb-30">
                    <form action="#">
                      <h4 class="title-2">Add a Review</h4>
                      <div class="mb-30">
                        <div class="add-a-review">
                          <h6>Your Ratings:</h6>
                          <div class="product-ratting">
                            <ul>
                              <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="fas fa-star-half-alt"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="far fa-star"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="input-item input-item-textarea ltn__custom-icon">
                        <textarea placeholder="Type your comments...."></textarea>
                      </div>
                      <div class="input-item input-item-name ltn__custom-icon">
                        <input type="text" placeholder="Type your name...." />
                      </div>
                      <div class="input-item input-item-email ltn__custom-icon">
                        <input type="email" placeholder="Type your email...." />
                      </div>
                      <div class="input-item input-item-website ltn__custom-icon">
                        <input type="text" name="website" placeholder="Type your website...." />
                      </div>
                      <label class="mb-0"><input type="checkbox" name="agree" /> Save my name, email, and website in
                        this browser for the next time I comment.</label>
                      <div class="btn-wrapper">
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                      </div>
                    </form>
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
          <div class="modal-body">
            <div class="ltn__quick-view-modal-inner">
              <div class="modal-product-item">
                <div class="row">
                  <div class="col-12">
                    <!-- comment-reply -->
                    <div class="ltn__comment-reply-area ltn__form-box">
                      <form action="#">
                        <div class="input-item input-item-textarea ltn__custom-icon">
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL AREA END -->
</div>
<!-- Body main wrapper end -->
@endsection