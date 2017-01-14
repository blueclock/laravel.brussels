@extends('_layouts.master')

@section('body')

    <!-- intro -->
    <section class="intro">

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content">
                <h1>About Laravel Brussels</h1>
                <p>The Laravel Brussels Meetup is group for anyone interested in learning about and sharing knowledge on
                    Laravel, the "PHP framework
                    for web artisans". The group welcomes beginners and experts, amateurs and pros, young and old, etc.
                    Laravel is an accessible, yet powerful PHP framework for web application development. Its
                    expressive,
                    elegant syntax and its clean structure make PHP development a real joy. As the Laravel community
                    keeps growing, this group helps the Belgium-based users know each other, and to spread
                    the word!</p>
                <p><a href="{{ $meetup_url }}" class="button radius default right">Register on Meetup.com</a></p>
            </div>
        </div>

    </section>

    <!-- events -->
    <section class="events">

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-11 content-semi">

                <h2>Our Meetup Events</h2>
                <p>We organise 6-8 meetups per year.</p>
                <p>We try and follow the same structure at each Meetup with one main talk by an invited speaker,
                    usually 30-45 minutes and two less formal sections, the Artisan Bar and the Composer Show.
                    Then there's always time for networking and socialising.</p>

                <div class="row">
                    <div class="columns large-6 small-12 medium-6">
                        <div class="card">
                            <div class="card-divider">
                                <img src="img/speaker.svg">
                                <h5>Main Talk</h5>
                            </div>
                            <div class="card-section">
                                <p>This part of the Meetup is a speaker presentation on a topic related to modern web
                                    development. The talk won't always be about Laravel or even PHP as we have to use a
                                    variety of tools in our day to day work as developers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="columns large-6 small-12 medium-6">
                        <div class="card">
                            <div class="card-divider">
                                <img src="img/artisan-bar.svg">
                                <h5>Artisan Bar</h5>
                            </div>
                            <div class="card-section">
                                <p>No, not a free all-night bar staffed by crafts people, but a take on the Apple Genius
                                    Bar.
                                    If you're stuck on something, sit down with a fellow programmer and show them your
                                    code to see if you can find a solution.
                                    Because two heads are always better than one, right?</p>
                            </div>
                        </div>
                    </div>
                    <div class="columns large-6 small-12 medium-6">
                        <div class="card">
                            <div class="card-divider">
                                <img src="img/composer-show.svg">
                                <h5>Composer Show</h5>
                            </div>
                            <div class="card-section">
                                <p>The Composer Show is our open floor slot where anyone can show us - in 10 minutes or
                                    less - what
                                    they're working on.</p>
                            </div>
                        </div>
                    </div>

                    <div class="columns large-6 small-12 medium-6">
                        <div class="card">
                            <div class="card-divider">
                                <img src="img/networking.svg">
                                <h5>Networking</h5>
                            </div>
                            <div class="card-section">
                                <p>There's always time at the end of the event to chat with the speakers and other
                                    members, find new coworkers or just have a laugh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- contact -->
    <section class="contact">

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content">
                <h2>Contact Us</h2>
                <p>The best way to get in touch is just to <a href="{{ $meetup_url }}">register</a> as a member and come
                    along to one of our events.</p>
                <p>The Meetup group is organised by Ben and Gilbert. You can tweet us <a
                            href="//twitter.com/{{ $twitter }}">{{ $twitter }}</a></p>
                <p>You can also directly message us using Meetup's internal messaging system.</p>
            </div>
        </div>
    </section>

    <!-- call for speakers -->
    <section>

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content">
                <h2>Call For Speakers</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, orci sit amet tincidunt
                    tincidunt, ex massa placerat est, quis vestibulum elit arcu a magna. Donec fermentum volutpat neque
                    a commodo. Sed vehicula risus pharetra, pretium metus ut, dapibus dolor. Sed convallis molestie
                    ultrices. Morbi at nulla neque. Integer commodo mattis ligula vel egestas. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Etiam laoreet leo tortor, sed dignissim elit placerat a. Sed sit
                    amet eros tempor lorem luctus aliquam sed sed mi. Quisque ut ante id nibh facilisis tempus eget ut
                    ex. Morbi augue magna, scelerisque ac venenatis at, molestie non nibh. Phasellus sodales nisi neque,
                    et luctus ex semper ut.
                    Maecenas ultrices ipsum vitae lobortis fringilla.</p>

                <p>Vivamus aliquet feugiat metus, sed vestibulum tellus molestie nec. Aenean purus nunc, pharetra ut
                    quam nec, pretium mollis tellus. Nulla id eros lacus. Phasellus condimentum finibus nibh id mattis.
                    Ut auctor tempor faucibus. Ut venenatis molestie elementum. Etiam in fermentum ex. Curabitur tellus
                    urna, luctus in vestibulum in, lobortis vitae elit. Proin quis nisl ac velit gravida ornare. Fusce
                    ut fermentum ex. Etiam at urna magna. Sed vestibulum, elit quis vehicula venenatis, ante odio
                    finibus justo, in suscipit lacus ex et nulla. Vestibulum congue lacinia justo, sit amet rutrum augue
                    elementum non. Nulla ornare nisl sollicitudin tortor sagittis luctus. Duis dictum pharetra nibh, eu
                    tempus metus accumsan tincidunt.</p>
            </div>
        </div>
    </section>

    <!-- CoC -->
    <section>

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content">
                <h2>Code of Conduct</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, orci sit amet tincidunt
                    tincidunt, ex massa placerat est, quis vestibulum elit arcu a magna. Donec fermentum volutpat neque
                    a commodo. Sed vehicula risus pharetra, pretium metus ut, dapibus dolor. Sed convallis molestie
                    ultrices. Morbi at nulla neque. Integer commodo mattis ligula vel egestas. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Etiam laoreet leo tortor, sed dignissim elit placerat a. Sed sit
                    amet eros tempor lorem luctus aliquam sed sed mi. Quisque ut ante id nibh facilisis tempus eget ut
                    ex. Morbi augue magna, scelerisque ac venenatis at, molestie non nibh. Phasellus sodales nisi neque,
                    et luctus ex semper ut.
                    Maecenas ultrices ipsum vitae lobortis fringilla.</p>

                <p>Vivamus aliquet feugiat metus, sed vestibulum tellus molestie nec. Aenean purus nunc, pharetra ut
                    quam nec, pretium mollis tellus. Nulla id eros lacus. Phasellus condimentum finibus nibh id mattis.
                    Ut auctor tempor faucibus. Ut venenatis molestie elementum. Etiam in fermentum ex. Curabitur tellus
                    urna, luctus in vestibulum in, lobortis vitae elit. Proin quis nisl ac velit gravida ornare. Fusce
                    ut fermentum ex. Etiam at urna magna. Sed vestibulum, elit quis vehicula venenatis, ante odio
                    finibus justo, in suscipit lacus ex et nulla. Vestibulum congue lacinia justo, sit amet rutrum augue
                    elementum non. Nulla ornare nisl sollicitudin tortor sagittis luctus. Duis dictum pharetra nibh, eu
                    tempus metus accumsan tincidunt.</p>
            </div>
        </div>
    </section>

    <!-- events -->
    <section>

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content">
                <h2>Sponsorship & Support</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, orci sit amet tincidunt
                    tincidunt, ex massa placerat est, quis vestibulum elit arcu a magna. Donec fermentum volutpat neque
                    a commodo. Sed vehicula risus pharetra, pretium metus ut, dapibus dolor. Sed convallis molestie
                    ultrices. Morbi at nulla neque. Integer commodo mattis ligula vel egestas. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Etiam laoreet leo tortor, sed dignissim elit placerat a. Sed sit
                    amet eros tempor lorem luctus aliquam sed sed mi. Quisque ut ante id nibh facilisis tempus eget ut
                    ex. Morbi augue magna, scelerisque ac venenatis at, molestie non nibh. Phasellus sodales nisi neque,
                    et luctus ex semper ut.
                    Maecenas ultrices ipsum vitae lobortis fringilla.</p>

                <p>Vivamus aliquet feugiat metus, sed vestibulum tellus molestie nec. Aenean purus nunc, pharetra ut
                    quam nec, pretium mollis tellus. Nulla id eros lacus. Phasellus condimentum finibus nibh id mattis.
                    Ut auctor tempor faucibus. Ut venenatis molestie elementum. Etiam in fermentum ex. Curabitur tellus
                    urna, luctus in vestibulum in, lobortis vitae elit. Proin quis nisl ac velit gravida ornare. Fusce
                    ut fermentum ex. Etiam at urna magna. Sed vestibulum, elit quis vehicula venenatis, ante odio
                    finibus justo, in suscipit lacus ex et nulla. Vestibulum congue lacinia justo, sit amet rutrum augue
                    elementum non. Nulla ornare nisl sollicitudin tortor sagittis luctus. Duis dictum pharetra nibh, eu
                    tempus metus accumsan tincidunt.</p>
            </div>
        </div>
    </section>
    <!-- events -->
    <section>

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content">
                <h2>Other PHP Meetup Groups in Belgium</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, orci sit amet tincidunt
                    tincidunt, ex massa placerat est, quis vestibulum elit arcu a magna. Donec fermentum volutpat neque
                    a commodo. Sed vehicula risus pharetra, pretium metus ut, dapibus dolor. Sed convallis molestie
                    ultrices. Morbi at nulla neque. Integer commodo mattis ligula vel egestas. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Etiam laoreet leo tortor, sed dignissim elit placerat a. Sed sit
                    amet eros tempor lorem luctus aliquam sed sed mi. Quisque ut ante id nibh facilisis tempus eget ut
                    ex. Morbi augue magna, scelerisque ac venenatis at, molestie non nibh. Phasellus sodales nisi neque,
                    et luctus ex semper ut.
                    Maecenas ultrices ipsum vitae lobortis fringilla.</p>

                <p>Vivamus aliquet feugiat metus, sed vestibulum tellus molestie nec. Aenean purus nunc, pharetra ut
                    quam nec, pretium mollis tellus. Nulla id eros lacus. Phasellus condimentum finibus nibh id mattis.
                    Ut auctor tempor faucibus. Ut venenatis molestie elementum. Etiam in fermentum ex. Curabitur tellus
                    urna, luctus in vestibulum in, lobortis vitae elit. Proin quis nisl ac velit gravida ornare. Fusce
                    ut fermentum ex. Etiam at urna magna. Sed vestibulum, elit quis vehicula venenatis, ante odio
                    finibus justo, in suscipit lacus ex et nulla. Vestibulum congue lacinia justo, sit amet rutrum augue
                    elementum non. Nulla ornare nisl sollicitudin tortor sagittis luctus. Duis dictum pharetra nibh, eu
                    tempus metus accumsan tincidunt.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9">
                <h4>Picture Credits</h4>
                <p>Hard Hat icon created by Michele Zamparo from the Noun Project - Creative Commons<br>
                Two people icon created by Focus Lab from the Noun Project - Creative Commons<br>
                Speaker icon Created by Mazil from the Noun Project - Creative Commons</p>
            </div>
        </div>
    </footer>

@endsection
