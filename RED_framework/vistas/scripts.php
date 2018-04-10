    <!--   Core JS Files   -->
    <script src="vistas/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="vistas/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!--  Charts Plugin -->
	<script src="vistas/assets/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="vistas/assets/js/bootstrap-notify.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="vistas/text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="vistas/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="vistas/assets/js/demo.js"></script>
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Bienvenidos a <b>RED - FRAMEWORK</b> - el mejor framework para Desarrollo WEB -2017."

            },{
                type: 'info',
                timer: 4000
            });

    	});
    </script>