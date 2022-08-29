

<ul>
    @if($firstname)
        <li>
             <strong>{{ $firstname }}</strong>
        </li>
    @endif

    @if($phone)
        <li>
            <strong>{{ $phone }}</strong>
        </li>
    @endif

    @if($email)
        <li>
            <strong>{{ $email }}</strong>
        </li>
    @endif

<hr>
@if($messageLines)
    <h4>
        Message:
    </h4>
    <p>
        @foreach ($messageLines as $messageLine)
            {{ $messageLine }}<br>
        @endforeach
    </p>
<hr>
@endif

@if($errors->any())
 <div class="alert alert-danger">
   <ul>
     @foreach($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
    </ul>
  </div>
  @endif
