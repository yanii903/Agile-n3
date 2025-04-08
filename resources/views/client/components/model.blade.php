<!-- Modal -->
<div class="modal fade quickview-modal" id="quickview" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered cr-modal-dialog">
        <div class="modal-content">
            <button type="button" class="cr-close-model btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="zoom-image-hover modal-border-image">
                            <img id="modal-product-image" src="" alt="product-image" class="product-image">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="cr-size-and-weight-contain">
                            <h2 id="modal-product-name"></h2>
                            <p id="modal-product-description"></p>
                        </div>
                        <div class="cr-size-and-weight">
                            <div class="cr-review-star">
                                <div class="cr-star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <p>( 75 Review )</p>
                            </div>
                            <div class="cr-product-price">
                                <span id="modal-product-price" class="new-price"></span>
                            </div>

                            <!-- Số lượng & nút thêm giỏ hàng -->
                            <div class="cr-add-card mt-3">
                                <div class="cr-qty-main">
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                           class="quantity" id="modal-quantity">
                                    <button type="button" id="add_model" class="plus">+</button>
                                    <button type="button" id="sub_model" class="minus">-</button>
                                </div>
                                <div class="cr-add-button">
                                    <button type="button" class="cr-button">Add to cart</button>
                                </div>
                            </div>
                            <!-- /Số lượng & nút -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
