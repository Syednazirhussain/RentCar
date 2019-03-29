<!DOCTYPE html>
<html lang="en-US">
   <head>
          <meta charset="utf-8">
    </head>
    <body>
    	  <h3>Dear Administrator,</h3>
        <p>{{ $name }} shows there interst in {{ $package }} package</p>
        <div style="width: 100%">
          <p>
            <span style="width: 20%"><strong> Customer Name: </strong></span>
            <span style="width: 80%"> {{ $name }}  </span>
          </p>
          <p>
            <span style="width: 20%"><strong> Email: </strong></span>
            <span style="width: 80%"> {{ $email }}  </span>
          </p>
          <p>
            <span style="width: 20%"><strong> Phone: </strong></span>
            <span style="width: 80%"> {{ $phone }}  </span>
          </p>
          <p>
            <span style="width: 20%"><strong> Pickup time: </strong></span>
            <span style="width: 80%"> {{ $pickup_time }}  </span>
          </p>
          <p>
            <span style="width: 20%"><strong> Pickup Address: </strong></span>
            <span style="width: 80%"> {{ $pickup_address }}</span>
          </p>
          <p>
            <span style="width: 20%"><strong> Dropoff Address: </strong></span>
            <span style="width: 80%"> {{ $dropoff_address }}</span>
          </p>

        </div>
    </body>
</html>