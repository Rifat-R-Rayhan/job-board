<h3 style="text-align: center">We send a verification mail in your email address <br>
    You must verify your email to access dashboard</h3>

<hr>
@if(session('status') == 'verification-link-sent')
    <p><i>Verification mail has been send</i></p>
@endif
<hr>

    <form action="{{route('verification.send')}}" method="post">
        @csrf
        <button style="margin-left: 36%" type="submit">Resend Email</button>
    </form>