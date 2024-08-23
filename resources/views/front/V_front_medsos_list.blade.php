<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-comments mr-1"></i>
            Daftar Media Sosial
        </h3>
    </div>
    <div class="card-body" style="display: block; max-height: 30vh; overflow-y: scroll">
        @foreach ($medsos_list as $item)
        @if ($item->medsos_name == "No Telepon")
        <a href="{{ url('tel:' .$item->medsos_link) }}" style="text-decoration:none; color: inherit;" target="_blank">
            @else
            <a href="{{ url($item->medsos_link) }}" style="text-decoration:none; color: inherit;" target="_blank">
                @endif
                @if ($item->medsos_name == "Email")
                <img src="{{ asset('img/default/gmail.png') }}" width="15" height="15" alt="">
                @elseif ($item->medsos_name == "Youtube")
                <img src="{{ asset('img/default/youtube.png') }}" width="15" height="15" alt="">
                @elseif ($item->medsos_name == "WhatsApp")
                <img src="{{ asset('img/default/whatsapp.png') }}" width="15" height="15" alt="">
                @elseif ($item->medsos_name == "Instagram")
                <img src="{{ asset('img/default/instagram.png') }}" width="15" height="15" alt="">
                @elseif ($item->medsos_name == "Facebook")
                <img src="{{ asset('img/default/facebook.png') }}" width="15" height="15" alt="">
                @elseif ($item->medsos_name == "Twitter")
                <img src="{{ asset('img/default/twitter.png') }}" width="15" height="15" alt="">
                @elseif ($item->medsos_name == "No Telepon")
                <img src="{{ asset('img/default/telephone-call.png') }}" width="15" height="15" alt="">
                @else
                <img src="{{ asset('img/default/default-image.png') }}" width="15" height="15" alt="">
                @endif
                <span>{{ $item->medsos_name }}</span>
            </a>
            <hr>
            @endforeach
    </div>
</div>