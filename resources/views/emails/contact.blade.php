<!DOCTYPE html>
<html lang="en-US">
   <head>
          <meta charset="utf-8">
    </head>
    <body>
    	  <h3>Dear Administrator,</h3>
        <div style="width: 100%">
          <p>
            <span style="width: 20%"><strong> Name: </strong></span>
            <span style="width: 80%"> {{ $name }}  </span>
          </p>
          <p>
            <span style="width: 20%"><strong> Phone: </strong></span>
            <span style="width: 80%"> {{ $phone }}  </span>
          </p>
          <p>
            <span style="width: 20%"><strong> Email: </strong></span>
            <span style="width: 80%"> {{ $email }}</span>
          </p>
          <p>
            <span style="width: 20%"><strong> Subject: </strong></span>
            <span style="width: 80%"> <em>{{ $subject }}</em> </span>
          </p>
          <p>
            <span style="width: 20%"><strong> Your message: </strong></span>
            <span style="width: 80%"> <em>{{ htmlspecialchars_decode($messages) }}</em> </span>
          </p>
        </div>
    </body>
</html>