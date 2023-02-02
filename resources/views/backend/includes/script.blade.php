    <script src="{{asset('backend/lib/jquery/jquery.min.js')}}"></script> 
    <script src="{{asset('backend/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/lib/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('backend/lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('backend/lib/rickshaw/vendor/d3.min.js')}}"></script>
    <script src="{{asset('backend/lib/rickshaw/vendor/d3.layout.min.js')}}"></script>
    <script src="{{asset('backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('backend/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backend/lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('backend/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backend/lib/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('backend/lib/select2/js/select2.full.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>
    <script src="{{asset('backend/lib/gmaps/gmaps.min.js')}}"></script>

    <script src="{{asset('backend/js/bracket.js')}}"></script>
    <script src="{{asset('backend/js/map.shiftworker.js')}}"></script>
    <script src="{{asset('backend/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('backend/js/dashboard.js')}}"></script>


    <!-- FORM WIZERD -->
    <script src="{{asset('backend/lib/highlightjs/highlight.pack.min.js')}}"></script>
    <script src="{{asset('backend/lib/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{asset('backend/lib/parsleyjs/parsley.min.js')}}"></script>
       <!-- toastr cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- myscript -->
    <script src="{{asset('backend/js/myscript.js')}}"></script>

    <script>
      @if(Session::has('shykat'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.success("{{ session('shykat') }}");
      @endif

      @if(Session::has('error'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.error("{{ session('error') }}");
      @endif

      @if(Session::has('info'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.info("{{ session('info') }}");
      @endif

      @if(Session::has('warning'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.warning("{{ session('warning') }}");
      @endif


      $(document).ready(function(){
        'use strict';
        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                var fname = $('#firstname').parsley();
                var lname = $('#lastname').parsley();

                if(fname.isValid() && lname.isValid()) {
                  return true;
                } else {
                  fname.validate();
                  lname.validate();
                }
              }

              // Step 2 form validation
              if(currentIndex === 1) {
                var email = $('#email').parsley();
                var phone = $('#phone').parsley();
                if(email.isValid() && phone.isValid() ) {
                  return true;
                } else { email.validate(); phone.validate(); }
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
        });

      });
    </script>