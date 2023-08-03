<div class="row row-cols-2 row-cols-md-2 g-2">
    <div class="col-md-3">
        <div class="box1 border border-1">
            <div class="ml-3 mt-3" style="margin-left: 10px;">
                <div class="font-weight-bold" style="font-size: large;">
                    Subcategories
                </div>
                <div style="font-size: small; color:#1071FF;">
                    back to category 1
                </div>
                <div class="subcate">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin-right: 10px;">
                        <label class="form-check-label" for="flexCheckDefault" style="margin-top: auto;">
                            Subcategory 2
                        </label>
                        <label for="" class="ml-5" style="margin: auto;">149</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin-right: 10px;">
                        <label class="form-check-label" for="flexCheckDefault" style="margin-top: auto;">
                            Subcategory 3
                        </label>
                        <label for="" class="ml-5" style="margin: auto;">882</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin-right: 10px;">
                        <label class="form-check-label" for="flexCheckDefault" style="margin-top: auto;">
                            Subcategory 4
                        </label>
                        <label for="" class="ml-5" style="margin: auto;">1553</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin-right: 10px;">
                        <label class="form-check-label" for="flexCheckDefault" style="margin-top: auto;">
                            Subcategory 5
                        </label>
                        <label for="" class="ml-5" style="margin: auto;">7</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin-right: 10px;">
                        <label class="form-check-label" for="flexCheckDefault" style="margin-top: auto;">
                            Subcategory 6
                        </label>
                        <label for="" class="ml-5" style="margin: auto;">12996</label>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div style="font-size: medium;">Title of listing page</div>
        <p style="font-size: small;">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quod nobis soluta modi
            <br>
            quam hic, optio voluptate voluptates totam nam deserunt quidem, velit nostrum
            in aperiam inventore numquam, placeat atque?
        </p>
        <div style="color:#1071FF">Show more</div>
        <div class="banner mt-2">
            <img src="./assets/img/banercenter/banercenter.png" alt="" class="bannerimg">
        </div>
    </div>



    <!-- <div class="box2">
            <div>Title of listing page</div>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quod nobis soluta modi
                quam hic, optio voluptate voluptates totam nam deserunt quidem, velit nostrum
                in aperiam inventore numquam, placeat atque?
            </p>
            <div style="color:#1071FF">Show more</div>
            <div class="banner mt-2">
                <img src="./assets/img/banercenter/banercenter.png" alt="" class="bannerimg">
            </div>
        </div> -->


</div>

<style>
    .bannerimg {
        max-width: 100%;
        max-height: 100%;
    }

    /* ขนาดมือถือ */
    @media only screen and (max-width: 576px) {
        .subcate {
            font-size: small;
        }

        #flexCheckDefault {
            scale: 0.5;
        }
    }

    @media only screen and (max-width: 339px) {

        .banner {
            width: 253px;
    position: relative;
    left: -130px;
        }
    }

    /* ขนาดแทบเล็ต */
    @media only screen and (max-width: 768px) {
        .subcate {
            font-size: smaller;
        }

        #flexCheckDefault {
            scale: 1;
        }
    }

    .form-check {
        font-size: smaller;
    }
</style>