@extends('frontLayout')
@section('menu')
@include('headerMenu')
<!--Header End-->

@endsection

@section('body')
<div class="container">

    <!-- Timeline
    ================================================= -->
    <div class="timeline">
        <div class="timeline-cover" style=' background: url("frontAssets/userImage/{{$aboutInformation->cover_pic}}") no-repeat;'>

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
                        <li><a href="timline.html">Timeline</a></li>
                        <li><a href="timeline-about.html">About</a></li>
                        <li><a href="timeline-album.html" class="active">Album</a></li>
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

                    <!-- Photo Album
            ================================================= -->
                    <ul class="album-photos">
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
                                <img src="images/album/1.jpg" alt="photo" />
                            </div>
                            <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="images/album/1.jpg" alt="photo" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-2">
                                <img src="images/album/2.jpg" alt="photo" />
                            </div>
                            <div class="modal fade photo-2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="images/album/2.jpg" alt="photo" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-3">
                                <img src="images/album/3.jpg" alt="photo" />
                            </div>
                            <div class="modal fade photo-3" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="images/album/3.jpg" alt="photo" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-4">
                                <img src="images/album/4.jpg" alt="photo" />
                            </div>
                            <div class="modal fade photo-4" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="images/album/4.jpg" alt="photo" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-5">
                                <img src="images/album/5.jpg" alt="photo" />
                            </div>
                            <div class="modal fade photo-5" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="images/album/5.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-6">
                                <img src="images/album/6.jpg" alt="photo" />
                            </div>
                            <div class="modal fade photo-6" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="images/album/6.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-7">
                                <img src="images/album/7.jpg" alt="photo" />
                            </div>
                            <div class="modal fade photo-7" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="images/album/7.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-8">
                                <img src="images/album/8.jpg" alt="photo" />
                            </div>
                            <div class="modal fade photo-8" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="images/album/8.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-9">
                                <img src="images/album/9.jpg" alt="photo" />
                            </div>
                            <div class="modal fade photo-9" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="images/album/9.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 static">
                    <div id="sticky-sidebar">
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
