<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form class="review-form" wire:submit.prevent="store">
        @csrf
        <div class="form-group">
            <input class="input" wire:model="subject" type="text" placeholder="Subject"/>
            @error('subject') <span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <textarea type="input" wire:model="review" placeholder="Your review"></textarea>
            @error('review') <span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <div class="input-rating">
                @error('rate')<input class="text-danger">{{$message}}</span>@enderror
                <strong class="text-uppercase">Your Rating:</strong>
                <div class="starts">
                    <input type="radio" id="start5" wire:model="rate" value="5"/><label form="start5"></label>
                    <input type="radio" id="start4" wire:model="rate" value="4"/><label form="start4"></label>
                    <input type="radio" id="start3" wire:model="rate" value="3"/><label form="start3"></label>
                    <input type="radio" id="start2" wire:model="rate" value="2"/><label form="start2"></label>
                    <input type="radio" id="start1" wire:model="rate" value="1"/><label form="start1"></label>
                </div>
            </div>
        </div>
        @auth
            <input type="submit" class="btn btn-success" value="Save"></input>
        @else
            <a href="/login" class="primary-btn">For submit Your Review, Please Login</a>
        @endauth
    </form>
</div>
</form>


</div>
