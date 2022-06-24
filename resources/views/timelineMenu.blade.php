
<div class="timeline-nav-bar hidden-sm hidden-xs">
    <div class="row">
        <div class="col-md-3">
            <div class="profile-info">
                <img src="frontAssets/userImage/{{$aboutInformation->profile_pic}}" alt="" class="img-responsive profile-photo"  />
                <h3>{{$user->first_name.' '.$user->last_name}}</h3>
                <p class="text-muted">{{$aboutInformation->work}}</p>
            </div>
        </div>
        <div class="col-md-9">
            <ul class="list-inline profile-menu">
                <li><a href="{{route('profile')}}"  class="<?php if( url()->current()==route('profile')){echo 'active';} ?>">Timeline</a></li>
                <li><a href="{{route('about')}}" class="<?php if( url()->current()==route('about')){echo 'active';} ?>">About</a></li>
                <li><a href="{{route('album')}}" class="<?php if( url()->current()==route('album')){echo 'active';} ?>">Album</a></li>
                <li><a href="{{route('friends')}}" class="<?php if( url()->current()==route('friends')){echo 'active';} ?>">Friends</a></li>
                
            </ul>
            <ul class="follow-me list-inline">
                <li>1,299 people following her</li>
                <li><button class="btn-primary">Add Friend</button></li>
            </ul>
        </div>
    </div>
</div>