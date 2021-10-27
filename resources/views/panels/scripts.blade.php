
    <!-- BEGIN: Vendor JS-->
    <script>
        var assetBaseUrl = "{{ asset('') }}";
    </script>
    <script src="{{asset('vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{asset('fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{asset('fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    @yield('vendor-scripts')
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    @if($configData['mainLayoutType'] == 'vertical-menu')
    <script src="{{asset('js/scripts/configs/vertical-menu-light.js')}}"></script>
    @else
    <script src="{{asset('js/scripts/configs/horizontal-menu.js')}}"></script>
    @endif
    <script src="{{asset('js/core/app-menu.js')}}"></script>
    <script src="{{asset('js/core/app.js')}}"></script>
    <script src="{{asset('js/scripts/components.js')}}"></script>
    <script src="{{asset('js/scripts/footer.js')}}"></script>
    <script src="{{asset('js/scripts/customizer.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- END: Theme JS-->
    <script src="{{asset('vendors/js/extensions/toastr.min.js')}}"></script>

    <script src="{{asset('js/scripts/uppercase/input-case-enforcer.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         
          $('.bestupper').caseEnforcer('uppercase');
      });
    </script>
    
    @livewireScripts

    <script type="text/javascript">
        function showTime() {
          var date = new Date(),
              utc = new Date(Date.now(
                date.getFullYear(),
                date.getMonth(),
                date.getDate(),
                date.getHours(),
                date.getMinutes(),
                date.getSeconds()
              ));
      
          document.getElementById('time').innerHTML = utc.toLocaleTimeString('en-US',);
        }
      
        setInterval(showTime, 1000);
      </script>

      <script>
        @if(session('success'))
        
        toastr.success('{{session("success")}}', 'Exito', 
            {
                timeOut: 4500,
                closeButton : true,
                progressBar :true,
            }
        );

        
     @elseif(session('danger'))
    
     toastr.error('{{session("danger")}}', 'Alerta', 
            {
                timeOut: 4500,
                closeButton : true,
                progressBar :true,
            }
        );
    @elseif(session('warning'))
    
    toastr.warning('{{session("warning")}}', 'Alerta', 
            {
                timeOut: 4500,
                closeButton : true,
                progressBar :true,
            }
        );
    
   @elseif(session('info'))
   toastr.info('{{session("info")}}', 'Información', 
            {
                timeOut: 4500,
                closeButton : true,
                progressBar :true,
            }
        );
    @endif
    </script>
    <script>

        const btnSwitch = document.querySelector('#switch');

        btnSwitch.addEventListener('click', () => {
            document.body.classList.toggle('dark');
            btnSwitch.classList.toggle('active');

            // Guardamos el modo en localstorage.
            if(document.body.classList.contains('dark')){
                localStorage.setItem('dark-mode', 'true');
            } else {
                localStorage.setItem('dark-mode', 'false');
            }
        });

        // Obtenemos el modo actual.
        if(localStorage.getItem('dark-mode') === 'true'){
            document.body.classList.add('dark');
            btnSwitch.classList.add('active');
        } else {
            document.body.classList.remove('dark');
            btnSwitch.classList.remove('active');
        }
    </script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    @yield('page-scripts')
    <!-- END: Page JS-->
