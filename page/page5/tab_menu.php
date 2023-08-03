<style>
.tab_menu_main,.tab_menu{
    padding: 0 !important;
    margin: 0 !important;
}

.tab_menu_main , .tab_menu{
    background-color: white;
    /* padding: 20px !important; */
    border: 0.5px solid #e6e6e6 !important;
    padding: 0;
    /* border-bottom: 0.5px solid #e6e6e6; */
}
.tab_menu_list{
    margin: 0;
    min-height: 180px;
    padding: 0;
    padding: 0;
}
h3 {
    font-size: 18px;
}
#tags a{
    color: #555;
    transition: color 0.3s ease-in-out;
    font-size: 14px;
}

#tags a:hover{
    color: #ff3c20;
}
.tab_menu_list>li{
    margin: 0px !important;
    padding: 0px !important;
}
.tab_menu_list>li>button{
    position: relative;
    display: block;
    padding: 10px 15px;
    width: 100%;
    border-bottom: 1px solid #ccc;
}

.tab_menu_list button {
    border: 0;
    border-radius: 0;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 16px;
    margin: 0;
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    color: #000;
    outline: none;
    text-align: left;
    cursor: pointer;
    background-color: rgba(0, 0, 0,0);
    transition: 0.3s;
}

.tablinks.tab_active:before {
    background-color: #ff3c20;
}
.tablinks.tab_active:before {
    content: "";
    width: 5px;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    z-index: 9;
    transition: 0.3s;
    animation: fadeEffect 0.3s;
}
.tablinks:hover{
    color: #ff3c20;
}
.tablinks:hover::before{
    background-color: #ff3c20;
    content: "";
    width: 5px;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    z-index: 999;
    transition: 0.3s;
    animation: fadeEffect 0.3s;
}
.tab_menu_content{
    /* border: 1px solid #ccc; */
    padding: 15px 15px 10px;
    z-index: 2;
    /* border: 1px solid #ddd; */
}
.tab_menu_details{
    display:none;

}

.tab_menu_details {
  animation: fadeEffect 1s;
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

.tab_menu_details input.form-control{
    width: 100% !important;
}

.tab_menu_details textarea.form-control{
    float: left;
    line-height: 31px;
    margin: 0;
    margin-right: 17px;
    padding: 0 10px;
    width: 100% !important;
    border: 1px solid #bdc2c9;
    border-radius: 0;
}

.tab_menu_details .rating{
    display: inline !important;
    width: auto !important;
}
.review-title{
    font-size: 20px !important;
}

</style>

<div>
    <div class="">
        <div class="row tab_menu_main col-xs-12">
            <div class="col-lg-2 col-sm-3 col-xs-12 tab_menu">
                <ul class="tab_menu_list">
                    <li><button class="tablinks" onclick="open_menu(event,'description')" id="default_Tab" >DESCRIPTION</button></li>
                    <li><button class="tablinks" onclick="open_menu(event,'reviews')" >REVIEWS (1)</button></li>
                    <li><button class="tablinks" onclick="open_menu(event,'tags')" >TAGS</button></li>
                    <li><button class="tablinks" onclick="open_menu(event,'custom')" >CUSTOM TAB</button></li>
                </ul>
            </div>
            <div class="col-lg-10 col-sm-9 col-xs-12 tab_menu_content">
                <div id="description" class="tab_menu_details">
                    <div id="tab-1">
                        <p>
                            The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel
                            resolution. Designed specifically for the creative professional, this
                            display provides more space for easier access to all the tools and palettes
                            needed to edit, format and composite your work. Combine this display with a
                            Mac Pro, MacBook Pro, or PowerMac G5 and there's no limit to what you can
                            achieve. <br />
                            <br />
                            The Cinema HD features an active-matrix liquid crystal display that produces
                            flicker-free images that deliver twice the brightness, twice the sharpness
                            and twice the contrast ratio of a typical CRT display. Unlike other flat
                            panels, it's designed with a pure digital interface to deliver
                            distortion-free images that never need adjusting. With over 4 million
                            digital pixels, the display is uniquely suited for scientific and technical
                            applications such as visualizing molecular structures or analyzing
                            geological data. <br />
                            <br />
                            Offering accurate, brilliant color performance, the Cinema HD delivers up to
                            16.7 million colors across a wide gamut allowing you to see subtle nuances
                            between colors from soft pastels to rich jewel tones. A wide viewing angle
                            ensures uniform color from edge to edge. Apple's ColorSync technology allows
                            you to create custom profiles to maintain consistent color onscreen and in
                            print. The result: You can confidently use this display in all your
                            color-critical applications. <br />
                            <br />
                            Housed in a new aluminum design, the display has a very thin bezel that
                            enhances visual accuracy. Each display features two FireWire 400 ports and
                            two USB 2.0 ports, making attachment of desktop peripherals, such as iSight,
                            iPod, digital and still cameras, hard drives, printers and scanners, even
                            more accessible and convenient. Taking advantage of the much thinner and
                            lighter footprint of an LCD, the new displays support the VESA (Video
                            Electronics Standards Association) mounting interface standard. Customers
                            with the optional Cinema Display VESA Mount Adapter kit gain the flexibility
                            to mount their display in locations most appropriate for their work
                            environment. <br />
                            <br />
                            The Cinema HD features a single cable design with elegant breakout for the
                            USB 2.0, FireWire 400 and a pure digital connection using the industry
                            standard Digital Video Interface (DVI) interface. The DVI connection allows
                            for a direct pure-digital connection.<br />
                        </p>
                        <h3>Features:</h3>
                        <p>Unrivaled display performance</p>
                        <ul>
                            <li>
                            30-inch (viewable) active-matrix liquid crystal display provides
                            breathtaking image quality and vivid, richly saturated color.
                            </li>
                            <li>
                            Support for 2560-by-1600 pixel resolution for display of high definition
                            still and video imagery.
                            </li>
                            <li>
                            Wide-format design for simultaneous display of two full pages of text and
                            graphics.
                            </li>
                            <li>
                            Industry standard DVI connector for direct attachment to Mac- and
                            Windows-based desktops and notebooks
                            </li>
                            <li>
                            Incredibly wide (170 degree) horizontal and vertical viewing angle for
                            maximum visibility and color performance.
                            </li>
                            <li>
                            Lightning-fast pixel response for full-motion digital video playback.
                            </li>
                            <li>
                            Support for 16.7 million saturated colors, for use in all
                            graphics-intensive applications.
                            </li>
                        </ul>
                        <p>Simple setup and operation</p>
                        <ul>
                            <li>
                            Single cable with elegant breakout for connection to DVI, USB and FireWire
                            ports
                            </li>
                            <li>
                            Built-in two-port USB 2.0 hub for easy connection of desktop peripheral
                            devices.
                            </li>
                            <li>
                            Two FireWire 400 ports to support iSight and other desktop peripherals
                            </li>
                        </ul>
                        <p>Sleek, elegant design</p>
                        <ul>
                            <li>Huge virtual workspace, very small footprint.</li>
                            <li>
                            Narrow Bezel design to minimize visual impact of using dual displays
                            </li>
                            <li>Unique hinge design for effortless adjustment</li>
                            <li>
                            Support for VESA mounting solutions (Apple Cinema Display VESA Mount
                            Adapter sold separately)
                            </li>
                        </ul>
                        <h3>Technical specifications</h3>
                        <p>
                            <b>Screen size (diagonal viewable image size)</b>
                        </p>
                        <ul>
                            <li>Apple Cinema HD Display: 30 inches (29.7-inch viewable)</li>
                        </ul>
                        <p>
                            <b>Screen type</b>
                        </p>
                        <ul>
                            <li>
                            Thin film transistor (TFT) active-matrix liquid crystal display (AMLCD)
                            </li>
                        </ul>
                        <p>
                            <b>Resolutions</b>
                        </p>
                        <ul>
                            <li>2560 x 1600 pixels (optimum resolution)</li>
                            <li>2048 x 1280</li>
                            <li>1920 x 1200</li>
                            <li>1280 x 800</li>
                            <li>1024 x 640</li>
                        </ul>
                        <p>
                            <b>Display colors (maximum)</b>
                        </p>
                        <ul>
                            <li>16.7 million</li>
                        </ul>
                        <p>
                            <b>Viewing angle (typical)</b>
                        </p>
                        <ul>
                            <li>170° horizontal; 170° vertical</li>
                        </ul>
                        <p>
                            <b>Brightness (typical)</b>
                        </p>
                        <ul>
                            <li>30-inch Cinema HD Display: 400 cd/m2</li>
                        </ul>
                        <p>
                            <b>Contrast ratio (typical)</b>
                        </p>
                        <ul>
                            <li>700:1</li>
                        </ul>
                        <p>
                            <b>Response time (typical)</b>
                        </p>
                        <ul>
                            <li>16 ms</li>
                        </ul>
                        <p>
                            <b>Pixel pitch</b>
                        </p>
                        <ul>
                            <li>30-inch Cinema HD Display: 0.250 mm</li>
                        </ul>
                        <p>
                            <b>Screen treatment</b>
                        </p>
                        <ul>
                            <li>Antiglare hardcoat</li>
                        </ul>
                        <p>
                            <b>User controls (hardware and software)</b>
                        </p>
                        <ul>
                            <li>Display Power,</li>
                            <li>System sleep, wake</li>
                            <li>Brightness</li>
                            <li>Monitor tilt</li>
                        </ul>
                        <p>
                            <b>Connectors and cables</b><br />
                            Cable
                        </p>
                        <ul>
                            <li>DVI (Digital Visual Interface)</li>
                            <li>FireWire 400</li>
                            <li>USB 2.0</li>
                            <li>DC power (24 V)</li>
                        </ul>
                    </div>
                </div>
                <div id="reviews" class="tab_menu_details">
                    <form action="">
                        <div class="review">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                        <td class="text-end">29/07/2015</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p class="mb-0 pb-0">Best this product opencart</p>
                                            <div class="rating-2 mb-2">    
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                        <h2 id="review-title">Write a review</h2>
                        <div class="content-form w-100">
                            <input name="" class="form-control rounded mb-3" type="text" placeholder="Your Name" >
                            <textarea name="" class="form-control rounded mb-3" placeholder="Your Review" cols="30" rows="2"></textarea>
                        </div>
                        </div>
                        <div class="form-group">
                            <span style="font-size: 11px;"><span class="text-danger">Note:</span>HTML is not translated!</span> <br>
                            <b>Rating</b> <span>Bad</span>&nbsp;
                            <input type="radio" name="rating" class="rating" value="1"> &nbsp;
                            <input type="radio" name="rating" class="rating" value="2"> &nbsp;
                            <input type="radio" name="rating" class="rating" value="3"> &nbsp;
                            <input type="radio" name="rating" class="rating" value="4"> &nbsp;
                            <input type="radio" name="rating" class="rating" value="5"> &nbsp;
                            <span>Good</span>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-buttonGray">Continue</button>
                </div>
                <div id="tags" class="tab_menu_details">
                    <a href="">Monitor, </a>
                    <a href="">Apple</a>
                </div>
                <div id="custom" class="tab_menu_details">
                    <div id="tab-5">
                        <h3 class="custom-color">Take a trivial example which of us ever undertakes</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur
                        sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua.
                        At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd
                        gubergren, no sea takimata sanctus est
                        Lorem ipsum dolor sit amet. Lorem ipsum
                        dolor sit amet, consetetur sadipscing
                        elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam
                        erat, sed diam voluptua. </p>
                        <p>At vero eos et accusam et justo duo dolores
                        et ea rebum. Stet clita kasd gubergren,
                        no sea takimata sanctus est Lorem ipsum
                        dolor sit amet. Lorem ipsum dolor sit
                        amet, consetetur sadipscing elitr.</p>
                        <ul class="marker-simple-list two-columns">
                            <li>Nam liberempore</li>
                            <li>Cumsoluta nobisest</li>
                            <li>Eligendptio cumque</li>
                            <li>Nam liberempore</li>
                            <li>Cumsoluta nobisest</li>
                            <li>Eligendptio cumque</li>
                        </ul>
                        <p>Sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat,
                        sed diam voluptua. At vero eos et accusam
                        et justo duo dolores et ea rebum. Stet
                        clita kasd gubergren, no sea takimata
                        sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function open_menu(evt, tabname) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tab_menu_details");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" tab_active", "");
  }
  document.getElementById(tabname).style.display = "block";
  evt.currentTarget.className += " tab_active";
}
document.getElementById("default_Tab").click();
</script>