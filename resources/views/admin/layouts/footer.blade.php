</div>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.init.dark.js') }}"></script>
    <script src="{{ asset('assets/js/app-style-switcher.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/pages/chartist/chartist-plugin-tooltip.js') }}"></script> -->
    <!--This page JavaScript -->
    <!-- chartist chart -->
   <!--  <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script> -->
<!--     <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.js') }}"></script> -->
    <!--c3 JavaScript -->
<!--     <script src="{{ asset('assets/libs/d3/dist/d3.min.js') }}"></script>
    <script src="{{ asset('assets/libs/c3/c3.min.js') }}"></script> -->
    <!-- Chart JS -->
   <!--  <script src="{{ asset('assets/js/pages/dashboards/dashboard1.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script> -->
    <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/forms/select2/select2.init.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('assets/libs/echarts/dist/echarts-en.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/pages/echarts/bar/bar.js') }}"></script> -->
    <script src="{{ asset('assets/libs/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
     <script src="{{ asset('assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatable/custom-datatable.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/c3/c3.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/pages/chartjs/chartjs.init.js') }}"></script> -->
    <script src="{{ asset('assets/libs/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.matchHeight.js') }}"></script>
    <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/libs/morris.js/morris.min.js') }}"></script>
    <!-- line chart -->

    <!-- <script src="{{ asset('assets/extra-libs/tiny-editable/mindmup-editabletable.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/extra-libs/tiny-editable/numeric-input-example.js') }}"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(function() {
                "use strict";
                // ------------------------------
                // Basic line chart
                // ------------------------------
                // based on prepared DOM, initialize echarts instance
                    var myChart = echarts.init(document.getElementById('basic-bar'));

                var option = {
                        // Setup grid
                        grid: {
                            left: '1%',
                            right: '2%',
                            bottom: '3%',
                            containLabel: true
                        },

                        // Add Tooltip
                        tooltip : {
                            trigger: 'axis'
                        },
                        legend: {
                            data:['']
                        },
                        toolbox: {
                            show : true,
                            feature : {

                                magicType : {show: true, type: ['bar']},
                                restore : {show: true},
                                saveAsImage : {show: true}
                            }
                        },
                        color: ["#8CC989"],
                        calculable : true,
                        xAxis : [
                            {
                                type : 'category',
                                data : ['YJ-99','YJ-98','YJ-97','YJ-96','YJ-95','YJ-94']
                            }
                        ],
                        yAxis : [
                            {
                                type : 'value'
                            }
                        ],
                        series : [
                            {
                                name:'Site A',
                                type:'bar',
                                data:[90, 85, 85, 75, 65, 70],
                                markPoint : {
                                    data : [
                                        // {type : 'max', name: 'Max'},
                                        // {type : 'min', name: 'Min'}
                                    ]
                                },
                                markLine : {
                                    data : [
                                        // {type : 'average', name: 'Average'}
                                    ]
                                }
                            }
                        ],  
                    };
                myChart.setOption(option);
            });

            var header_height = $('header').height();
            var siderbar_width = $('#sidebar').outerWidth();            
            var win_width = $(window).width();
			console.log(siderbar_width);
			console.log(win_width);
            var total_width = win_width - siderbar_width;
            $('#our-page-wrapper').css('margin-top', header_height+'px');
            // $('#all-content').css('width',total_width+'px');
            //$('#all-content').outerWidth(total_width);
            $(function () {
                $('#editable-datatable').DataTable();
            });

            // ---------INSIGHT PAGE-------
            var trc = 1;
            $('.insight-table tbody tr').each(function(index, el) {
                if ( ! $(this).hasClass('insight-row-dropdown') ){
                    if ( trc%2 == 0) {
                        $(this).addClass('even');
                        trc++;
                    }
                    else
                    {
                        $(this).addClass('odd');
                        trc++;
                    }
                }
            });

            // ---------INSIGHT PAGE CLOSE-------

            $('.our-data-table .insight-table .view-more-data').click(function(event) {
                event.preventDefault();
                if ($(this).hasClass('active')) {
                    $(this).parent().parent().next('.insight-row-dropdown').find('td>.view-more-dropdown-container').slideUp().removeClass('active');
                    $(this).removeClass('active').html('<span>View More</span><i class="fa fa-angle-right"></i>');
                }
                else{
                    $('.view-more-dropdown-container.active').slideUp().removeClass('active');
                    $('.our-data-table .insight-table .view-more-data.active').removeClass('active').html('<span>View More</span><i class="fa fa-angle-right"></i>');
                    $(this).addClass('active').html('<span>Close View</span><i class="fa fa-angle-down"></i>');
                    $(this).parent().parent().next('.insight-row-dropdown').find('td>.view-more-dropdown-container').slideDown().addClass('active');
                }
            });
            // ---------INSIGHT PAGE CLOSE-------


            $('.info-box.dropdown-info .arrow').click(function(event) {
                $(this).parent().siblings('.asset-field-container').slideToggle();
            });
            
            $(".dropdownPart .welcome-user i").click(function(event){
                event.preventDefault();
                $(this).parents('.dropdownPart').find('.dropdown_box').slideToggle();
            });
        });
        
        $(document).click(function(e){
            var container = $(".dropdownPart .welcome-user");
            var container2 = $(".dropdownPart .dropdown_box");
            if(!container.is(e.target) && container.has(e.target).length === 0 && !container2.is(e.target) && container2.has(e.target).length === 0){
                $(".dropdownPart .dropdown_box").slideUp();
            }
        });
    </script>
    
    <script>
        $(document).ready(function(){
            var windowUrl = window.location.href;
            windowUrl = windowUrl.substr(windowUrl.lastIndexOf('/') + 1,windowUrl.length);
            $(".nav-menu-left ul li a").each(function(){
                var Href = $(this).attr('href');
                if(windowUrl == Href){
                    $(".nav-menu-left ul li").removeClass('active');
                    $(this).parent('li').addClass('active');
                }
            });
            
            $(".sidebar-menu-part .sub-menu li a").each(function(){
                var Href = $(this).attr('href');
                if(windowUrl == Href){
                    $(this).parents('.sub-menu').parents('li').addClass('openMenu');
                }
            });
            
            $(".sidebar-menu-part .menu_part .sub-link").click(function(event){
                event.preventDefault();
                $(this).parent('li').find('.sub-menu').slideToggle();
                $(this).parent('li').toggleClass('openMenu');
                $(this).parent('li').siblings('li').find('.sub-menu').slideUp();
                $(this).parent('li').siblings('li').removeClass('openMenu');
            });
        });
    </script>


