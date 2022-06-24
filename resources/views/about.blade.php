@extends('frontLayout')
<!-- Header
    ================================================= -->
@section('menu')
@include('headerMenu')

@endsection
<!--Header End-->

@section('body')
<div class="container">

    <!-- Timeline
        ================================================= -->
    <div class="timeline">
        <div class="timeline-cover"
            style=' background: url("frontAssets/userImage/{{$aboutInformation->cover_pic}}") no-repeat;'>

            <!--Timeline Menu for Large Screens-->
            @include('timelineMenu')
            <!--Timeline Menu for Large Screens End-->

            <!--Timeline Menu for Small Screens-->
            {{-- <div class="navbar-mobile hidden-lg hidden-md">
                <div class="profile-info">
                    <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
                    <h4>Sarah Cruiz</h4>
                    <p class="text-muted">Creative Director</p>
                </div>
                <div class="mobile-menu">
                    <ul class="list-inline">
                        <li><a href="{{route('profile')}}">Timeline</a></li>
                        <li><a href="{{route('about')}}" class="active">About</a></li>
                        <li><a href="timeline-album.html">Album</a></li>
                        <li><a href="timeline-friends.html">Friends</a></li>
                    </ul>
                    <button class="btn-primary">Add Friend</button>
                </div>
            </div> --}}
            <!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-7">

                    <!-- About
                ================================================= -->
                    <div class="about-profile">
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Personal
                                Information</h4>
                            <p>{{$aboutInformation->about_details}}
                            </p>
                        </div>
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Education
                            </h4>
                            @if(!empty($aboutInformation->university))
                            <div class="organization">
                                <img src="{{url('frontAssets/images/edu.jpg')}}" alt="" class="pull-left img-org" />
                                <div class="work-info">
                                    <h5>University</h5>
                                    <p>{{$aboutInformation->university}}</p>
                                    <p>Graduation <span class="text-grey">From
                                            ({{$aboutInformation->university_starts}}), To
                                            ({{$aboutInformation->university_end}})</span></p>

                                </div>
                            </div>
                            @endif
                            @if(!empty($aboutInformation->college))
                            <div class="organization">
                                <img src="{{url('frontAssets/images/edu.jpg')}}" alt="" class="pull-left img-org" />
                                <div class="work-info">
                                    <h5>College</h5>
                                    <p>{{$aboutInformation->college}}</p>
                                    <p>Graduation <span class="text-grey">From ({{$aboutInformation->college_starts}}),
                                            To ({{$aboutInformation->college_end}})</span></p>

                                </div>
                            </div>
                            @endif
                            @if(!empty($aboutInformation->school))
                            <div class="organization">
                                <img src="{{url('frontAssets/images/edu.jpg')}}" alt="" class="pull-left img-org" />
                                <div class="work-info">
                                    <h5>School</h5>
                                    <p>{{$aboutInformation->school}}</p>
                                    <p>Graduation <span class="text-grey">From ({{$aboutInformation->school_start}}), To
                                            ({{$aboutInformation->school_end}})</span></p>

                                </div>
                            </div>
                            @endif


                        </div>
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Work
                            </h4>
                            <div class="organization">
                                <img src="{{url('frontAssets/images/work.jpg')}}" alt="" class="pull-left img-org" />
                                <div class="work-info">
                                    <h5>Work Place</h5>
                                    <p>Position: <span class="text-grey">{{$aboutInformation->work}}</span></p>

                                </div>
                            </div>
                            >
                        </div>
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i>Location</h4>
                            <p>228 Park Eve, New York</p>
                            <div class="google-maps">
                                <div id="map" class="map"></div>
                            </div>
                        </div>
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-heart-outline icon-in-title"></i>Interests</h4>
                            <ul class="interests list-inline">
                                <li><span class="int-icons" title="Bycycle riding"><i
                                            class="icon ion-android-bicycle"></i></span></li>
                                <li><span class="int-icons" title="Photography"><i
                                            class="icon ion-ios-camera"></i></span></li>
                                <li><span class="int-icons" title="Shopping"><i
                                            class="icon ion-android-cart"></i></span></li>
                                <li><span class="int-icons" title="Traveling"><i
                                            class="icon ion-android-plane"></i></span></li>
                                <li><span class="int-icons" title="Eating"><i
                                            class="icon ion-android-restaurant"></i></span></li>
                            </ul>
                        </div>
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-chatbubble-outline icon-in-title"></i>Language</h4>
                            <ul>
                                <li><a href="#">Russian</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 static">
                    <div id="sticky-sidebar">

                        <h4 class="grey"><a href="{{route('editAbout')}}">Edit Profile</a></h4>
                        <h4 class="grey">Sarah's activity</h4>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                                <p class="text-muted">5 mins ago</p>
                            </div>
                        </div>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                                <p class="text-muted">an hour ago</p>
                            </div>
                        </div>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                                <p class="text-muted">4 hours ago</p>
                            </div>
                        </div>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                                <p class="text-muted">a day ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer
      ================================================= -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-wrapper">
                <div class="col-md-3 col-sm-3">
                    <a href="#"><img src="images/logo-black.png" alt="" class="footer-logo" /></a>
                    <ul class="list-inline social-icons">
                        <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h5>For individuals</h5>
                    <ul class="footer-links">
                        <li><a href="#">Signup</a></li>
                        <li><a href="#">login</a></li>
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Finder app</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Language settings</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h5>For businesses</h5>
                    <ul class="footer-links">
                        <li><a href="#">Business signup</a></li>
                        <li><a href="#">Business login</a></li>
                        <li><a href="#">Benefits</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Setup</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h5>About</h5>
                    <ul class="footer-links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h5>Contact Us</h5>
                    <ul class="contact">
                        <li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
                        <li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
                        <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Thunder Team © 2016. All rights reserved</p>
    </div>
</footer>

<!--preloader-->
<div id="spinner-wrapper">
    <div class="spinner"></div>
</div>

@endsection