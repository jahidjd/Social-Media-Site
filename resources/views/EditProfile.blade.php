@extends('frontLayout')
@section('menu')
@include('headerMenu')
    
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
            <div class="container">
                <div class="row"> 
                    <br><br><br><br>
                    <h1>Edit Profile</h1>
                    <form action="{{route('saveAbout')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <td>Name</td>
                                <input type="hidden" value="{{$user->id}}" name="subscriber_id">
                                <td colspan="2"><input type="text" value="{{$user->first_name.' '.$user->last_name}}" class="form-control" disabled></td>
                                <td>Nike Name</td>
                                <td colspan="2"><input type="text" name="nike_name" class="form-control" placeholder="Your Nike Name"></td>
                                
                                
                            </tr>
                            <tr>
                              <td>Profile Picture</td>
                              <td colspan="2"><input type="file" name="profile_pic" class="form-control"></td>
                              <td>Cover Picture</td>
                              <td colspan="2"><input type="file" name="cover_pic" class="form-control"></td>
                              
                            </tr>
                            <tr>
                              <td>School</td>
                              <td><input type="text" name="school" class="form-control" placeholder="Write Your School Name"></td>
                              <td>Starts From</td>
                              <td><input type="date" name="school_start" class="form-control"></td>
                              <td>To</td>
                              <td><input type="date" name="school_end" class="form-control"></td>
                            </tr>
                            <tr>
                              <td>College</td>
                              <td><input type="text" name="college" class="form-control" placeholder="Write Your College Name"></td>
                              <td>Starts From</td>
                              <td><input type="date" name="college_starts" class="form-control"></td>
                              <td>To</td>
                              <td><input type="date" name="college_end" class="form-control"></td>
                            </tr>
                            <tr>
                              <td>University</td>
                              <td><input type="text" name="university" class="form-control" placeholder="Write Your University Name"></td>
                              <td>Starts From</td>
                              <td><input type="date" name="university_starts" class="form-control"></td>
                              <td>To</td>
                              <td><input type="date" name="university_end" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>About Details</td>
                                <td colspan="6">
                                    <textarea name="about_details" id="" cols="15" rows="5" class="form-control" placeholder="Write Something About Yourself"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Work</td>
                                <td colspan="4"><input type="text" name="work" class="form-control" placeholder="Write What you do for living"></td>
                                <td><input type="submit" value="Save" class="btn btn-info btn-block"></td>
                            </tr>
                        </table>
                    </form>
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

{{-- 
  --}}
    
@endsection