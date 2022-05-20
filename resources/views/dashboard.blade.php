@extends('layouts.app')
@section('title')
  <title>Dashboard</title>
@endsection
@section('page-name')
  Dashboard
@endsection
@section('scripts')
 	<!-- Apex Chart -->
     <script src="{{asset('vendor/apexchart/apexchart.js')}}"></script>

     <script src="{{asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>

     <!-- Chart piety plugin files -->
     <script src="{{asset('vendor/peity/jquery.peity.min.js')}}"></script>

     <!-- Dashboard 1 -->
     <script src="{{asset('js/dashboard/statistics-page.js')}}"></script>
@endsection

@section('main-content')
   <div class="row">
       <div class="">
           <h1>Dashboard Module Coming Soon on June</h1>
            <p class="text-muted">This is a static page showing what the page will look like when launched</p>
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row separate-row">
                                            <div class="col-sm-6">
                                                <div class="pb-4 job-icon d-flex justify-content-between" style="position: relative;">
                                                    <div>
                                                        <div class="mb-1 d-flex align-items-center">
                                                            <h2 class="mb-0">342</h2>
                                                            <span class="text-success ms-3">+0.5 %</span>
                                                        </div>
                                                        <span class="mb-2 fs-14 d-block">Total Investors</span>
                                                    </div>
                                                    <div id="NewCustomers" style="min-height: 50px;"><div id="apexchartsnraldqcb" class="apexcharts-canvas apexchartsnraldqcb apexcharts-theme-light" style="width: 100px; height: 50px;"><svg id="SvgjsSvg1504" width="100" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1506" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1505"><clipPath id="gridRectMasknraldqcb"><rect id="SvgjsRect1509" width="110" height="56" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasknraldqcb"><rect id="SvgjsRect1510" width="104" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1516" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1517" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1525" class="apexcharts-grid"><g id="SvgjsG1526" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1528" x1="0" y1="0" x2="100" y2="0" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1529" x1="0" y1="10" x2="100" y2="10" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1530" x1="0" y1="20" x2="100" y2="20" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1531" x1="0" y1="30" x2="100" y2="30" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1532" x1="0" y1="40" x2="100" y2="40" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1533" x1="0" y1="50" x2="100" y2="50" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1527" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1535" x1="0" y1="50" x2="100" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1534" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1511" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1512" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1515" d="M 0 47.5C 7 47.5 13 22.5 20 22.5C 27 22.5 33 47.5 40 47.5C 47 47.5 53 10 60 10C 67 10 73 35 80 35C 87 35 93 10 100 10" fill="none" fill-opacity="1" stroke="var(--primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="6" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasknraldqcb)" pathTo="M 0 47.5C 7 47.5 13 22.5 20 22.5C 27 22.5 33 47.5 40 47.5C 47 47.5 53 10 60 10C 67 10 73 35 80 35C 87 35 93 10 100 10" pathFrom="M -1 60L -1 60L 20 60L 40 60L 60 60L 80 60L 100 60"></path><g id="SvgjsG1513" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1514" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1536" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1537" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1538" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1539" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1540" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1524" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1507" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 222px; height: 111px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="pt-4 pb-4 job-icon pt-sm-0 d-flex justify-content-between" style="position: relative;">
                                                    <div>
                                                        <div class="mb-1 d-flex align-items-center">
                                                            <h2 class="mb-0">984</h2>
                                                        </div>
                                                        <span class="mb-2 fs-14 d-block">Active Contracts</span>
                                                    </div>
                                                    <div id="NewCustomers1" style="min-height: 50px;"><div id="apexchartsc90cu6fn" class="apexcharts-canvas apexchartsc90cu6fn apexcharts-theme-light" style="width: 80px; height: 50px;"><svg id="SvgjsSvg1541" width="80" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1543" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1542"><clipPath id="gridRectMaskc90cu6fn"><rect id="SvgjsRect1546" width="90" height="56" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskc90cu6fn"><rect id="SvgjsRect1547" width="84" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1553" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1554" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1562" class="apexcharts-grid"><g id="SvgjsG1563" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1565" x1="0" y1="0" x2="80" y2="0" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1566" x1="0" y1="10" x2="80" y2="10" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1567" x1="0" y1="20" x2="80" y2="20" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1568" x1="0" y1="30" x2="80" y2="30" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1569" x1="0" y1="40" x2="80" y2="40" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1570" x1="0" y1="50" x2="80" y2="50" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1564" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1572" x1="0" y1="50" x2="80" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1571" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1548" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1549" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1552" d="M 0 47.5C 5.6 47.5 10.4 22.5 16 22.5C 21.6 22.5 26.4 35 32 35C 37.6 35 42.4 10 48 10C 53.6 10 58.4 47.5 64 47.5C 69.6 47.5 74.4 10 80 10" fill="none" fill-opacity="1" stroke="rgba(20,86,80,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="6" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskc90cu6fn)" pathTo="M 0 47.5C 5.6 47.5 10.4 22.5 16 22.5C 21.6 22.5 26.4 35 32 35C 37.6 35 42.4 10 48 10C 53.6 10 58.4 47.5 64 47.5C 69.6 47.5 74.4 10 80 10" pathFrom="M -1 60L -1 60L 16 60L 32 60L 48 60L 64 60L 80 60"></path><g id="SvgjsG1550" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1551" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1573" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1574" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1575" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1576" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1577" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1561" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1544" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 223px; height: 92px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="pt-4 pb-4 job-icon pb-sm-0 pe-3 d-flex justify-content-between" style="position: relative;">
                                                    <div>
                                                        <div class="mb-1 d-flex align-items-center">
                                                            <h2 class="mb-0">1.2 B</h2>
                                                            <span class="text-danger ms-3">-2 % </span>
                                                        </div>
                                                        <span class="mb-2 fs-14 d-block">Total Amount Invested</span>
                                                    </div>
                                                    <div id="NewCustomers2" style="min-height: 50px;"><div id="apexcharts0p634j51" class="apexcharts-canvas apexcharts0p634j51 apexcharts-theme-light" style="width: 80px; height: 50px;"><svg id="SvgjsSvg1578" width="80" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1580" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1579"><clipPath id="gridRectMask0p634j51"><rect id="SvgjsRect1583" width="90" height="56" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask0p634j51"><rect id="SvgjsRect1584" width="84" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1590" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1591" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1599" class="apexcharts-grid"><g id="SvgjsG1600" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1602" x1="0" y1="0" x2="80" y2="0" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1603" x1="0" y1="10" x2="80" y2="10" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1604" x1="0" y1="20" x2="80" y2="20" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1605" x1="0" y1="30" x2="80" y2="30" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1606" x1="0" y1="40" x2="80" y2="40" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1607" x1="0" y1="50" x2="80" y2="50" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1601" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1609" x1="0" y1="50" x2="80" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1608" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1585" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1586" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1589" d="M 0 47.5C 5.6 47.5 10.4 35 16 35C 21.6 35 26.4 47.5 32 47.5C 37.6 47.5 42.4 22.5 48 22.5C 53.6 22.5 58.4 35 64 35C 69.6 35 74.4 10 80 10" fill="none" fill-opacity="1" stroke="rgba(51,133,214,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="6" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask0p634j51)" pathTo="M 0 47.5C 5.6 47.5 10.4 35 16 35C 21.6 35 26.4 47.5 32 47.5C 37.6 47.5 42.4 22.5 48 22.5C 53.6 22.5 58.4 35 64 35C 69.6 35 74.4 10 80 10" pathFrom="M -1 60L -1 60L 16 60L 32 60L 48 60L 64 60L 80 60"></path><g id="SvgjsG1587" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1588" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1610" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1611" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1612" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1613" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1614" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1598" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1581" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 222px; height: 92px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="pt-4 job-icon d-flex justify-content-between" style="position: relative;">
                                                    <div>
                                                        <div class="mb-1 d-flex align-items-center">
                                                            <h2 class="mb-0">437</h2>
                                                        </div>
                                                        <span class="mb-2 fs-14 d-block">Unread Messages</span>
                                                    </div>
                                                    <div id="NewCustomers3" style="min-height: 50px;"><div id="apexchartse9afj4fx" class="apexcharts-canvas apexchartse9afj4fx apexcharts-theme-light" style="width: 100px; height: 50px;"><svg id="SvgjsSvg1615" width="100" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1617" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1616"><clipPath id="gridRectMaske9afj4fx"><rect id="SvgjsRect1620" width="110" height="56" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaske9afj4fx"><rect id="SvgjsRect1621" width="104" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1627" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1628" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1636" class="apexcharts-grid"><g id="SvgjsG1637" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1639" x1="0" y1="0" x2="100" y2="0" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1640" x1="0" y1="10" x2="100" y2="10" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1641" x1="0" y1="20" x2="100" y2="20" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1642" x1="0" y1="30" x2="100" y2="30" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1643" x1="0" y1="40" x2="100" y2="40" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1644" x1="0" y1="50" x2="100" y2="50" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1638" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1646" x1="0" y1="50" x2="100" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1645" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1622" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1623" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1626" d="M 0 47.5C 7 47.5 13 35 20 35C 27 35 33 47.5 40 47.5C 47 47.5 53 22.5 60 22.5C 67 22.5 73 35 80 35C 87 35 93 10 100 10" fill="none" fill-opacity="1" stroke="rgba(183,35,173,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="6" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske9afj4fx)" pathTo="M 0 47.5C 7 47.5 13 35 20 35C 27 35 33 47.5 40 47.5C 47 47.5 53 22.5 60 22.5C 67 22.5 73 35 80 35C 87 35 93 10 100 10" pathFrom="M -1 60L -1 60L 20 60L 40 60L 60 60L 80 60L 100 60"></path><g id="SvgjsG1624" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1625" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1647" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1648" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1649" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1650" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1651" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1635" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1618" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 223px; height: 92px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-xl-6">
								<div class="card">
									<div class="pb-0 border-0 card-header">
										<h4 class="fs-20 font-w600">Trending Projects</h4>
									</div>
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col-xl-6 col-sm-6">
												<div class="progress default-progress">
													<div class="progress-bar bg-vigit progress-animated" style="width: 90%; height:13px;" role="progressbar">
														<span class="sr-only">90% Complete</span>
													</div>
												</div>
												<div class="pb-4 mt-2 d-flex align-items-end justify-content-between">
													<span class="fs-14 font-w500">Chicken Rearing</span>
													<span class="fs-16"><span class="text-black pe-2"></span>90%</span>
												</div>
												<div class="progress default-progress">
													<div class="progress-bar bg-contact progress-animated" style="width: 68%; height:13px;" role="progressbar">
														<span class="sr-only">45% Complete</span>
													</div>
												</div>
												<div class="pb-4 mt-2 d-flex align-items-end justify-content-between">
													<span class="fs-14 font-w500">Corn Farming</span>
													<span class="fs-16"><span class="text-black pe-2"></span>68%</span>
												</div>

											</div>
											<div class="col-xl-6 col-sm-6" style="position: relative;">
												<div id="pieChart3" style="min-height: 212.8px;">
                                                </div>
                                                    {{-- <div id="apexcharts7qzm43rz" class="apexcharts-canvas apexcharts7qzm43rz apexcharts-theme-light" style="width: 222px; height: 212.8px;"><svg id="SvgjsSvg1610" width="222" height="212.8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1612" class="apexcharts-inner apexcharts-graphical" transform="translate(9, 0)"><defs id="SvgjsDefs1611"><clipPath id="gridRectMask7qzm43rz"><rect id="SvgjsRect1614" width="210" height="228" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask7qzm43rz"><rect id="SvgjsRect1615" width="210" height="232" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1616" class="apexcharts-pie"><g id="SvgjsG1617" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1618" r="62.71707317073171" cx="103" cy="103" fill="transparent"></circle><g id="SvgjsG1619" class="apexcharts-slices"><g id="SvgjsG1620" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1621" d="M 103 6.512195121951208 A 96.48780487804879 96.48780487804879 0 0 1 173.1826860015361 169.213949253871 L 148.61874590099848 146.03906701501614 A 62.71707317073171 62.71707317073171 0 0 0 103 40.28292682926829 L 103 6.512195121951208 z" fill="rgba(246,173,46,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="133.33333333333334" data:startAngle="0" data:strokeWidth="0" data:value="90" data:pathOrig="M 103 6.512195121951208 A 96.48780487804879 96.48780487804879 0 0 1 173.1826860015361 169.213949253871 L 148.61874590099848 146.03906701501614 A 62.71707317073171 62.71707317073171 0 0 0 103 40.28292682926829 L 103 6.512195121951208 z"></path></g><g id="SvgjsG1622" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx2" rel="2" data:realIndex="1"><path id="SvgjsPath1623" d="M 173.1826860015361 169.213949253871 A 96.48780487804879 96.48780487804879 0 0 1 24.866469291264266 159.61314219482492 L 52.21320503932178 139.79854242663617 A 62.71707317073171 62.71707317073171 0 0 0 148.61874590099848 146.03906701501614 L 173.1826860015361 169.213949253871 z" fill="var(--primary)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="100.74074074074073" data:startAngle="133.33333333333334" data:strokeWidth="0" data:value="68" data:pathOrig="M 173.1826860015361 169.213949253871 A 96.48780487804879 96.48780487804879 0 0 1 24.866469291264266 159.61314219482492 L 52.21320503932178 139.79854242663617 A 62.71707317073171 62.71707317073171 0 0 0 148.61874590099848 146.03906701501614 L 173.1826860015361 169.213949253871 z"></path></g><g id="SvgjsG1624" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx3" rel="3" data:realIndex="2"><path id="SvgjsPath1625" d="M 24.866469291264266 159.61314219482492 A 96.48780487804879 96.48780487804879 0 0 1 102.98315970125404 6.512196591544509 L 102.98905380581513 40.28292778450393 A 62.71707317073171 62.71707317073171 0 0 0 52.21320503932178 139.79854242663617 L 24.866469291264266 159.61314219482492 z" fill="rgba(65,46,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="125.92592592592592" data:startAngle="234.07407407407408" data:strokeWidth="0" data:value="85" data:pathOrig="M 24.866469291264266 159.61314219482492 A 96.48780487804879 96.48780487804879 0 0 1 102.98315970125404 6.512196591544509 L 102.98905380581513 40.28292778450393 A 62.71707317073171 62.71707317073171 0 0 0 52.21320503932178 139.79854242663617 L 24.866469291264266 159.61314219482492 z"></path></g></g></g></g><line id="SvgjsLine1626" x1="0" y1="0" x2="206" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1627" x1="0" y1="0" x2="206" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1613" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 115px;"></div><div class="apexcharts-tooltip apexcharts-theme-dark" style="left: -40.7578px; top: 55.0312px;"><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex; background-color: rgb(65, 46, 255);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(65, 46, 255); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">series-3: </span><span class="apexcharts-tooltip-text-value">85</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2; display: none; background-color: rgb(65, 46, 255);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(65, 46, 255); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">series-3: </span><span class="apexcharts-tooltip-text-value">85</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3; display: none; background-color: rgb(65, 46, 255);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(65, 46, 255); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">series-3: </span><span class="apexcharts-tooltip-text-value">85</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div> --}}
											<div class="resize-triggers"><div class="expand-trigger"><div style="width: 253px; height: 214px;"></div></div><div class="contract-trigger"></div></div></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="card">
									<div class="flex-wrap pb-0 border-0 card-header">
										<h4 class="fs-20 font-w600">Investment Flow Chart</h4>
										<div>
											<span>
												<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
												  <rect width="13" height="13" fill="#f73a0b"></rect>
												</svg>
												Following
											</span>
											<span class="ms-4 fs-16 font-w600">239</span>
											<div class="mt-2">
												<span>
													<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
													  <rect width="13" height="13" fill="#f73a0b"></rect>
													</svg>
													Followers
												</span>
												<span class="ms-4 fs-16 font-w600">824</span>
											</div>
										</div>
									</div>
									<div class="pt-0 pb-3 card-body" style="position: relative;">
										<div id="chartBar" class="chartBar" style="min-height: 245px;">
                                        </div>
									<div class="resize-triggers"><div class="expand-trigger"><div style="width: 527px; height: 260px;"></div></div><div class="contract-trigger"></div></div></div>
								</div>
							</div>


							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="card">
											<div class="pb-0 border-0 card-header">
												<h4 class="mb-1 fs-20">Top Investors</h4>
												<div class="dropdown">
													<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													</div>
												</div>
											</div>
											<div class="card-body loadmore-content">
												<div class="row" id="FeaturedCompaniesContent">
													<div class="mt-4 col-xl-6 col-sm-6 ">
														<div class="d-flex">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
																	  <g transform="translate(-457 -443)">
																		<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																		<g transform="translate(457 443)">
																		  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"></rect>
																		  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																		  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																		</g>
																	  </g>
																</svg>
															</span>
															<div class="ms-3 featured">
																<h4 class="mb-1 fs-20">Kleon Team</h4>
																<span>Desgin Team Agency</span>
															</div>
														</div>
													</div>
													<div class="mt-4 col-xl-6 col-sm-6">
														<div class="d-flex">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
																	  <g transform="translate(-457 -443)">
																		<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																		<g transform="translate(457 443)">
																		  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#7630d2"></rect>
																		  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																		  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																		</g>
																	  </g>
																</svg>
															</span>
															<div class="ms-3 featured">
																<h4 class="mb-1 fs-20">Ziro Studios Inc.</h4>
																<span>Desgin Team Agency</span>
															</div>
														</div>
													</div>
													<div class="mt-4 col-xl-6 col-sm-6">
														<div class="d-flex">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
																	  <g transform="translate(-457 -443)">
																		<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																		<g transform="translate(457 443)">
																		  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#b848ef"></rect>
																		  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																		  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																		</g>
																	  </g>
																</svg>
															</span>
															<div class="ms-3 featured">
																<h4 class="mb-1 fs-20">Qerza</h4>
																<span>Desgin Team Agency</span>
															</div>
														</div>
													</div>
													<div class="mt-4 col-xl-6 col-sm-6">
														<div class="d-flex">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
																	  <g transform="translate(-457 -443)">
																		<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																		<g transform="translate(457 443)">
																		  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#7e1d74"></rect>
																		  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																		  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																		</g>
																	  </g>
																</svg>
															</span>
															<div class="ms-3 featured">
																<h4 class="mb-1 fs-20">Kripton Studios</h4>
																<span>Desgin Team Agency</span>
															</div>
														</div>
													</div>
													<div class="mt-4 col-xl-6 col-sm-6">
														<div class="d-flex">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
																	  <g transform="translate(-457 -443)">
																		<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																		<g transform="translate(457 443)">
																		  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#0411c2"></rect>
																		  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																		  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																		</g>
																	  </g>
																</svg>
															</span>
															<div class="ms-3 featured">
																<h4 class="mb-1 fs-20">Omah Ku Inc.</h4>
																<span>Desgin Team Agency</span>
															</div>
														</div>
													</div>
													<div class="mt-4 col-xl-6 col-sm-6">
														<div class="d-flex">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
																	  <g transform="translate(-457 -443)">
																		<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																		<g transform="translate(457 443)">
																		  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#378a82"></rect>
																		  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																		  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																		</g>
																	  </g>
																</svg>
															</span>
															<div class="ms-3 featured">
																<h4 class="mb-1 fs-20">Ventic</h4>
																<span>Desgin Team Agency</span>
															</div>
														</div>
													</div>
													<div class="mt-4 col-xl-6 col-sm-6">
														<div class="d-flex">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
																	  <g transform="translate(-457 -443)">
																		<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																		<g transform="translate(457 443)">
																		  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#175baa"></rect>
																		  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																		  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																		</g>
																	  </g>
																</svg>
															</span>
															<div class="ms-3 featured">
																<h4 class="mb-1 fs-20">Sakola</h4>
																<span>Desgin Team Agency</span>
															</div>
														</div>
													</div>
													<div class="mt-4 col-xl-6 col-sm-6">
														<div class="d-flex">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
																  <g transform="translate(-457 -443)">
																	<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																	<g transform="translate(457 443)">
																	  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#eeb927"></rect>
																	  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																	  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																	</g>
																  </g>
																</svg>
															</span>
															<div class="ms-3 featured">
																<h4 class="mb-1 fs-20">Uena Foods</h4>
																<span>Desgin Team Agency</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="pt-0 m-auto border-0 card-footer">
												<a href="javascript:void(0);" class="m-auto btn btn-outline-primary btn-rounded dlab-load-more" id="FeaturedCompanies" rel="ajax/featuredcompanies.html">View more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>

   </div>
@endsection
