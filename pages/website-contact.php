<div class="parallax page-section bg-blue-300">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media media-grid v-middle">
            <div class="media-left">
                <span class="icon-block half bg-blue-500 text-white"><i class="fa fa-envelope"></i></span>
            </div>
            <div class="media-body">
                <h3 class="text-display-2 text-white margin-none">Contact us</h3>
                <p class="text-white text-subhead">Feel free to visit or send us a message anytime.</p>
            </div>
        </div>
    </div>
</div>

<div class="relative height-500 height-400-xs">
    <div class="maps-google-fs" data-toggle="google-maps" data-draggable="false" data-file="js/data/google_maps/markers.json" data-zoom-position="LEFT_BOTTOM" data-center="57.6990668845024,11.98333499336286" data-style="paper" data-zoom="18"></div>
    <script id="map-infobox-simple" type="text/x-handlebars-template">

        <div>
        <div class="text-center">
        <h1 class="text-headline">{{ title }}</h1>
        <p>{{ description }}</p>
        </div>
        </div>

    </script>
</div>

<div class="page-section parallax relative overflow-hidden">
    <img class="parallax-layer absolute top left" data-translate-when="inViewport" src="images/photodune-6745579-modern-creative-man-relaxing-on-workspace-m.jpg" alt="parallax image" />
    <div class="container">
        <div class="panel margin-none panel-default paper-shadow max-width-400 h-center" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline">Send a message</h4>
            </div>
            <div class="panel-body">
                <form>
                    <div class="form-group form-control-material">
                        <input class="form-control" type="text" id="fname" placeholder="First name" />
                        <label for="fname">First name:</label>
                    </div>
                    <div class="form-group form-control-material">
                        <input class="form-control" type="tel" id="lname" placeholder="Last name" />
                        <label for="lname">Last name:</label>
                    </div>
                    <div class="form-group form-control-material">
                        <input class="form-control" type="text" id="phone" placeholder="Phone" />
                        <label for="phone">Phone:</label>
                    </div>
                    <div class="form-group form-control-material">
                        <textarea class="form-control" id="message" placeholder="Your message"></textarea>
                        <label for="message">Your message:</label>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary relative paper-shadow" data-z="0.5" data-hover-z="1" data-animated>Send message</button>
                    </div>
                </form>
            </div>
        </div>
        <br/>
    </div>
</div>