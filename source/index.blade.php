@extends('_layouts.master')

@section('body')

    <img class="logo" title="Laravel Logo" alt="Laravel Logo" src="img/laravel.svg">

    <!-- intro -->
    <section class="intro">

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content-semi">
                <h1>About Laravel Brussels</h1>
                <p>The Laravel Brussels Meetup is group for anyone interested in learning about and sharing their
                    knowledge of Laravel, the "PHP framework for web artisans". The group welcomes beginners and
                    experts, amateurs and pros, young and old, etc. Laravel is an accessible, yet powerful PHP framework
                    for web application development. Its expressive, elegant syntax and its clean structure make PHP
                    development a real joy. As the Laravel community keeps growing, this group helps the Belgium-based
                    users know each other, and to spread the word!</p>
                <p><a href="{{ $meetup_url }}" class="button default">Register on Meetup.com</a></p>
            </div>
        </div>

    </section>

    <!-- events -->
    <section class="events">

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-12 content-semi">

                <h2>Our Meetup Events</h2>
                <p>We organise 6-8 meetups per year.</p>
                <p>We try to follow the same structure at each Meetup with one main talk by an invited speaker lasting
                    usually 30-45 minutes and then two less formal sections, the Artisan Bar and the Composer Show.
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
                <p><a href="{{ $meetup_url }}" class="button large hollow expanded">Join. It's Free</a></p>
            </div>
        </div>

    </section>

    <!-- call for speakers -->
    <section class="call-for-speakers">

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content-semi">
                <h2>Call For Speakers</h2>
                <p>Do you have something to share? We're always on look out for speakers. You don't have to be an
                    expert. We're just a group of enthusiasts sharing what we know and care about. Even if it's your
                    first time speaking publicly, don't be shy, get in touch with Ben or Gilbert.</p>
                <h4>Topics</h4>
                <p>We cover a broad range of topics so the best approach is just to send is a short message with your
                    suggested topic.</p>
                <p>If you're short of ideas:</p>
                <blockquote>
                    <ul>
                        <li>Laravel features ( of course )</li>
                        <li>Lumen</li>
                        <li>PHP tips</li>
                        <li>VueJS</li>
                        <li>Testing tools</li>
                        <li>Architecture insights</li>
                        <li>Refactoring</li>
                        <li>Performance tips</li>
                        <li>Security issues</li>
                        <li>Deployment tools</li>
                        <li>Build processes</li>
                        <li>Code quality</li>
                        <li>Cool APIs and services</li>
                    </ul>

                </blockquote>
            </div>
        </div>

    </section>

    <!-- CoC -->
    <section class="code-of-conduct">

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content">
                <h2>Code of Conduct</h2>

                <p>All attendees, speakers, sponsors and volunteers at our meetups are required to agree with the
                    following code of conduct.
                    Organisers will enforce this code throughout the event.
                    We expect cooperation from all participants to help ensure a safe environment for everybody.</p>


                <h4>Summary</h4>

                <p>Our Meetup group is dedicated to providing harassment-free events open to everyone, regardless of
                    gender, gender identity and expression, age, sexual orientation, disability, physical appearance,
                    body size, race, ethnicity, religion (or lack thereof), or technology choices. We do not tolerate
                    harassment of Meetup attendees. Sexual language and imagery is not appropriate at the Meetup,
                    in the presentations or social media about the Meetup. Meetup members that violate these rules may
                    be expelled from the Meetup at the discretion of the organisers.</p>

                <h4>Details</h4>

                <p>Harassment includes offensive verbal comments related to gender, gender identity and expression, age,
                    sexual orientation, disability, physical appearance, body size, race, ethnicity, religion,
                    technology choices, sexual images in public spaces, deliberate intimidation, stalking, following,
                    harassing photography or recording, sustained disruption of talks or other events, inappropriate
                    physical contact, and unwelcome sexual attention.</p>

                <p>Participants asked to stop any harassing behavior are expected to comply immediately.</p>

                <p>Sponsors are also subject to the anti-harassment policy. In particular, sponsors should not use
                    sexualised images, activities, or other material.</p>

                <p>If a participant engages in harassing behavior, the organisers may take any action they
                    deem appropriate, including warning the offender or expulsion from the Meetup.</p>

                <p>If you are being harassed, notice that someone else is being harassed, or have any other concerns,
                    speak up and
                    please tell an organiser immediately.</p>

                <p>We expect participants to follow these rules at Meetup and workshop venues as well as related
                    social events.</p>

            </div>
        </div>

    </section>

    <!-- sponsorship -->
    <section class="sponsorship">

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content-semi">
                <h2>Sponsorship & Support</h2>
                <p>The group is run by volunteers. We're always happy to hear from companies that would like to support
                    our work.</p>
                <p>We receive in-kind support from:</p>
                <ul>
                    <li><a href="//betacowork.com">BetaCowork</a> who often host our events.</li>
                    <li><a href="//www.jetbrains.com">JetBrains</a> who offer free licences for software such as
                        PHPStorm which we can offer as prizes.
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <!-- other-groups -->
    <section class="other-groups">

        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9 content-semi">
                <h2>Other PHP Meetup Groups in Belgium And Nearby Laravel Events</h2>

                <blockquote class="organisations">

                    @foreach($other_organisations as $organisation => $url)

                        <p><a href="{{ $url }}">{{ $organisation }}</a></p>

                    @endforeach

                </blockquote>

            </div>
        </div>

    </section>

    <!-- footer -->

    <footer>
        <div class="row align-center">
            <div class="columns small-12 large-8 medium-9">
                <h4>Picture Credits</h4>
                <p>Hard Hat icon created by Michele Zamparo from the Noun Project - Creative Commons<br>
                    Two people icon created by Focus Lab from the Noun Project - Creative Commons<br>
                    Speaker icon Created by Mazil from the Noun Project - Creative Commons<br>
                    Coffee machine icon created by Agne Alesiute from the Noun Project - Creative Commons<br>
                    IIS over Western Europe - NASA</p>
                <hr>
                <h4>Content Credits</h4>
                <p>The code of conduct is adapted from the <a href="//confcodeofconduct.com">Conference Code of
                        Conduct.</a>
                    Contribute changes on <a href="//github.com/confcodeofconduct/confcodeofconduct.com">GitHub</a></p>
                <p>LARAVEL IS A TRADEMARK OF TAYLOR OTWELL. COPYRIGHT © TAYLOR OTWELL.</p>
            </div>
        </div>
    </footer>

@endsection
