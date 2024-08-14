<nav>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                @auth
                    <a href="/map" class="btn btn-register">Map</a>
                    <a href="/explore" class="btn btn-register">Explore</a>
                    <a href="/demo" class="btn btn-register">Demo</a>
                    <a href="/realtime_track" class="btn btn-register">Live Tracking</a>
                @else
                    <a href="/map" class="btn btn-register">Map</a>
                    <a href="/explore" class="btn btn-register">Explore</a>
                    <a href="/login" class="btn btn-register">Demo</a>
                    <a href="/login" class="btn btn-register">Live Tracking</a>
                @endauth
                </div>
            </nav>