<style>
    @media only screen and (max-width: 780px) {
	 .footer p{
			 font-size:11px;
			 margin-bottom:0px;
		    padding-top:0px;
	 }
     .row{
		 margin-top:10px !important;
	 }	 
	}
 </style>


<!-- Footer -->
  <footer class="container-fluid footer text-white" style="bottom:0;position:fixed;width:100%;background-color:#222042;">
               
  <div class="row no-gutters" id="footer">
        <div class="col-md-4">
          <p id="time"></p>
        </div>
        <div class="col-md-2"><p id="use">{{ __('app.common.login-user') }}: {{ session()->get('user') }}</p></div>
        <div class="col-md-6 float-left"><p>@ {{ __('app.common.copyright') }} <?= date('Y'); ?> {{ __('app.common.design-by') }} <a href="" target="_blank" class="text-white">Sanju Developer</p></a></div>
	</div>
                <!-- <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy BISHOP LAW2021</span>
                    </div>
                </div> -->
            </footer>
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('/dashboard-js/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('/dashboard-js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('/dashboard-js/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('/dashboard-js/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ url('/dashboard-js/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('/dashboard-js/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('/dashboard-js/js/demo/chart-pie-demo.js') }}"></script>

    
    <!-- Page level plugins -->
    <script src="{{ url('/dashboard-js/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('/dashboard-js/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('/dashboard-js/js/demo/datatables-demo.js') }}"></script>
    <script>
        
    function fnExcelReport(){
        var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
        var textRange; var j=0;
        tab = document.getElementById('dataTable'); // id of table

        for(j = 0 ; j < tab.rows.length ; j++) 
        {     
            tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
            //tab_text=tab_text+"</tr>";
        }

        tab_text=tab_text+"</table>";
        tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
        tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
        tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE "); 

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
        {
            txtArea1.document.open("txt/html","replace");
            txtArea1.document.write(tab_text);
            txtArea1.document.close();
            txtArea1.focus(); 
            sa=txtArea1.document.execCommand("SaveAs",true,"Subscribers.xls");
        }  
        else                 //other browser not tested on IE 11
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

        return (sa);
    }

    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$(function(){

    var url = "{{ route('changeLang') }}";  
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

    $('.fa-plus').on('click',function(){
        $('#ncate').css('display','block');
        $('.fa-minus').css('display','block');
        $('.fa-plus').css('display','none');
        $('#cat').prop('disabled',true);		
    });

    $('.fa-minus').on('click',function(){
        $('#ncate').css('display','none');
        $('.fa-minus').css('display','none');
        $('.fa-plus').css('display','block');
        $('#cat').prop('disabled',false);
        $('#ncate').prop('disabled',true);
        $('#ncate').val('');		
    });

    setInterval(function()
    { 
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        var date = new Date(); 
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'pm' : 'am';

        var datetime = days[date.getDay()]+ ","
                +date.getDate() + ","
                + months[date.getMonth()]  + "," 
                + date.getFullYear() + " @ "  
                + hours + ":"  
                + minutes + ":" 
                + date.getSeconds()+" "+ampm;
                $('#time').text(datetime);
    },1000);
}); 

    
    </script>