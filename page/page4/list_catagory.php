<style>
.breadcrumb-item {}

.active {
    background: transparent !important;
}

.breadcrumb-item.active {
    color: #ff3c20;
}

.title-category {
    font-size: 18px;
    font-size: 1.3rem;
    text-transform: uppercase;
    color: #222;
    border-bottom: 2px solid #eee;
    display: inline-block;
    width: 100%;
    position: relative;
    margin-top: 0;
    padding-bottom: 10px;
}

.title-category:after {
    position: absolute;
    content: "";
    width: 110px;
    height: 2px;
    background-color: #ff3c20;
    bottom: -2px;
    left: 0;
}

.text-script {
    color: black;
}

.table-row {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    border: 1px solid #e6e6e6;
    padding: 0px;
}

.table_cell {
    display: table-cell;
    border-right: 1px solid #e6e6e6;
    border-bottom: 1px solid #e6e6e6;
    padding: 19px;
}

.button_submit {
    background: #ff3c20;
    color: white;
    margin-right: 5px;
}

.button_grey {
    padding: 6px 15px;
    display: inline-block;
    color: #555;
    background: #f1f1f1;
    text-transform: capitalize;
    border-radius: 3px;
    border: none;
}

.button_grey:hover {
    background: #ff3c20 !important;
    color: white;
    margin-right: 5px;
}


input[type=checkbox] {
    margin: 10px 0 0 0;
    margin-top: 1px\9;
    line-height: normal;
}



.simple_vertical_list input[type="checkbox"],
.checkboxes_list input[type="checkbox"] {
    display: none;
    outline: none;
}

label {
    font-size: 12px;
    font-weight: normal;
}

.simple_vertical_list input[type="checkbox"]+label,
.checkboxes_list input[type="checkbox"]+label {
    position: relative;
    width: auto;
    margin: 0 17px 0 0;
    padding-left: 32px;
    cursor: pointer;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    user-select: none;
    outline: none;
}

label {
    font-size: 12px;
    font-weight: normal;
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}

.simple_vertical_list,
.checkboxes_list {
    color: #333;
}

.simple_vertical_list input[type="checkbox"]:checked+label::before,
.checkboxes_list input[type="checkbox"]:checked+label::before {
    content: '\f00c';
}

.simple_vertical_list input[type="checkbox"]+label::before,
.checkboxes_list input[type="checkbox"]+label::before {
    content: "";
    display: block;
    text-align: center;
    font-family: 'FontAwesome';
    position: absolute;
    left: 0;
    top: -1px;
    width: 22px;
    height: 22px;
    color: inherit;
    background: #fff;
    border: 1px solid #eaeaea;
    border-radius: 3px;
}

.simple_vertical_list input[type="checkbox"]+label,
.checkboxes_list input[type="checkbox"]+label {
    position: relative;
    width: auto;
    margin: 0 17px 10px 0;
    cursor: pointer;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

.color_btn.green::before {
    background: #269300 !important;
}

.color_btn.yellow::before {
    background: #fccd36 !important;
}

.color_btn.red::before {
    background: #f00 !important;
}

.color_btn.blue::before {
    background: #018bc8 !important;
}

.color_btn.grey::before {
    background: #b2b2b2 !important;
}

.color_btn.orange::before {
    background: #ff7b1a !important;
}


.range-slider {
    height: 5px;
    position: relative;
    background-color: #eaeaea;
    border-radius: 2px;
}

.range-selected {
    height: 100%;
    right: 0;
    position: absolute;
    border-radius: 5px;
    background-color: #eaeaea;
}

.range-input {
    position: relative;
}

.range-input input {
    position: absolute;
    width: 105%;
    top: -30px;
    left: -5px;
    background: none;
    pointer-events: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    border: 0;
}

.range-input input::-webkit-slider-thumb {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    border: 5px solid #eaeaea;
    background-color: #fff;
    pointer-events: auto;
    -webkit-appearance: none;
}



.range-price {
    margin: 30px 0;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}




@media screen and (max-width:767px) {
    .table-row {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        border: 1px solid #e6e6e6;
        padding: 0px;
    }
}

@media screen and (min-width:767px) and (max-width:1366px) {
    .table-row {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        border: 1px solid #e6e6e6;
        padding: 0px;
    }
}
</style>

<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home"></i></li>
            <li class="breadcrumb-item active" aria-current="page">Funitures</li>
        </ul>
    </nav>
</div>

<div class="container">
    <h4 class="title-category">Funitures</h4>
    <p class="text-script">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In
        pede mi, aliquet sit
        amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
        lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis
        sit voluptatem accusantium doloremque laudantium. Vestibulum iaculis lacinia est. Proin dictum elementum velit.
        Fusce euismod consequat ante.
    </p>
    <p class="text-script">
        Lorem ipsum dolor sit amet, consectetuer adipisMauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing
        aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in,auctor ut, ligula. Aliquam dapibus tincidunt
        metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem.
    </p>
    <h4 class="">Filter </h4>
    <div class="table-row">
        <div class="table_cell">
            <p>Search</p>
            <input class="form-control" type="text" value="" size="30" autocomplete="off" placeholder="Search"
                name="search">
        </div>
        <div class="table_cell">
            <p>SUB CATEGORY</p>
            <ul class="checkboxes_list">
                <li>
                    <input type="checkbox" checked="" name="category" id="category_1">
                    <label for="category_1">Smartphone &amp; Tablets</label>
                </li>
                <li>
                    <input type="checkbox" name="category" id="category_2">
                    <label for="category_2">Electronics</label>
                </li>
                <li>
                    <input type="checkbox" name="category" id="category_3">
                    <label for="category_3">Shoes</label>
                </li>
                <li>
                    <input type="checkbox" name="category" id="category_4">
                    <label for="category_4">Watches</label>
                </li>
            </ul>
        </div>
        <div class="table_cell">
            <p>MANUFACTURER</p>
            <ul class="checkboxes_list">
                <li>
                    <input type="checkbox" checked="" name="manufacturer" id="manufacturer_1">
                    <label for="manufacturer_1">Manufacturer 1</label>
                </li>
                <li>
                    <input type="checkbox" name="manufacturer" id="manufacturer_2">
                    <label for="manufacturer_2">Manufacturer 2</label>
                </li>
                <li>
                    <input type="checkbox" name="manufacturer" id="manufacturer_3">
                    <label for="manufacturer_3">Manufacturer 3</label>
                </li>
            </ul>
        </div>
        <div class="table_cell">
            <p>PRICE</p>
            <p>Range: $<span id="minValue">10.00</span> - $<span id="maxValue">580.00</span></p>
            <div class="range">
                <div class="range-slider">
                    <span class="range-selected"></span>
                </div>
                <div class="row" style="padding:0">
                    <div class="range-input">
                        <input type="range" class="min" min="10" max="580" value="10" step="1">
                        <input type="range" class="max" min="10" max="580" value="580" step="1">
                    </div>
                </div>
                <div class="range-price" style="display:none;">
                    <label for="min">Min</label>
                    <input type="number" name="min" value="10">
                    <label for="max">Max</label>
                    <input type="number" name="max" value="700">
                </div>
            </div>
        </div>
        <div class="table_cell">
            <p>COLOR</p>
            <div class="row">
                <div class="col-sm-6">
                    <ul class="simple_vertical_list mb-0">
                        <li>
                            <input type="checkbox" name="" id="color_btn_1">
                            <label for="color_btn_1" class="color_btn green">Green</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="color_btn_2">
                            <label for="color_btn_2" class="color_btn yellow">Yellow</label>
                        </li>
                        <li class="mb-0 pb-0">
                            <input type="checkbox" name="" id="color_btn_3">
                            <label for="color_btn_3" class="color_btn red">Red</label>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <ul class="simple_vertical_list">
                        <li>
                            <input type="checkbox" name="" id="color_btn_4">
                            <label for="color_btn_4" class="color_btn blue">Blue</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="color_btn_5">
                            <label for="color_btn_5" class="color_btn grey">Grey</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="color_btn_6">
                            <label for="color_btn_6" class="color_btn orange">Orange</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom_box p-3 pb-0">
            <div class="buttons_row">
                <button type="submit" class="button_submit btn btn">Search</button>
                <button type="reset" class="button_grey btn btn">Reset</button>
            </div>
        </div>
    </div>
</div>


<script>
let rangeMin = 0;
const range = document.querySelector(".range-selected");
const rangeInput = document.querySelectorAll(".range-input input");
const rangePrice = document.querySelectorAll(".range-price input");
const minValueDisplay = document.getElementById("minValue");
const maxValueDisplay = document.getElementById("maxValue");

rangeInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        let minRange = parseInt(rangeInput[0].value);
        let maxRange = parseInt(rangeInput[1].value);
        if (maxRange - minRange < rangeMin) {
            if (e.target.className === "min") {
                rangeInput[0].value = maxRange - rangeMin;
            } else {
                rangeInput[1].value = minRange + rangeMin;
            }
        } else {
            rangePrice[0].value = minRange;
            rangePrice[1].value = maxRange;
            range.style.left = (minRange / rangeInput[0].max) * 100 + "%";
            range.style.right = 100 - (maxRange / rangeInput[1].max) * 100 + "%";
            minValueDisplay.textContent = minRange.toFixed(2);
            maxValueDisplay.textContent = maxRange.toFixed(2);
        }
    });
});
</script>