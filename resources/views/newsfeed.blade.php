@extends('frontLayout')

@section('body')
@section('menu')
@include('headerMenu')
<!--Header End-->

@endsection

<div id="page-contents">
    <div class="container">
        <div class="row">

            <!-- Newsfeed Common Side Bar Left
      ================================================= -->
            <div class="col-md-3 static">
                <div class="profile-card">
                    <img src="frontAssets/userImage/{{$aboutInformation->profile_pic}}" alt="user" class="profile-photo" />
                    <h5><a href="timeline.html" class="text-white">{{$user->first_name}} {{ $user->last_name}}</a></h5>
                    <a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
                </div>
                <!--profile card ends-->
                <ul class="nav-news-feed">
                    <li><i class="icon ion-ios-paper"></i>
                        <div><a href="newsfeed.html">My Newsfeed</a></div>
                    </li>
                    <li><i class="icon ion-ios-people"></i>
                        <div><a href="newsfeed-people-nearby.html">People Nearby</a></div>
                    </li>
                    <li><i class="icon ion-ios-people-outline"></i>
                        <div><a href="{{route('friend')}}">Friends</a></div>
                    </li>
                    <li><i class="icon ion-chatboxes"></i>
                        <div><a href="{{route('message')}}">Messages</a></div>
                    </li>
                    <li><i class="icon ion-images"></i>
                        <div><a href="newsfeed-images.html">Images</a></div>
                    </li>
                    <li><i class="icon ion-ios-videocam"></i>
                        <div><a href="newsfeed-videos.html">Videos</a></div>
                    </li>
                </ul>
                <!--news-feed links ends-->
                <div id="chat-block">
                    <div class="title">Chat online</div>
                    <ul class="online-users list-inline">
                        <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="images/users/user-2.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                        <li><a href="newsfeed-messages.html" title="Sophia Lee"><img src="images/users/user-3.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                        <li><a href="newsfeed-messages.html" title="John Doe"><img src="images/users/user-4.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                        <li><a href="newsfeed-messages.html" title="Alexis Clark"><img src="images/users/user-5.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                        <li><a href="newsfeed-messages.html" title="James Carter"><img src="images/users/user-6.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                        <li><a href="newsfeed-messages.html" title="Robert Cook"><img src="images/users/user-7.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                        <li><a href="newsfeed-messages.html" title="Richard Bell"><img src="images/users/user-8.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                        <li><a href="newsfeed-messages.html" title="Anna Young"><img src="images/users/user-9.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                        <li><a href="newsfeed-messages.html" title="Julia Cox"><img src="images/users/user-10.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                    </ul>
                </div>
                <!--chat block ends-->
            </div>
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
                                        <li><a href="#"><i class="ion-images photoUpload" id="inputFilePhoto"> <input type="file" name="photo" class="fileUpload "></i></a></li>

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
                        @foreach ($allUser as $u)
                            @if ($u->id==$p->subscriber_id)
                               {{$u->first_name}}
                            @endif
                        @endforeach
                        <h5>
                            
                        </h5>
                        <p class="text-grey">Sometimes ago</p>
                    </div>
                    <!--Post Date End-->
                    @if ($p->photo)
                    <img src="frontAssets/userImage/postPhoto/{{$p->photo}}" alt="post-image" class="img-responsive post-image" />
                    @endif
                    @if ($p->video)
                    <div class="video-wrapper">
                        <video class="post-video" controls>
                            <source src="videos/8.mp4" type="video/mp4">
                        </video>
                    </div>
                    @endif

                    <div class="post-container">
                        @foreach ($allInfo as $u)
                        @if ($u->id==$p->about_subscriber_id)
                        <img src="frontAssets/userImage/{{$u->profile_pic}}" alt="user" class="profile-photo-md pull-left" />
                        @endif
                    @endforeach
                        
                        <div class="post-detail">
                            <div class="user-info">
                                <h5><a href="timeline.html" class="profile-link">@foreach ($allUser as $u)
                            @if ($u->id==$p->subscriber_id)
                               {{$u->first_name}}
                            @endif
                        @endforeach</a> <span class="following">following</span></h5>
                                <p class="text-muted">Published a photo about 15 mins ago</p>
                            </div>
                            <div class="reaction">
                                <a class="btn text-green like "><i class="icon ion-thumbsup "></i>0</a>
                                <a class="btn text-red dislike "><i class="fa fa-thumbs-down"></i>0</a>
                            </div>
                            <div class="line-divider"></div>
                            <div class="post-text">
                                <p>{{$p->post_details}} <i class="em em-anguished"></i> <i class="em em-anguished"></i>
                                    <i class="em em-anguished"></i></p>
                            </div>
                            <div class="line-divider"></div>
                            @forelse ($comment as $c)

                            @if ($c->post_id==$p->id)
                            <div class="post-comment">
                                @foreach ($allInfo as $a)
                                @if ($a->id==$c->about_subscriber_id)
                                <img src="frontAssets/userImage/{{$a->profile_pic}}" alt="" class="profile-photo-sm" />
                                @endif
                            @endforeach
                                
                                
                            
                                
                                <p><a href="timeline.html" class="profile-link">
                                    @foreach ($allUser as $a)
                                        @if ($a->id==$c->subscriber_id)
                                            {{$a->first_name}}
                                        @endif
                                    @endforeach
                                     </a><i class="em em-laughing"></i>
                                    {{$c->comment}} </p>
                            </div>
                            @endif

                            @empty
                            {{''}}
                            @endforelse


                            <div class="post-comment">
                                
                                
                                <img src="frontAssets/userImage/{{$aboutInformation->profile_pic}}" alt="" class="profile-photo-sm" />
                                <form action="{{route('comment')}}" method="post">
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

                <!-- Post Content
        ================================================= -->


            </div>

            <!-- Newsfeed Common Side Bar Right
      ================================================= -->
            <div class="col-md-2 static">
                <div class="suggestions" id="sticky-sidebar">
                    <h4 class="grey">Who to Follow</h4>
                    @foreach ($allUser as $key=>$su)
                    @if ($key<5 && $su!=$user)
                    <div class="follow-user">
                        @foreach ($allInfo as $al)
                            @if ($al->subscriber_id==$su->id)
                            <img src="frontAssets/userImage/{{$al->profile_pic}}" alt="" class="profile-photo-sm pull-left" />
                            @endif
                        @endforeach
                        
                        <div>
                            <h5><a href="timeline.html">{{$su->first_name}}</a></h5>
                            <a href="{{route('friendRequest',$su->id)}}" class="">Add friend</a>
                        </div>
                    </div>
                   
                    
                    @endif
                    
                    @endforeach
                    <a href="{{route('findFriend')}}">See More</a>
                    
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
