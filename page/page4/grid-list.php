<style>
.nav-link {
    color: white;
    border: 0;
    outline: none;
    margin-right: 5px;
}

.nav-link:hover {
    background: #ff3c20 !important;
    color: white;
    border: 0;
    outline: none;
    margin-right: 5px;
}

.nav-link.active {
    background: #ff3c20 !important;
    outline: none;
}

.card-body button {
    background: #666;
    color: white;
    width: 30px;
    border: 0;
}

.card-body button :hover {
    background: #ff3c20 !important;
    outline: none;
}

.card-body button i :hover {
    background: #ff3c20 !important;
    outline: none;
}


#button-group {
    opacity: 0;
}

@keyframes slide-right {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }

    100% {
        -webkit-transform: translateX(5px);
        transform: translateX(5px);
    }
}

.grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
}

.grid-list {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 20px;
}

.card:hover #button-group {
    opacity: 1;
}

.card {
    width: 100%;
    min-height: 375px;
    background-image: url('https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/320/9.jpg');
    background-size: contain;
    background-repeat: no-repeat;
    overflow: hidden;
    background-color: #f7f7f7;
}

@keyframes fade-in {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}


.card:hover {
    background-image: url('https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/320/10.jpg');
}

.card .card-body {
    display: flex;
    flex-direction: column;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 10px;
    opacity: 0;
}

.card:hover .card-body {
    opacity: 1;
    animation: slide-right 0.3s;
}

.card-body button {
    width: 50px;
}

.card-detail {
    position: absolute;
    bottom: 0
}

.card-title {
    color: black;
}

.card-title:hover {
    color: #ff3c20;
    cursor: pointer;
}

.card-text {
    color: #ff3c20;
}

.card-list {
    width: 100%;
    min-height: 200px !important;
    background-image: url('https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/320/9.jpg');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    overflow: hidden;
    background-color: #f7f7f7;
}



.discount {
    color: white;
    background: #ff3c20;
    border-radius: 50%;
    display: flex;
    width: 50px;
    height: 50px;
    align-items: center;
    justify-content: center;
    position: absolute;
    right: 10px;
    top: 10px;
}

.discard {
    text-decoration: line-through;
    font-size: 14px;
    color: #666;
}

.btn-list {
    background: white;
    color: #666;
    border: 1px solid #e0e0e0;
    padding: 10px 18px !important;
    margin-right: 10px;
}

.text-black {
    color: black;
}

.text-hide {
    display: block;
}

@media (max-width: 768px) {
    .nav-item {
        width: 30px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .card {
        min-height: 250px;
    }

    .card-list {
        width: 100%;
        min-height: 150px !important;
        background-image: url('https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/320/9.jpg');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;
        background-color: #f7f7f7;
    }

    .text-hide {
        display: none;
    }

}

@media screen and (min-width: 768px) and (max-width:1366px) {
    .nav-item {
        width: 30px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .card {
        min-height: 350px;
        text-align: center;
    }

    .card-list {
        width: 100%;
        min-height: 200px !important;
        background-image: url('https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/320/9.jpg');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;
        background-color: #f7f7f7;
    }

    .text-hide {
        display: block;
    }

    .card-detail {
        position: absolute;
        bottom: 0;
        left: 30px;
    }

}
</style>

<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active rounded-0 btn-sm p-2" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" style="background:#666;"><i
                            class="	fa fa-th"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-0 p-2 btn-sm" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" style="background:#666;"><i
                            class="fa fa-list"></i></button>
                </li>
            </ul>
        </div>
        <div class="col-6 mb-3 d-flex text-end justify-content-end">
            <label for="inputPassword" class="col-sm-2 mt-2 me-3">Show</label>
            <select class="form-control form-control-sm" name="" id="" style="width:60px;">
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="50">50</option>
            </select>
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
            <div class="row">
                <div class="grid">
                    <div class="card mb-4">
                        <span class="discount">-16%</span>
                        <div class="card-detail text-center mb-3">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text text-black">This is a sample card with an image and buttons.</p>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column position-absolute" style="bottom:100px;" id="button-group">
                                <button class="btn btn-primary btn-icon"><i class='fas fa-shopping-basket'></i></button>
                                <button class="btn btn-primary btn-icon"><i class="fa fa-heart"></i></button>
                                <button class="btn btn-primary btn-icon"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <span class="discount">-16%</span>
                        <div class="card-detail text-center mb-3">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text text-black">This is a sample card with an image and buttons.</p>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column position-absolute" style="bottom:100px;" id="button-group">
                                <button class="btn btn-primary btn-icon"><i class='fas fa-shopping-basket'></i></button>
                                <button class="btn btn-primary btn-icon"><i class="fa fa-heart"></i></button>
                                <button class="btn btn-primary btn-icon"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <span class="discount">-16%</span>
                        <div class="card-detail text-center mb-3">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text text-black">This is a sample card with an image and buttons.</p>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column position-absolute" style="bottom:100px;" id="button-group">
                                <button class="btn btn-primary btn-icon"><i class='fas fa-shopping-basket'></i></button>
                                <button class="btn btn-primary btn-icon"><i class="fa fa-heart"></i></button>
                                <button class="btn btn-primary btn-icon"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <span class="discount">-16%</span>
                        <div class="card-detail text-center mb-3">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text text-black">This is a sample card with an image and buttons.</p>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column position-absolute" style="bottom:100px;" id="button-group">
                                <button class="btn btn-primary btn-icon"><i class='fas fa-shopping-basket'></i></button>
                                <button class="btn btn-primary btn-icon"><i class="fa fa-heart"></i></button>
                                <button class="btn btn-primary btn-icon"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <span class="discount">-16%</span>
                        <div class="card-detail text-center mb-3">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text text-black">This is a sample card with an image and buttons.</p>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column position-absolute" style="bottom:100px;" id="button-group">
                                <button class="btn btn-primary btn-icon"><i class='fas fa-shopping-basket'></i></button>
                                <button class="btn btn-primary btn-icon"><i class="fa fa-heart"></i></button>
                                <button class="btn btn-primary btn-icon"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel">
            <div class="row g-4">
                <div class="col-12">
                    <div class="row">
                        <div class="col col-lg-3">
                            <div class="card card-list">
                                <span class="discount">-16%</span>
                            </div>
                        </div>
                        <div class="col col-lg-9">
                            <h5 class="card-title">Chicken swinesha</h5>
                            <p class="card-text fs-5">$46.00 <span class="discard">$55.00</span></p>
                            <p class="text-black text-hide">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam
                                nonumy
                                eirmod
                                tempor invidunt
                                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo
                                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est .</p>
                            <div class="d-flex">
                                <button class="btn btn-primary btn-list"><i class='fas fa-shopping-basket'></i></button>
                                <button class="btn btn-primary btn-list"><i class="fa fa-heart"></i></button>
                                <button class="btn btn-primary btn-list"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col col-lg-3">
                            <div class="card card-list">
                                <span class="discount">-16%</span>
                            </div>
                        </div>
                        <div class="col col-lg-9">
                            <h5 class="card-title">Chicken swinesha</h5>
                            <p class="card-text fs-5">$46.00 <span class="discard">$55.00</span></p>
                            <p class="text-black text-hide">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam
                                nonumy
                                eirmod
                                tempor invidunt
                                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo
                                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est .</p>
                            <div class="d-flex">
                                <button class="btn btn-primary btn-list"><i class='fas fa-shopping-basket'></i></button>
                                <button class="btn btn-primary btn-list"><i class="fa fa-heart"></i></button>
                                <button class="btn btn-primary btn-list"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col col-lg-3">
                            <div class="card card-list">
                                <span class="discount">-16%</span>
                            </div>
                        </div>
                        <div class="col col-lg-9">
                            <h5 class="card-title">Chicken swinesha</h5>
                            <p class="card-text fs-5">$46.00 <span class="discard">$55.00</span></p>
                            <p class="text-black text-hide">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam
                                nonumy
                                eirmod
                                tempor invidunt
                                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo
                                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est .</p>
                            <div class="d-flex">
                                <button class="btn btn-primary btn-list"><i class='fas fa-shopping-basket'></i></button>
                                <button class="btn btn-primary btn-list"><i class="fa fa-heart"></i></button>
                                <button class="btn btn-primary btn-list"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col col-lg-3">
                            <div class="card card-list">
                                <span class="discount">-16%</span>
                            </div>
                        </div>
                        <div class="col col-lg-9">
                            <h5 class="card-title">Chicken swinesha</h5>
                            <p class="card-text fs-5">$46.00 <span class="discard">$55.00</span></p>
                            <p class="text-black text-hide">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam
                                nonumy
                                eirmod
                                tempor invidunt
                                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo
                                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est .</p>
                            <div class="d-flex">
                                <button class="btn btn-primary btn-list"><i class='fas fa-shopping-basket'></i></button>
                                <button class="btn btn-primary btn-list"><i class="fa fa-heart"></i></button>
                                <button class="btn btn-primary btn-list"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <hr style="background: #c9c9c9;">
                </div>
                <div class="col-12 text-end">
                    <p class="text-black">Showing 1 to 15 of 15 (1 Pages)</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script>
const cardImage = document.getElementById('card-image');
cardImage.addEventListener('mouseover', () => {
    cardImage.src = 'asset/image/1(2).jpg';
});

cardImage.addEventListener('mouseout', () => {
    cardImage.src = 'asset/image/1(1).jpg';
});
</script> -->