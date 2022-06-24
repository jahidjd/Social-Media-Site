@extends('frontLayout')

@section('body')

<div class="container">
    @section('menu')
    @include('headerMenu')
    <!--Header End-->

    @endsection
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
                        <li><a href="timline.html" class="active">Timeline</a></li>
                        <li><a href="timeline-about.html">About</a></li>
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

                    <!-- Post Create Box
            ================================================= -->
                    <div class="create-post">
                        <div class="row">
                         <form action="{{route('post')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-7 col-sm-7">
                                <div class="form-group">
                                    <img src="frontAssets/userImage/{{$aboutInformation->profile_pic}}" alt="" class="profile-photo-md" />
                                    <textarea name="post_details" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="tools">
                                    <ul class="publishing-tools list-inline">
                                        {{-- <input type="file" class="form-control" name="photo"> --}}
                                      
                                        <li><a href="#"><i class="ion-compose"></i></a></li>
                                        <li><a href="#" ><i class="ion-images photoUpload" id="inputFilePhoto" > <input type="file" name="photo" class="fileUpload "></i></a></li>
                                       
                                        <li><a href="#"><i class="ion-ios-videocam photoUpload"></i></a></li>
                                        <li><a href="#"><i class="ion-map"></i></a></li>
                                    </ul><br>
                                    
                                    <select name="status" id="" class="form-control">
                                        <option value="">Select Privacy</option>
                                        <option value="public">Public</option>
                                        <option value="friends">Friends</option>
                                        <option value="only_me">Only Me</option>
                                    </select>
                                    <button class="btn btn-primary pull-right" type="submit">Publish</button>
                                </div>
                            </div>
                         </form>
                         {{-- <button id="">Click</button> --}}
                        </div>
                    </div><!-- Post Create Box End-->

                    <!-- Post Content
            ================================================= -->
            @forelse ($post as $p)
                        {{-- {{dd($p->post_details)}} --}}
              <div class="post-content">

                <!--Post Date-->
                <div class="post-date hidden-xs hidden-sm">
                    <h5>{{$user->first_name}}</h5>
                    <p class="text-grey">Sometimes ago</p>
                </div>
                <!--Post Date End-->

                <img src="frontAssets/userImage/postPhoto/{{$p->photo}}" alt="post-image" class="img-responsive post-image" />
                <div class="post-container">
                    <img src="frontAssets/userImage/{{$aboutInformation->profile_pic}}" alt="user" class="profile-photo-md pull-left" />
                    <div class="post-detail">
                        <div class="user-info">
                            <h5><a href="timeline.html" class="profile-link">{{$user->first_name}}</a> <span class="following">following</span></h5>
                            <p class="text-muted">Published a photo about 15 mins ago</p>
                        </div>
                        <div class="reaction">
                            <a class="btn text-green like " ><i class="icon ion-thumbsup " ></i>0</a>
                            <a class="btn text-red dislike "><i class="fa fa-thumbs-down" ></i>0</a>
                        </div>
                        <div class="line-divider"></div>
                        <div class="post-text">
                            <p>{{$p->post_details}} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                        </div>
                        <div class="line-divider"></div>
                        @forelse ($comment as $c)
                       
                            @if ($c->post_id==$p->id)
                            <div class="post-comment">
                                <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> {{$c->comment}} </p>
                            </div>
                            @endif
                        
                        @empty
                           {{''}} 
                        @endforelse
                        
                        
                        <div class="post-comment">
                            <img src="frontAssets/userImage/{{$aboutInformation->profile_pic}}" alt="" class="profile-photo-sm" />
                          <form action="{{route('comment')}}" method="post" >
                              @csrf
                              <input type="hidden" value="{{$p->id}}" name="post_id">
                            <input type="text" class="form-control" placeholder="Post a comment" name="comment">
                            <input type="submit" value="comment" class="btn btn-default">
                          </form>
                        </div>
                    </div>
                </div>
                </div>
            @empty
                {{'You did not upload any post yet!'}}
            @endforelse
                    

                  

                   

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
@section('jQuery')
<script>
      $(document).ready(function(){
          $('.like').click(function(){
            $('.like').html(1);
              alert(1);
             
          });
          $('.dislike').click(function(){
              alert(1);
             
          });
      });

   
  </script>
    
@endsection