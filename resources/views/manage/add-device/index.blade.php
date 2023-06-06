@extends('layout.main')

@section('content')

<div class="container-fluid py-4">

    

    <div class="row mt-4">
        <div class="col-xl-12 mb-xl-0 mb-4">
            <div class="row">
                <div class="col-lg-8 mb-lg-0 mb-4">
              {{--? Start Upcoming  --}}
              <div class="row">
                <div class="col-md-12 mb-lg-0 mb-4">
                  <div class="card">
                    <div class="card-header">
                      {{-- <h6>Mac Address: </h6>
                      <p>{{ $macAddress }}</p> --}}


                      <h1>Form</h1>
                      <form action="/api/send-mac-address" method="GET">
                          <button type="submit">Send MAC Address</button>
                      </form>
                      <div id="response"></div>
                  
                      <script>
                          document.querySelector('form').addEventListener('submit', function (event) {
                              event.preventDefault();
                              
                              fetch('/api/send-mac-address')
                                  .then(function(response) {
                                      return response.text();
                                  })
                                  .then(function(data) {
                                      document.getElementById('response').innerText = data;
                                  });
                          });
                      </script>


                   </h6>
                    </div>
                    <div class="card-body">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

</div>
@endsection