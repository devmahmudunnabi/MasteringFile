
<!DOCTYPE html>
<html lang="en">
<!-- HEAD.BLADE.PHP -->
 @include('backend.includes.head')
 
 <body>
     
     <!-- ########## START: LEFT PANEL ########## -->
     <!-- LEFT SIDEBAR.blade.php -->
     @include('backend.includes.leftsidebar')
     
     <!-- ########## END: LEFT PANEL ########## -->
     
     <!-- ########## START: HEAD PANEL ########## -->
     <!-- TOPHEAD>BLADE>PHP -->
     @include('backend.includes.tophead')
     
     <!-- ########## END: HEAD PANEL ########## -->
     
     <!-- ########## START: RIGHT PANEL ########## -->
     <!-- RIGHTPANEL.BLADE>PHP -->
     @include('backend.includes.rightpanel')
     <!-- ########## END: RIGHT PANEL ########## --->
     
     <!-- ########## START: MAIN PANEL ########## -->
     <div class="br-mainpanel">
        
      @yield('allcontent')  
      <!-- FOOTER.VLADE.PHP -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    
    <!-- SCRIPT.BLADE.PHP -->
    @include('backend.includes.script')
  </body>
</html>
